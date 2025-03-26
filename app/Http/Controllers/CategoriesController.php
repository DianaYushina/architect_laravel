<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;

class CategoriesController extends Controller
{
    public function getIndex($id = -1) {
        if ($id == -1) {
            $categories = Category::all();
        } else {
            $categories = Category::where('id', $id)->get();
        }
        
        $products = Product::all();

        // $products = DB::table('products')
        //         ->join('categories', 'products.category_id', '=', 'categories.id')
        //         ->select('products.id', 'products.name', 'products.price', 'products.stars', 'products.picture', 'products.description_small', 'categories.name as category_name')
        //         ->get();
                
        return view('categories', compact('categories'), compact('products'));
    }
}
