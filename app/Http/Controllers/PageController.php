<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

        $products = app()->call('App\Http\Controllers\ProductController@products');
        return view('home')->with('products', $products);
    }
}
