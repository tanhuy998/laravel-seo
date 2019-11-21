<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends MasterController
{
    //

    public function ViewHome() {
        $category = App\Category::all();
        $new_products = App\Product::orderBy('id', 'DESC')->take(5);

        $master_data = $this->GetMasterPageData();

        $data1 = [
            'page' => 1,
            'categories' => $category,
            'new_products' => $new_products,
        ];

        $data = array_merge($master_data, $data1);
        return view('home')->with($data);
    }
}
