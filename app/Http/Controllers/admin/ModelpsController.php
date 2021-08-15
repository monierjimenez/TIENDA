<?php

namespace App\Http\Controllers\admin;

use App\Modelp;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  ModelpsController extends Controller
{
//    public function index()
//    {
//        $brands = Brand::latest()->get();
//        return view('admin.categorias.index', compact('categorias'));
//    }

//    public function store(Request $request)
//    {
//	  	$this->validate($request, ['name' => 'required|unique:categories,name']);
//        $categoria = Category::create([
//            'name' => $request->get('name'),
//            'url' => Str::slug($request->get('name')),
//            ]);
//		  return redirect()->route('admin.categorias.edit', $categoria);
//    }
//
//    public function edit(Category $categoria)
//    {
//		return view('admin.categorias.edit', compact('categoria'));
//    }
//
//    public function update(Category $categoria, Request $request)
//    {
//	  	$this->validate($request, [
//            'name' => 'required|unique:categories,name,'.$categoria->id,
//        ]);
//		$categoria->url = Str::slug($request->get('name'));
//
//        $categoria->update($request->all());
//        $categoria->save();
//
//      return redirect()->route('admin.categorias.edit', $categoria)->with('flash', 'La categoria ha sido guardado correctamente.');
//    }
//
//    public function destroy(Category $categoria)
//    {
//		$categoria->delete();
//		return redirect()->route('admin.categorias.index')->with('flash', 'La categoria ha sido eliminada.');
//	}
}
