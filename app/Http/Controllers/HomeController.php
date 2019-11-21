<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    //
    private $category_list;

    public function __construct() {
        $this->category_list = App\Category::all();
    }

    public function ViewHome() {
        $category = App\Category::all();
        $new_products = App\Product::orderBy('id', 'DESC')->take(5);

        $data = [
            'category_list' => $this->category_list,
            'categories' => $category,
            'new_products' => $new_products,
        ];

        return view('home')->with($data);
    }
}
