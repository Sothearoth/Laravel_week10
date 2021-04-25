@extends('layouts.app')

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>New Categories</h2>
          <ol>
            <li><a href="app">Home</a></li>
            <li>Category</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<div class="col-lg-8 col-md-10 mx-auto mt-3 mb-3">
    <h1> Categories</h1>

    <table class = "table table-border">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th> 
        <th>
            <a class = "btn btn-primary"href="{{route('categories.create')}}">+ New</a>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
    
    <td>{{ $category->name }}</td>
    
     <td>
          <a href="{{route('categories.edit',$category)}}">Edit</a>| Delete <a href=""></a>
    </td>
    </tr>
   
    </tbody>
 </table>

</div>

@endsection


