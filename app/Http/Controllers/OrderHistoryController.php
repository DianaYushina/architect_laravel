<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Auth;


class OrderHistory {
    public $date;
    public $products;
}

class OrderHistoryController extends Controller
{
    public function getIndex($id = -1) {
        $user = Auth::user();
        $user_id = Auth::id();

        // dd($user_id);

        $orders = Order::where('user_id', $user_id)->get();
        // dd($orders);
        $order_hist_arr = [];

        foreach ($orders as $ord) {
            // dd($ord);
            $order_hist = new OrderHistory();
            $order_hist->date = $ord->updated_at;
            // $order_hist->products = [];

            $cookie_arr = explode(",", $ord->cookie);
            $prod_ids = [];
            foreach ($cookie_arr as $c) {
                if ($c != "") {
                    $prod_ids[] = explode(":", $c)[0];
                }
            }

            $order_hist->products = Product::whereIn('id', $prod_ids)->get();
            $order_hist_arr[] = $order_hist;
        }

        // dd($order_hist_arr);
        
        
        
        // $products = Product::all();

        // $products = DB::table('products')
        //         ->join('categories', 'products.category_id', '=', 'categories.id')
        //         ->select('products.id', 'products.name', 'products.price', 'products.stars', 'products.picture', 'products.description_small', 'categories.name as category_name')
        //         ->get();
                
        return view('order_history', compact('order_hist_arr'));
    }
}
