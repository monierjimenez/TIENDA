<?php

namespace App\Http\Controllers\admin;

use App\Estados;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    public function index()
    {
        $states = Estados::latest()->get();
        return view('admin.states.index', compact('states'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required|unique:estados,name']);
        $state = Estados::create([
            'name' => $request->get('name'),
            'url' => Str::slug($request->get('name')),
            'status' => '1',
        ]);
        return redirect()->route('admin.states.edit', $state);
    }

    public function edit(Estados $state)
    {
        return view('admin.states.edit', compact('state'));
    }

    public function update(Request $request, Estados $state)
    {
        $this->validate($request, [
            'name' => 'required|unique:estados,name,'.$state->id,
        ]);

        $state->update([
            'name' => $request->input('name'),
            'url' => Str::slug($request->get('name')),
            'status' => $request->input('status'),
        ]);
        $state->save();
        return redirect()->route('admin.states.edit', $state)->with('flash', 'State has been saved correctly.');
    }

    public function destroy(Estados $state)
    {
        $state->update([
            'status' => '0',
        ]);
        $state->save();
        return redirect()->route('admin.states.index')->with('flash', 'State has been removed.');
    }
}
