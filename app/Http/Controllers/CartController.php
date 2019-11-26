<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CartController extends MasterController
{
    //

    public function Render() {
        $cart_list = json_decode($_COOKIE['cart']);

        $products = [];
        foreach( $cart_list as $id => $qty) {
            $product = App\Product::find($id);

            if ($product) {
                $product->qty = $qty;
                $products[] = $product;
            }
        }

        $master_data = $this->GetMasterPageData();
        $data = [
            'products' => $products,
        ];

        $data = array_merge($data, $master_data);

        return view('cart')->with($data);
    }
    
}
