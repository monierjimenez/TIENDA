<?php

namespace App\Http\Controllers\admin;

use App\Category;
//use App\Submenu;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = Category::latest()->get();
        return view('admin.categorias.index', compact('categorias'));
    }

    public function store(Request $request)
    {
	  	$this->validate($request, ['name' => 'required|unique:categories,name']);
        $categoria = Category::create([
            'name' => $request->get('name'),
            'url' => Str::slug($request->get('name')),
            'seotitle' => '',
            'seodescription' => '',
            'seokeywords' => '',
            'condition' => '1',
            ]);
		  return redirect()->route('admin.categorias.edit', $categoria);
    }

    public function edit(Category $categoria)
    {
		return view('admin.categorias.edit', compact('categoria'));
    }

    public function update(Category $categoria, Request $request)
    {
	  	$this->validate($request, [
            'name' => 'required|unique:categories,name,'.$categoria->id,
            'seotitle' => 'required',
            'seodescription' => 'required',
            'seokeywords' => 'required',
        ]);

        if( $request->hasFile('image') )
        {
            if ( $categoria->image != '' ){
                unlink(public_path().'/images/'.$categoria->image);
            }
            $file = $request->file('image');
            $nombrearchivo  = time().'-'.$file->getClientOriginalName();
            //dd($nombrearchivo);
            $file->move(public_path().'/images/category', $nombrearchivo);
            $categoria->image = 'category/'.$nombrearchivo;
            $categoria->update([
                'image' => 'category/'.$nombrearchivo
            ]);
            $categoria->save();
        }

		//$categoria->url = Str::slug($request->get('name'));
        $categoria->update([
            'name' => $request->input('name'),
            'url' => Str::slug($request->get('name')),
            'seotitle' => $request->input('seotitle'),
            'seodescription' => $request->input('seodescription'),
            'seokeywords' => $request->input('seokeywords'),
            'condition' => $request->input('condition'),
        ]);
        $categoria->save();
      return redirect()->route('admin.categorias.edit', $categoria)->with('flash', 'Category has been saved correctly.');
    }

    public function destroy(Category $categoria)
    {
		//$categoria->delete();
        $categoria->update([
            'condition' => '1',
        ]);
        $categoria->save();
		return redirect()->route('admin.categorias.index')->with('flash', 'Category has been removed.');
	}
}
