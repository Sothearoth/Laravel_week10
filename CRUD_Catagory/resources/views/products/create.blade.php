@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About - Company Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('style/img/favicon.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('style/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('style/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('style/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('style/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('style/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('style/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('style/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('style/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('style/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v4.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><span>Com</span>pany</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="app">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="aboutUs" class="active">About Us</a></li>
              <li><a href="team">Team</a></li>
              <li><a href="testimonials">Testimonials</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a href="services">Services</a></li>
          <li><a href="portfolio">Portfolio</a></li>
          <li><a href="pricing">Pricing</a></li>
          <li><a href="blog">Blog</a></li>
          <li><a href="contact">Contact</a></li>
          <li><a href="index">Product</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
    </header>
@section('content')
  <div class="col-lg-8 col-md-10 mx-auto">
    <p>New Product</p>

    <form action="{{ route('products.store') }}" method="POST">
      @csrf
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Category</label>
          <select class="form-control" name="categorie_id" required>
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
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
