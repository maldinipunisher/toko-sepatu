<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home() {

        $products = app()->call('App\Http\Controllers\ProductController@products');
        return view('home')->with('products', $products);
    }
    public function cart() {
        $products = Auth::user()->products;
        return view('partial.cart')->with('products', $products);
    }
    public function payment() {
        return view('partial.payment');
    }
    public function pengiriman() {
        return view('partial.pengiriman');
    }
    public function penawaran() {
        return view('partial.penawaran');
    }
    public function detail() {
        return view('partial.detail');
    }
    public function tipe() {
        return view('partial.tipe');
    }
    public function diskon() {
        return view('partial.diskon');
    }

}
