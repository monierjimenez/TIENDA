<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;

use App\Category;

class CategoryList
{
    public function compose(View $view)
    {
        $categorysList = Category::where("condition","=",0)->get();
        $view->with(['categorysList' => $categorysList]);
    }
}
