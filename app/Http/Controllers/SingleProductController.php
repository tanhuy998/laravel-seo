<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class SingleProductController extends MasterController
{
    //
    public function Render($id) {
        $product = App\Product::where('slug','=',$id)->firstOrFail();

        if ($product) {
            $data1 = [
                'page' => 0,
                'product' => $product,
            ];
            $master_data = $this->GetMasterPageData();

            $data = array_merge($data1, $master_data);

            return view('singleProduct')->with($data);
        }
        else {
            return '<h2>404<\h2>';
        }
    }
}
