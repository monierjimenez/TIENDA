<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        if ( Auth::guest() ){
            return redirect()->route('login');
        }else {
            $cant = count(Order::where('user_id', '=', auth()->user()->id)->where('paymentstatus', '=', 'PAID')->get());
            $orders = Order::where('user_id', '=', auth()->user()->id)->where('paymentstatus', '=', 'PAID')->orderBy('order_date', 'desc')->paginate(3);
            return view('pages.myorders', compact('orders', 'cant'));
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Order $order)
    {
        //
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(Request $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        //
    }
}
