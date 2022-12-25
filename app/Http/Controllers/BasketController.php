<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Auth;

class BasketController extends Controller {   
    public function getIndex() {
        $basket = '';
        if (isset($_COOKIE['basket'])) {
            $basket = $_COOKIE['basket'];
        }
        // dump($basket);
        $products_arr = [];
        $basket_arr = explode(',', $basket);
        $products_count = [];
        foreach($basket_arr as $key=>$value) {
            if ($value != '') {
                $value_arr = explode(':', $value);
                $products_arr[] = Product::find($value_arr[0]);
                $products_count[$value_arr[0]] = $value_arr[1];
            } 
        }
        // dump($products_arr);
        
        return view('basket', compact('products_arr', 'products_count'));  
    }

    public function postOrder(Request $request) {
        //dd($request->all());
        $basket = '';
        if (isset($_COOKIE['basket'])) {
            $basket = $_COOKIE['basket'];
        }

        $order = new Order;
        $order->user_id = (Auth::guest()) ? 0 : Auth::user()->id;
        $order->user_name = $request->user_name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->country = $request->country;
        $order->city = $request->city;
        $order->address = $request->address;
        $order->order_status = 'new';
        $order->cookie = $basket;
        $order->save();
        
        setcookie("basket", '', time()-1, '/');
        // return redirect()->to("/"); 
        return view("order_completed");
    }
    public function getDelete($prod_id=null) {
        // dd($_COOKIE['basket'],$prod_id);
        if (isset($_COOKIE['basket'])) {
            $str = '';
            $basket = $_COOKIE['basket'];
            $basket_arr=explode(',',$basket);
           foreach ($basket_arr as $value) {
            $prod = explode(':', $value);
            if (isset($prod[1])) {
                if ($prod[0]==$prod_id) {
               
                } else {
                    $str .= $value .',';
                }
            }
            
           }
           setcookie('basket', $str, time() + 3600*24, '/');
           return redirect()->back();
        } 
       
    } 

    public function postCount($prod_id=null, Request $request) {
        // dd($prod_id, $request[$prod_id]);
        if (isset($_COOKIE['basket'])) {
            $str = '';
            $basket = $_COOKIE['basket'];
            $basket_arr=explode(',',$basket);
           foreach ($basket_arr as $value) {
            $prod = explode(':', $value);
            if (isset($prod[1])) {
                $str .= $prod[0].':'.$request[$prod_id].':'.$prod[2].',';
            }
            
           }
        //    dd($prod_id, $request[$prod_id], $str);
           setcookie('basket', $str, time() + 3600*24, '/');
           return redirect()->back();
        } 
    }
} 
