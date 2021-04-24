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

  <div class="col-lg-8 col-md-10 mx-auto mt-3 mb-3 ">

    <form action="{{ route('products.store') }}" method="POST">
      @csrf
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Category</label>
          <select class="form-control" name="categorie_id" required>
            <option>Please select one</option>
            @foreach($categories as $category)
            @if(empty(old('categorie_id')))
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @else
            <option selected value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            
            @endforeach
          </select>
        </div>
      </div>

      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Name" name="name" required value="{{old('name')}}">
        </div>
      </div>

      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Unit Price</label>
          <input type="number" class="form-control" placeholder="Unit Price" name="unit_price" required value="{{old('unit_price')}}">
          @if($errors->has('unit_price'))
          <p class="help-block text-danger">unit price must be input numeric</p>
          @endif
         
        </div>
      </div>

      <div class="control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <label>Quantity In Stock</label>
          <input type="number" class="form-control" placeholder="Quantity In Stock" name="qty_in_stock" required value="{{old('qty_in_stock')}}">
          @if($errors->has('qty_in_stock'))
          <p class="help-block text-danger">unit price must be input numeric</p>
          @endif
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  
@endsection
