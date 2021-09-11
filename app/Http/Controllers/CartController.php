<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request){
        $cart = new ProductUser();
        $cart->user = Auth::user()->user_id;
        $cart->product = $request->product_id;
        $cart->save();

        return back()->with('success', 'Produk ditambahkan ke dalam cart');
    }

    public function cart(){
        // $cart = ProductUser::all()->where('user', Auth::user()->user_id);
        $products = Auth::user()->products;
        foreach ($products  as $product) {
            return array('products' => array(
                'id' => $product->product_id,
                'name' => $product->name,
            ));
        }

    }
}
