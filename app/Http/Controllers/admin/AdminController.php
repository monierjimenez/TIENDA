<?php
namespace App\Http\Controllers\Admin;

use App\Finance;
use App\Order;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ( auth()->user()->permissions != '' ){
            // $ultimosequipoasociados = Equiposasociado::where("vendido","=",1)->orderBy('updated_at', 'desc')->limit(7)->get();
            // $ultimascompras = Articulo::orderBy('updated_at', 'desc')->limit(5)->get();
             $caja = Finance::find(1);
             $productstocks = Product::where('stock', '<', '15')->where('condition', '=', 0 )->orderBy('stock', 'asc')->limit(15)->get();

//            $salesAll = Order::where('paymentstatus', '=', 'PAID' )->sum('amount_total');
//            $profitSale = Order::where('paymentstatus', '=', 'PAID' )->sum('profit_sale');

            return view('admin.dashboard', compact('caja', 'productstocks'));
        }
        else{
            return redirect()->route('welcome');
            // return view('welcome');
        }
    }
}
