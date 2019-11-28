<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App;

class CheckoutController extends MasterController
{
    //
    public function MiddleCheck() {
        if (!isset($_COOKIE['cart'])) {
            return redirect()->back();
        }
        else return $this->Render();
    }

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
        
        return view('checkout')->with($data);
    }

    public function PlaceOrder(Request $request) {

        $total = 0;
        $total_qty = 0;

        if (isset($_COOKIE['cart'])) {
            $cart_list = json_decode($_COOKIE['cart'], TRUE);
            //print_r($cart_list);

            //return 0;
            $detail = $request->all();

            $order = new App\Order();
            $order->customer_name = $detail['name'];
            $order->phone = $detail['phone'];
            $order->address = $detail['address'];
            $order->note = $detail['comments'];
            $order->save();

            $payment_method = App\PaymentMethod::where('name', '=', $detail['payment_method'])->first();
            $payment = new App\Payment();

            if ($payment_method && $order) {
                $payment->Order()->associate($order);
                $payment->PaymentMethod()->associate($payment_method);

                $payment->confirm = ($detail['payment_method'] == 'cheque')? false: true;
                $payment->save();
            }
            

            foreach( $cart_list as $data) {
                $product = App\Product::find($data['id']);
                
                if ($product) {
                    $product->qty = $data['qty'];
                    $total += $product->price * $product->qty;
                    $total_qty += $product->qty;

                    $ordered_product = new App\OrderedProduct();

                    $ordered_product->Order()->associate($order);
                    $ordered_product->Product()->associate($product);
                    $ordered_product->quantity = $product->qty;

                    $ordered_product->save();

                    
                }
            }
        }
        setcookie('cart','',time() - 3600, '/');
        return 0;
    }
}
