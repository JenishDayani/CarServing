<?php 

if (Session::has('client'))
{
   $t = Session::get('client');
}

 ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
  <html lang="zxx">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ONLINE MECHANIC SERVICE</title>
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{url('clientAssets')}}/css/style-starter.css">
    <!-- Template CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Profile dropdown b5 -->
  </head>

  <body>
    <!--header-->
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <h1><a class="navbar-brand" href="{{route('/')}}">
            <span>C</span>arserving
          </a></h1>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa icon-expand fa-bars"></span>
          <span class="fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            @if(Session::has('client'))
            <li class="nav-item active">
              <a class="nav-link" href="{{route('/')}}">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="{{route('servicemenu')}}">services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('Admincontact')}}">Contact</a>
            </li>                   
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" style="color: green;">{{ Session::get('client')->name }}</a></li>
                <li><a class="dropdown-item"  href="{{route('editprofile',$t->id)}}">EDIT PROFILE</a></li>
              </ul>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                more
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('clientfeedback')}}">FEEDBACK</a></li>
                <li><a class="dropdown-item"  href="{{route('privatepolicy')}}">PRIVATE POLICY</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('logout')}}">Logout</a>
            </li>
            @else
            <li class="nav-item active">
              <a class="nav-link" href="{{route('/')}}">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('servicemenu')}}">services</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('signup')}}">Signup</a>
            </li>
            @endif
          </ul>


          <!-- //toggle switch for light and dark theme -->
          <!-- search popup -->

          <div id="search" class="pop-overlay">
            <div class="popup">
              <form action="#" method="GET" class="d-sm-flex">
                <input type="search" placeholder="Search.." name="search" required="required" autofocus>
                <button type="submit">Search</button>
                <a class="close" href="#url">&times;</a>
              </form>
            </div>
          </div>
          <!-- /search popup -->
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>

      </nav>
    </div>
  </header>
  
  <!--/header-->
  <!-- about breadcrumb -->
