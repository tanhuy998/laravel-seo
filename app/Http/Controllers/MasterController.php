<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;    

class MasterController extends Controller
{
    //
    public function GetMasterPageData() {
        $data = [
            'category_list' => App\Category::all(),
        ];

        return $data;
    }
}
