<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App;

class ShopController extends Controller
{
    //
    public function ViewCategory($category) {
        $category = App\Category::find($category);

        if ($category) {

            $data = [
                'category' => $category->name,
                'products' => $category->products,
            ];

            return view('shop')->with($data);
        }
        else {
            return '<h2>404</h2>';
        }
    }
}
