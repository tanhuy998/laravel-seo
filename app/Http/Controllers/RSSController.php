<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use App;

class RSSController extends MasterController
{
    //
    public function Feed($_category) {
        $category = App\Category::where('slug', '=', $_category)->first();

        if ($category){
            $products = $category->Products->take(10);

            $data = [
                'category' => $category,
                'products' => $products,
            ];

            $content = View::make('rss')->with($data);
            $response = Response::make($content, '200')->header('Content-Type', 'text/xml');

            return $response;
        }
    }

    public function RenderView() {
        $categories = App\Category::all();

        $master_data = $this->GetMasterPageData();
        $master_data['page'] = 6;

        $data = [
            'categories' => $categories,
        ];

        $data = array_merge($data, $master_data);

        return view('rssView')->with($data);
    }
}
