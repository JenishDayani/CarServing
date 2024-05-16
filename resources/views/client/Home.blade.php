@extends('client.master')
<section class="w3l-about-breadcrumb position-relative text-center">
  <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
    <div class="container py-lg-5 py-3">
      <h2 class="title">Home</h2>
      
    </div>
  </div>
</section>

@section('content')

      <style type="text/css">
        
        @import url(https://fonts.googleapis.com/css?family=Raleway|Reenie+Beanie);

        * {
          box-sizing: border-box;
        }

        img {
          width: 100%;
        }

        .jd {
          color: black;
        }

        .caption,
        .tushal,
        .date {
          margin: 0;
          text-align: center;
        }

        .caption,
        .tushal {
          font-family: "Reenie Beanie", sans-serif;
          font-size: 2em;
          padding: 10px 10px 0 10px;
        }

        .description1 {
          font-size: 0.9em;
          padding: 0 20px 20px 20px;
          text-align: left;
        }

        .container1 {
          perspective: 1000px;
          display: inline-block;
          margin: 3%;
        }

        .container1:hover .flipper {
          transform: rotateY(180deg);
        }

        .container1,
        .front1,
        .back1 {
          width: 250px;
          height: 250px;
        }

        .flipper {
          transition: 0.9s;
          transform-style: preserve-3d;
          position: relative;
        }

        .front1,
        .back1 {
          backface-visibility: hidden;
          position: absolute;
          top: 0;
          left: 0;
          width: 250px;
          height: 250px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .front1 {
          z-index: 2;
        }

        .back1 {
          transform: rotateY(180deg);
        }

        #content1 {
          text-align: center;
        }

      </style>    

<div>
  <label class="container mt-4" style="color: red; text-align: center;">
    <h3 style="margin-left: 220px; !important;">Various Mechanic's of our site</h3>
  </label>
</div>
      <div id="content1">
        @foreach($mechanic as $m)
        <div class="container1">
          <div class="flipper">
            <div class="front1">
              <img src="{{$m->image?url('Uploadchanicalimage/'.$m->image):url('clientAssets/images/team1.jpg')}}" class="img-fluid" alt="" style="width: 250px; height: 300px;">
              <p class="caption">{{$m->name}}</p>
            </div>
            <div class="back1">
              <a class="jd" href="#">
                <h1 class="tushal">{{$m->name}}</h1>
              </a>
              <p>click Mechanics Name To Get Their details</p>
            </div>
          </div>          
        </div>
        @endforeach
      </div>



      @endsection
