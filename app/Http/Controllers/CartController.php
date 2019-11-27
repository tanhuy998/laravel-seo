<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CartController extends MasterController
{
    //

    public function Render() {

        $products = [];
        $total = 0;
        $total_qty = 0;
        if (isset($_COOKIE['cart'])) {
            $cart_list = json_decode($_COOKIE['cart'], TRUE);

            foreach( $cart_list as $data) {
                $product = App\Product::find($data['id']);
                
                if ($product) {
                    $product->qty = $data['qty'];
                    $products[] = $product;
                    $total += $product->price * $product->qty;
                    $total_qty += $product->qty;
                }
            }
        }
        
        $master_data = $this->GetMasterPageData();
        $data = [
            'page' => 3,
            'products' => $products,
            'total' => $total,
            'total_qty' => $total_qty,
        ];

        $data = array_merge($data, $master_data);

        return view('cart')->with($data);
    }
    
}
