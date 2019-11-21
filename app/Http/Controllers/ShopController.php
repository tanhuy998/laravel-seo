<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App;

class ShopController extends MasterController
{
    //  

    public function ViewCategory($category) {
        $category = App\Category::where('slug', '=', $category)->firstOrFail();

        if ($category) {
            $master_data = $this->GetMasterPageData();

            $data1 = [
                'page' => 2,
                'category' => $category->name,
                'products' => $category->products,
            ];

            $data = array_merge($data1, $master_data);

            return view('shop')->with($data);
        }
        else {
            return '<h2>404</h2>';
        }
    }
}
