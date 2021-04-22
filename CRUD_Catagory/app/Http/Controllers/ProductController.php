<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
         $products = Product::get();
         
         return view('products.index',['products'=>$products]);

    }
    // create product
    public function create(){
        $categories = Category::get();
        return view('products.create',['categories'=>$categories]);
    }
    // store product

    public function store(ProductRequest $product){
        
        // if success will redirect to route index

        return redirect(route('products.index'));

    }
    public function show(Product $product){
        return view('products.show',['product'=>$product]);
    }

    public function edit(Product $product){
        $categories = Category::get();
        return view('products.edit',['product'=>$product],['categories'=>$categories]);
    }

    public function update(Product $product){
        return view('products.index',['product'=>$product]);
    }

    public function destroy(Product $product){
        return view('products.index',['product'=>$product]);
    }
}
