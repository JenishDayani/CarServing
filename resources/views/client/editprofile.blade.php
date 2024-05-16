@extends('client.master')
<section class="w3l-about-breadcrumb position-relative text-center">
	<div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
		<div class="container py-lg-5 py-3">
			<h2 class="title">EDIT PROFILE</h2>

		</div>
	</div>
</section>



@section('content')
<!-- //about breadcrumb -->
<section class="w3l-contact-11">
	<div class="form-41-mian py-5">
		<div class="container py-lg-4">
			<div class="row align-form-map">
				<div class="col-lg-8 form-inner-cont">
					<div class="title-content text-center">
						<h3 class="hny-title mb-lg-5 mb-4">Edit Your Profile</h3>
					</div>
					<form method="post" action="{{route('updateprofile',$verify->id)}}">
						@csrf
						@method('GET')
						<div class="form-input">
							<input type="text" name="name" value="{{$verify->name}}" placeholder="Enter Your Name" />
						</div>
						<div class="row con-two">
							<div class="col-lg-12 form-input">
								<input type="email" name="email"  value="{{$verify->email}}" placeholder="Enter Your Email"  />
							</div>							
						</div>
						<div class="form-input">
							<div class="form-group">
								<?php  $city = Session::get('city'); ?>

								<label for="city" ><b>Select a city</b></label>
								<select name="city" class="form-control" id="city">
									@foreach($city as $c)
									<option value="{{$c->cityname}}" <?php if($c->cityname == $verify->city){ echo 'selected'; } ?>>{{$c->cityname}}</option>
									@endforeach
								</select>
								<br><br>
							</div>
						</div>
						<div class="form-input">
							<input type="number" name="contact" value="{{$verify->contact}}" placeholder="Enter contact numnber" />
						</div>
						<div class="submit">
							<input type="submit" value="UPDATE" class="btn btn-success btn-block" name="update">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="map">
		<iframe
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001161.424489281!2d-78.01909140705047!3d42.72866436845163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sin!4v1570786994395!5m2!1sen!2sin"
		frameborder="0" allowfullscreen="">
	</iframe>
</div>
</section>
<!-- //contact-form -->

@endsection
