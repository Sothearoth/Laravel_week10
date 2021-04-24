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
    @if(Session::has('success'))
    <p class="text-success">{{Session::get('success')}}</p>
    
    @endif
   
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
  
    @foreach($products as $product)
    <tr>
    <td>{{ $loop->index + 1 }}</td>
    <td>{{ $product->category->name }}</td>
    <td>{{ $product->name }}</td>
    <td>{{ $product->unit_price }}</td>
     <td>{{ $product->qty_in_stock }}</td>
     <td>
          
          <form action="{{route('products.destroy',$product)}}" method="POST" >
          <a href="{{route('products.edit',$product)}}" class="btn btn-primary">Edit</a>
            <input type="submit" value="delete" class="btn btn-danger">
            @csrf
            @method("delete")
          </form>
    </td>

    </tr>
    @endforeach
    </tbody>
 </table>

</div>

@endsection


