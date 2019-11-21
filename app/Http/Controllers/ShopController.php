<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App;

class ShopController extends Controller
{
    //  
    private $category_list;

    public function __construct() {
        $this->category_list = App\Category::all();
    }

    public function ViewCategory($category) {
        $category = App\Category::where('slug', '=', $category)->firstOrFail();

        if ($category) {

            $data = [
                'category_list' => $this->category_list,
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
