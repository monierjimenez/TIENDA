<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use App\Category;
use App\ShoppingCart;

class CategoryList
{
    public function compose(View $view)
    {
//        $session_name = 'shopping_cart_id';
//        $shopping_cart_id = Session::get($session_name);
//        $shopping_cart = ShoppingCart::findOrCreateBySessionId($shopping_cart_id);
//        return dd($shopping_cart) ;
//

        $categorysList = Category::where("condition","=",0)->get();
        $view->with(['categorysList' => $categorysList]);
    }
}
