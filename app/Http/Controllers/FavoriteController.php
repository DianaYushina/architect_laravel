<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Product;
use App\Models\FavoriteProduct;

class FavoriteController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {
        $user_id = Auth::id();
        $fav_products = FavoriteProduct::where('user_id', $user_id)->get();
        $product_ids = [];
        foreach($fav_products as $fp) {
            $product_ids[] = $fp->product_id;
        }

        $products = Product::whereIn('id', $product_ids)->get();
        // dd($products);

        return view('favorite', compact('products'));
    }

    public function postFavorite($prod_id=null, Request $request) {
        // dd($prod_id);
        // dd($request->id);
        // dd($request->all());

        $fp = new FavoriteProduct();
        $fp->user_id = (Auth::guest()) ? 0 : Auth::user()->id;
        $fp->product_id = $prod_id;
        
        $fp->save();

        // $basket = '';
        // if (isset($_COOKIE['basket'])) {
        //     $basket = $_COOKIE['basket'];
        // }

        // $order = new Order;
        // $order->user_id = (Auth::guest()) ? 0 : Auth::user()->id;
        // $order->user_name = $request->user_name;
        // $order->email = $request->email;
        // $order->phone = $request->phone;
        // $order->country = $request->country;
        // $order->city = $request->city;
        // $order->address = $request->address;
        // $order->order_status = 'new';
        // $order->cookie = $basket;
        // $order->save();
        
        // setcookie("basket", '', time()-1, '/');
        // // return redirect()->to("/"); 
        return redirect()->back();
    }
}
