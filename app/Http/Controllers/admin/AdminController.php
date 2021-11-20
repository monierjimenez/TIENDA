<?php
namespace App\Http\Controllers\Admin;

use App\Finance;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
             $productstoc = Product::where();
            return view('admin.dashboard', compact('caja'));
        }
        else{
            return redirect()->route('welcome');
            // return view('welcome');
        }
    }
}
