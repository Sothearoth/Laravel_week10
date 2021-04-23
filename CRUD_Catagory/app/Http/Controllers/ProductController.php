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

    public function store(Request $request){
        
        // if success will redirect to route index
        Product :: create($request->all());
        return redirect(route('products.index'));

    }
    public function show(ProductRequest $request, Product $product){
      $product->name = $request->get('name');
      $product->unit_price = $request->get('unit_price');
      $product->categorie_id = $request->get('categorie_id');
      $product->qty_in_stock = $request->get('qty_in_stock');
      $product->save();

         return view('products.show',['product'=>$product]);
        //return redirect(route('products.index'));
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
