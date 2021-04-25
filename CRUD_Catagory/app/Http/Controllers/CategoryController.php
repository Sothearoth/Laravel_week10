<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
         $categories = Category::get();
         
         return view('categories.index',['categories'=>$categories]);

    }
    // create product
    public function create(){
       
        return view('categories.create');
    }
    // store product

    public function store(CategoryRequest $request){
        
        // if success will redirect to route index
        Category :: create($request->all());
        return redirect(route('categories.index'))->with('success',$request->get('name').' is created successfully');

    }
    public function show( Category $category){
        
         return view('categories.show',['category'=>$category]);
        //return redirect(route('products.index'));
    }

    public function edit(Category $category){
        if(Auth::user()->cannot('edit',$category)){
            abort(403);
        }
       
        return view('categories.edit',['category'=>$category]);
    }
    public function update(CategoryRequest $request,Category $category ){
        if(Auth::user()->cannot('edit',$category)){
            abort(403);
        }
        $category->update($request->all());
        return redirect(route('categories.index'))->with('success',$category->name.' is updated successfully');
    }

    public function destroy(Category $category){
        if(Auth::user()->cannot('delete',$category)){
            abort(403);
        }
        $category->delete();
        return redirect(route('categories.index'))->with('success',$category->name.' is deleted');
    }

}
