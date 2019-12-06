<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Backpack\CRUD\app\Library\CrudPanel\Traits\Search;

class SearchController extends MasterController
{
    //
    public function Render($name) {

        $result = $this->Search($name);

        $data = [
            'page' => 10,
            'category' => 'Kết quả tìm kiếm',
            'products' => $result,
        ];
        $master_data = $this->GetMasterPageData();

        $data = array_merge($data, $master_data);

        return view('shop')->with($data);
    }

    public function Search($name) {
        $words = explode('-', $name);

        $search_matrix = [];

        foreach ($words as $word) {
            $search_matrix[$word] = App\Product::where('slug', 'LIKE', "%$word%")->get()->all();
        }

        $search_result = [];
        foreach($search_matrix as $row) {
            foreach ($row as $product) {
                if (!in_array($product, $search_result)) {
                    $search_result[] = $product;
                }  
            }
        }

        return $search_result;
        // $previous_iterate_word = '';
        // $merged_array = null;
        // foreach ($words as $word) {
        //     // to skip the first element(row) of the search matrix
        //     if($previous_iterate_word != '') {
        //         // $merged_array = array_filter($search_matrix[$previous_iterate_word], function ($var) use ($word) {
        //         //     return $var->slug == 'ao-ba-lo';
        //         // });
        //         // var_dump($merged_array);
        //         $obj = $search_matrix[$previous_iterate_word];

        //         var_dump( $obj->where('slug', 'LIKE', '%ao%' )->all());
        //         // //echo 1;
        //         // foreach($obj as $var) {
        //         //     echo $var->name;
        //         // }
        //     }

        //     // $obj = $search_matrix[$word];
        //     //     //echo 1;
        //     // foreach($obj as $var) {
        //     //     echo $var->name;
        //     // }
        //     // echo '<br>';
            
        //     $previous_iterate_word = $word;
        // }
        //var_dump($search_matrix);
    }
}
