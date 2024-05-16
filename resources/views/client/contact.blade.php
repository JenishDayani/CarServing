@extends('client.master')
<section class="w3l-about-breadcrumb position-relative text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title">Contact Us</h2>
        
      </div>
    </div>
  </section>

 @section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="{{url('clientAssets')}}/clientcontact/css/style.css">
  <link rel="stylesheet" href="{{url('clientAssets')}}/clientcontact/css/font-awesome.css">
</head>

<body>
  <!-- contact1 -->
  <!-- <section class="w3l-contact-1"> -->
    <!-- <div class="contacts-9 section-gap"> -->
      <div class="wrapper">
        <h4 class="sub-title text-center" style="margin-bottom: 30px;">Find us</h4> 
        <!-- <h3 class="global-title text-center">Contact us</h3> -->
        <div class="d-grid contact-view">
          <div class="cont-details">
            <div class="cont-top">
              <div class="cont-left text-center">
                <span class="fa fa-phone text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Call Us</h6>
                <p><a href="tel:+91 79841 78892">+91 79841 78892</a></p>
                <p><a href="tel:+91 6359 564 466">+91 6359 564 466</a></p>

              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope-o text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p><a href="mailto:tush997812@mail.com" class="mail">tushallakhani1212@mail.com</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Address</h6>
                <p>Address here, 222 Abhisek Arcade, Yogi Chock, Surat, Gujrat, India - 395010</p>
              </div>
            </div>
          </div>
          <div class="map-content-9">
            <form  method="post" style="margin-bottom: 10%;">
              <div class="twice-two">
                <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Enter Name" required="">
                <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email"
                  required="">
              </div>
              <div class="twice">
                <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Subject"
                  required="">
              </div>
              <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message"
                required=""></textarea>
              <button type="submit" class="btn btn-contact">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact1 -->
</body>

</html>


 @endsection
