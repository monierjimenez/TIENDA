<?php

namespace App\Http\Controllers\admin;

use App\Colore;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColoresController extends Controller
{
    public function index()
    {
        $colores = Colore::latest()->get();
        return view('admin.colores.index', compact('colores'));
    }

    public function store(Request $request)
    {
	  	$this->validate($request, ['name' => 'required|unique:submenus,name']);
        $colores = Colore::create([
            'name' => $request->get('name'),
            'url' => Str::slug($request->get('name')),
            ]);        
		  return redirect()->route('admin.colores.edit', $colores);
    }

    public function edit(Colore $colore)
    {
        //$colore = Colore::all();
		return view('admin.colores.edit', compact('colore'));
    }

    public function update(Colore $colore, Request $request)
    {	
	  	$this->validate($request, [
            'name' => 'required|unique:colores,name,'.$colore->id,
        ]);
		$colore->url = Str::slug($request->get('name'));
		
        $colore->update($request->all());
        $colore->save();

      return redirect()->route('admin.colores.edit', $colore)->with('flash', 'El color ha sido guardado correctamente.');
    }

    public function destroy(Colore $colore)
    {
		$colore->delete();
		return redirect()->route('admin.colores.index')->with('flash', 'Color ha sido eliminado.');
	}
}
