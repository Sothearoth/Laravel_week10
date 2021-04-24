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
    <h1> Products</h1>

    <table class = "table table-border">
    <thead>
    <tr>
        <th>#</th>
        <th>Category</th>
        <th>Name</th>
        <th>Unit Price</th>
        <th>Quantity in stock</th>
        <th>
            <a class = "btn btn-primary"href="{{route('products.create')}}">+ New</a>
        </th>
    </tr>
    </thead>
    <tbody>
  
   
    <tr>
    <td>{{$product->id }}</td>
    <td>{{ $product->category->name }}</td>
    <td>{{ $product->name }}</td>
    <td>{{ $product->unit_price }}</td>
     <td>{{ $product->qty_in_stock }}</td>
     <td>
          <a href="{{route('products.edit',$product)}}">Edit</a>| Delete <a href=""></a>
    </td>
    </tr>
   
    </tbody>
 </table>

</div>

@endsection


