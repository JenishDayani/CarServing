@extends('client.master')
<section class="w3l-about-breadcrumb position-relative text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title">Get Service To Gate Payment</h2>
        
    </div>
</div>
</section>

@section('content')


<style type="text/css">

    .card-horizontal {
        display: flex;
        flex: 1 1 auto;
    }
</style>

<!-- {{$id = Session::has('client') }} -->
<?php  $client = session::get('client')->id; ?>

<?php $clnt = session::get('client'); ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="" src="{{$service->image?url('Uploadchanicalimage/'.$service->image):url('clientAssets/images/team1.jpg')}}" alt="Card image cap" style="width: 350px; height: 400px;">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"> <b>Service Name := </b> {{$service->service_name}}</h4>
                        <p class="card-text"> <b>Service Price :=  </b>{{$service->service_price}}</p>
                        <p class="card-text"><b>Service Description := </b> {{$service->service_description}}</p>
                        <p class="card-text"><b>Mechanic Name :=</b> {{$mechanic->name}}</p>
                        <p class="card-text"><b>Mechanic Experience :=</b> {{$mechanic->experience}}</p>

                        <?php 
                        if($id){

                         ?>
                         <a href="" class="btn btn-style btn-primary mt-md-3 mt-4 services" id="services" data-user="{{$mechanic->u_id}}" data-id="{{$client}}" data-price="{{$service->service_price}}">Order Services</a>
                     <?php }else{ ?>
                        <a href="{{route('login')}}" class="btn btn-danger  mt-md-3 mt-4"> Please Login to Get Services</a> 


                    <?php } ?>                         
                </div>
            </div>

            <div class="card-footer">
                <u><small class="text-muted">Thank You For Show Our Details</small></u>
            </div>
        </div>
    </div>
</div>
</div>

@push('payment')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script type="text/javascript">

    $(document).ready(function(){

        $(document).on('click','#services',function(e){
            e.preventDefault();

            var user_id = $(this).attr('data-id');                //user id = product id
            var product_price = $(this).attr('data-price');          //product price
            var product_id = $(this).attr('data-user');                 //mechanic   


            var options = {
                "key": "rzp_test_nnGq8wKDMIW4mI", 
                "amount": product_price*100,
                "currency": "INR",

                "handler": function (response){
                    console.log(response.razorpay_payment_id)
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url:"{{route('payment')}}",
                        type:'POST',
                        datatype:'json',
                        data:{
                            user_id:user_id,razorpay_payment_id: response.razorpay_payment_id, product_id: product_id,product_price:product_price
                        },

                        success:function(msg){
                            console.log(msg);
                            window.location.href= "{{route('/')}}";
                        }
                    });
                },

                "theme": {
                    "color": "#F32754"
                },

                "prefill": {
                    "contact": '{{$clnt->contact}}',
                    "email":   '{{$clnt->email}}'
                },

            };

            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    });


</script>

@endpush

@endsection
