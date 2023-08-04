<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    //
    public function create_product(Request $req){
    
         $productname = $req -> product_name;
         $authorname = $req -> author_name;
         $productprice = $req -> price;
         $productdes = $req -> description;
         $productimg = $req -> image_path;
         $categorypro = $req -> category;
 
         #createmodelsavedatabase
         $new_data = new Product([
             'product_name' => $productname,
             'author_name' => $authorname,
             'price' => $productprice,
             'description' => $productdes,
             'image_path' => $productimg,
             'category' => $categorypro
         ]);

        $new_data -> save();
        return response() -> json(['data' => $new_data], 200);
        //dd($new_data);
 
     }
    public function get_products(Request $req){
        $limit = $req ->  limit;
        $offset = $req -> offset;
        $new_data = Product::all()->skip($offset)->take($limit);
        return response() -> json(['data' => $new_data], 200);
       

    }

    public function delete_product(Request $req){
        $goods_id = $req -> product_id;
       // dd($client_id);

       $delete_query = Product::where('id', $goods_id)->delete();
       if ($delete_query == 0){
        return response() -> json(['message' => 'Product not found'], 200);
        }  
       return response() -> json(['message' => 'delete successful']);

       //return response() -> json(['message' => $req -> all()], 200);
    }
}
