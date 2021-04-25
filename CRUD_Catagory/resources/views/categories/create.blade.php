@extends('layouts.app')

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>New Category</h2>
          <ol>
            <li><a href="app">Home</a></li>
            <li>Category</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

  <div class="col-lg-8 col-md-10 mx-auto mt-3 mb-3 ">

    <form action="{{ route('categories.store') }}" method="POST">
      @csrf
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Name" name="name" required value="{{old('name')}}">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  
@endsection
