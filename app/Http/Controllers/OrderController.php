<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function addOrder(Request $request){
        $order = new Order();
        $order->last_name = $request->input('last_name');
        $order->email = $request->input('email');
        $order->state = $request->input('state');
        $order->country = $request->input('country');
        $order->postcode = $request->input('postcode');
        $order->total = $request->input('total');


        DB::table('orders')->insert([
            'last_name' => $order->last_name,
            'email'     => $order->email,
            'state'     => $order->state,
            'country'   => $order->country,
            'postcode'  => $order->postcode,
            'total'     => $order->total,
        ]);

        $order_id = DB::table('orders')->where('email', $order->email)->pluck('id');
        foreach ($order_id as $id){
            $id_for_order = $id;
        }

        $products = DB::table('carts')->get();

        foreach ($products as $product){
            DB::table('ordered_products')->insert([
                'title'     => $product->title,
                'price'     => $product->price,
                'stars'     => $product->stars,
                'size'      => $product->size,
                'color'     => $product->color,
                'quantity'  => $product->quantity,
                'order_id'  => $id_for_order
            ]);
        }
        DB::table('carts')->delete();
    }
}
