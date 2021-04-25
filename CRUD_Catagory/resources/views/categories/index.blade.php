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
    @if(Session::has('success'))
    <p class="text-success">{{Session::get('success')}}</p>
    
    @endif
   
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
  
    @foreach($categories as $category)
    <tr>
    <td>{{ $loop->index + 1 }}</td>
    <td>{{ $category->name }}</td>
    
     <td>
          
      <form action="{{route('categories.destroy',$category)}}" method="POST" >
        @if(Auth::user()->can('edit',$category))
        <a href="{{route('categories.edit',$category)}}" class="btn btn-primary">Edit</a>
        @endif
        @if(Auth::user()->can('delete',$category))
        <input type="submit" value="delete" class="btn btn-danger">
        @endif
        
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


