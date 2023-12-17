<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function addProduct(){
        return view('pages.addProduct');
    }
    public function storeProduct(Request $request){
        $submit=$request->input("submit");
        if($submit=="submit"){
            DB::table("products")->insert([
                "user_id"=>1,
                "category_id"=>1,
                "title"=> $request->input('title'),
                "description"=> $request->input('description'),
                "price"=> $request->input('price'),
                "stock"=> $request->input('stock'),
                "discount"=> $request->input('discount'),
                "brand_name"=> $request->input('brands'),
                "image"=> $request->input('images'),
            ]);
            return redirect("./")->with('success', 'product stored successfully!');
        }
    }
    public function getProduct(){
        $products=DB::table("products")->get();
        return view('components.users.products',["products"=>$products]);
        // return $products;
        
    }
    
}
