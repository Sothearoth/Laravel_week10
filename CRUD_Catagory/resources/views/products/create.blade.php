@extends('layouts.app')

@section('content')
  <div class="col-lg-8 col-md-10 mx-auto">
    <p>New Product</p>

    <form action="{{ route('products.store') }}" method="POST">
      @csrf
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Category</label>
          <select class="form-control" name="category_id" required>
            <option>Please select one</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Name" name="name" required>
        </div>
      </div>

      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Unit Price</label>
          <input type="text" class="form-control" placeholder="Unit Price" name="unit_price" required >
          <p class="help-block text-danger"></p>
        </div>
      </div>

      <div class="control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <label>Quantity In Stock</label>
          <input type="number" class="form-control" placeholder="Quantity In Stock" name="qty_in_stock" required>
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>
  </div>
@endsection
