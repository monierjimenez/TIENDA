<?php

namespace App\Http\Controllers\admin;

use App\Order;
use App\Record;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersforgottenController extends Controller
{
    public function index()
    {
        //$orders = Order::where('paymentstatus', '=', 'PAID')->orderBy('order_date', 'desc')->get();
        if ( !checkrights('PUORSV', auth()->user()->permissions) )
            return redirect()->route('admin')->with('flasherror', 'Permissions denied to perform this operation, contact the administrator.');

        return view('admin.forgottenorders.index');
    }

    public function orderGeneral()
    {
        return Datatables()->of(Order::with("estado", "municipio", "user")
            ->where('paymentstatus', '=', 'PENDING'))
            ->editColumn('created_at', function ($record) {
                return [
                    'display' => $record->created_at->format('Y-m-d, G:i'), //, G:i:s format('M d, Y, G:i')
                    'timestamp' => $record->created_at->timestamp
                ];
            })
            ->addColumn('btn', 'admin.datatablesajax.datatablesforgottenorders')
            ->rawColumns(['btn'])
            ->toJson();
    }

    public function show($id)
    {
        if ( !checkrights('PUORSV', auth()->user()->permissions) )
            return redirect()->route('admin')->with('flasherror', 'Permissions denied to perform this operation, contact the administrator.');
        $order = Order::findorfail($id);
        if ( $order->paymentstatus != 'PENDING')
            return redirect()->route('admin')->with('flasherror', 'Permissions denied to perform this operation, contact the administrator.');


        $user = auth()->user();

        return view('admin.forgottenorders.show', compact('order', 'user'));
    }

    public function store(Request $request)
    {
//        $this->validate($request, ['name' => 'required|unique:estados,name']);
//        $state = Estados::create([
//            'name' => $request->get('name'),
//            'url' => Str::slug($request->get('name')),
//            'status' => '1',
//        ]);
//        return redirect()->route('admin.states.edit', $state);
    }

    public function edit(Order $order)
    {
//        return view('admin.states.edit', compact('state'));
    }

    public function update(Request $request, Order $order)
    {
//        $this->validate($request, [
//            'name' => 'required|unique:estados,name,'.$state->id,
//        ]);
//
//        $state->update([
//            'name' => $request->input('name'),
//            'url' => Str::slug($request->get('name')),
//            'status' => $request->input('status'),
//        ]);
//        $state->save();
//        return redirect()->route('admin.states.edit', $state)->with('flash', 'State has been saved correctly.');
    }

    public function destroy(Order $order)
    {
//        $state->update([
//            'status' => '0',
//        ]);
//        $state->save();
//        return redirect()->route('admin.states.index')->with('flash', 'State has been removed.');
    }
}
