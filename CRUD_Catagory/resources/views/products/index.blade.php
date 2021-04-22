@extends('products.create')

@section('content')

<div class="col-lg-8 col-md-10 mx-auto">
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
            <a class = "btn btn-primary"href="/">+ New</a>
        </th>
    </tr>
    </thead>
    <tbody>
  
    @foreach($products as $product)
    <tr>
    <td>{{ $loop->index + 1 }}</td>
    <td>{{ $product->category->name }}</td>
    <td>{{ $product->unit_price }}</td>
     <td>{{ $product->qty_in_stock }}</td>
     <td>
         Edit | Delete
    </td>
    </tr>
    @endforeach
    </tbody>
 </table>

</div>

@endsection


