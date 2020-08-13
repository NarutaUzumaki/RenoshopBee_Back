<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $cart = new Cart();
        $cart->title = $request->input('title');
        $cart->price = $request->input('price');
        $cart->stars = $request->input('stars');
        $cart->img = $request->input('img');
        $cart->size = $request->input('size');
        $cart->color = $request->input('color');
        $cart->quantity = $request->input('quantity');

        DB::table('carts')
            ->insert([
                'title' => $cart->title,
                'price' => $cart->price,
                'stars' => $cart->stars,
                'img'   => $cart->img,
                'size'  => $cart->size,
                'color' => $cart->color,
                'quantity' => $cart->quantity
            ]);
    }

    public function getFromCart(){
        $products = DB::table('carts')->get();

        return response()->json([
           'products' => $products
        ]);
    }
}
