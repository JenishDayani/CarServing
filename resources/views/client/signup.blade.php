@extends('client.master')

@section('content')

<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb position-relative text-center">
	<div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
		<div class="container py-lg-5 py-3">
			<h2 class="title">SIGN UP</h2>
		</div>
	</div>
</section>
<!-- //about breadcrumb -->
<section class="w3l-contact-11">
	<div class="form-41-mian py-5">
		<div class="container py-lg-4">
			<div class="row align-form-map">
				<div class="col-lg-8 form-inner-cont">
					<div class="title-content text-center">
						<h3 class="hny-title mb-lg-5 mb-4">Sign Up</h3>
					</div>
					<form method="post">
						@csrf
						@method('POST')
						<div class="form-input">
							<input type="text" name="name" id="w3lName" placeholder="Enter Your Name" />
							@error('name')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="row con-two">
							<div class="col-lg-6 form-input">
								<input type="email" name="email" id="w3lSender" placeholder="Enter Your Email"  />
								@error('email')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 form-input">
										<select class="custom-select custom-select-sm" name="role" id="gender2">
											<option selected>Select Category</option>
											<option value="2">User</option>
											<option value="3">Mechanic</option>
										</select>  
									</div>
								</div>
							</div>	
						</div>
						<div class="form-input">
							<div class="form-group">
							<?php  $city = Session::get('city'); ?>

							<label for="city" ><b>Select a city</b></label>
							<select name="city" class="form-control" id="city">
								@foreach($city as $c)
								<option value="{{$c->cityname}}">{{$c->cityname}}</option>
								@endforeach
							</select>
							@error('city')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
							<br><br>
						</div>
						</div>
						<div class="form-input">
							<input type="password" name="password" placeholder="Enter Password" class="password-input" />
							@error('password')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-input">
							<input type="number" name="contact" placeholder="Enter contact numnber" />
							@error('contact')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>

						<input type="submit" class="btn btn-primary" name="signup" value="SIGN UP" >

					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="map">
		<iframe
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001161.424489281!2d-78.01909140705047!3d42.72866436845163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sin!4v1570786994395!5m2!1sen!2sin"
		frameborder="0" allowfullscreen=""></iframe>
	</div>
</section>

<!-- //contact-form -->


@endsection