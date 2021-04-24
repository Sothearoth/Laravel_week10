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

    public function store(ProductRequest $request){
        
        // if success will redirect to route index
        Product :: create($request->all());
        return redirect(route('products.index'))->with('success',$request->get('name').' is created successfully');

    }
    public function show( Product $product){
        
         return view('products.show',['product'=>$product]);
        //return redirect(route('products.index'));
    }

    public function edit(Product $product){
        $categories = Category::get();
        return view('products.edit',['product'=>$product],['categories'=>$categories]);
    }

    public function update(ProductRequest $request,Product $product ){
        $product->update($request->all());
        return redirect(route('products.index'))->with('success',$product->name.' is updated successfully');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('products.index'))->with('success',$product->name.' is deleted');
    }

}
