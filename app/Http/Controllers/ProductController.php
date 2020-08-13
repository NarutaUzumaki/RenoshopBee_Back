<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();

        return response()->json([
            'products'=>$products
        ]);
    }

    public function getProductById($id){
        $product = DB::table('products')->find($id);

        return response()->json([
            'product'=>$product
        ]);
    }

    public function getCatalog(){
        $catalog = DB::table('products')->take(4)->get();

        return response()->json([
            'catalog' => $catalog
        ]);
    }
}
