@extends('client.master')
<section class="w3l-about-breadcrumb position-relative text-center">
	<div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
		<div class="container py-lg-5 py-3">
			<h2 class="title"></h2>
		</div>
	</div>
</section>



<form class="container"  method="get">
	<h4><b><label class="mt-5" style="color: black;" for="cars">Select a City</label></b></h4>

	<select class="form-control mb-5" name="city" id="city">
		@foreach($city as $c)
		<option value="{{$c->cityname}}">{{$c->cityname}}</option>
		@endforeach
	</select>
	<input class="btn btn-primary btn-lg btn-block" type="submit" name="addcity" value="Add">
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('click','#addcity',function(e){
            e.preventDefault();

		})
	})
</script>



