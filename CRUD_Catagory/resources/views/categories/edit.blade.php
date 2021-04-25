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

    <form action="{{ route('categories.update',$category) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Name</label>
          <input type="text" class="form-control" value="{{$category->name}}" name="name" required>
        </div>
      </div>
     
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection
