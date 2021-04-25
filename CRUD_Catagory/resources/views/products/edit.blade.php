@extends('layouts.app')

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>New Product</h2>
          <ol>
            <li><a href="app">Home</a></li>
            <li>Product</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
  <div class="col-lg-8 col-md-10 mx-auto mt-3 mb-3">
    <p>Edit Product</p>

    <form action="{{ route('products.update',$product) }}" method="POST">
      @csrf
      @method('PUT')
      <input type="hidden" value="{{Auth::user()->id}}" name="owner_id">
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Category</label>
          <select class="form-control"  name="categorie_id" required>
            <option>Please select one</option>

            @foreach($categories as $category)
            @if($category->name===$product->category->name)
            <option selected value="{{ $category->id }}">{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
           
            @endforeach
          </select>
        </div>
      </div>

      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Name</label>
          <input type="text" class="form-control" value="{{$product->name}}" name="name" required>
        </div>
      </div>

      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Unit Price</label>
          <input type="number" class="form-control" value="{{$product->unit_price}}" name="unit_price" required >
          <p class="help-block text-danger"></p>
        </div>
      </div>

      <div class="control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <label>Quantity In Stock</label>
          <input type="number" class="form-control" value="{{$product->qty_in_stock}}" name="qty_in_stock" required>
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection
