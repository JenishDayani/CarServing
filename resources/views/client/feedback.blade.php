@extends('client.master')
<section class="w3l-about-breadcrumb position-relative text-center">
	<div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
		<div class="container py-lg-5 py-3">
			<h2 class="title">Feedback</h2>

		</div>
	</div>
</section>

@section('content')

<?php 

$a=Session::get('client');

?>

<section class="w3l-contact-11">
	<div class="form-41-mian py-5">
		<div class="container py-lg-4">
			<div class="row align-form-map">
				<div class="col-lg-8 form-inner-cont">
					<div class="title-content text-center">
						<h3 class="hny-title mb-lg-5 mb-4"></h3>
					</div>
					<form action="{{route('clientfeedback')}}" method="post">
						@csrf
						@method('POST')
						<label><b>Name</b> </label>
						<div class="row con-two">
							<div class="col-lg-12 form-input">
								<input type="text" name="name" placeholder="Disabled input" value="{{$a->name}}" aria-label="readonly input example"  />								
							</div>
						</div>		
						<label><b>Email</b> </label>
						<div class="row con-two">
							<div class="col-lg-12 form-input">
								<input type="email" name="email" placeholder="Email" value="{{$a->email}}" />
							</div>
						</div>	
						<label><b>Add Your Feedback</b></label>
						<div class="row con-two">
							<div class="col-lg-12 form-input">
								<textarea cols="20" rows="9" name="clientfeedback">
									
								</textarea>
								@error('clientfeedback')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>
						<div class="submit-button">
							<input type="submit" name="sendfeed" class="btn btn-primary btn-lg btn-block" value="Add Feedback">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			@foreach($verify as $a)
			<div class="col-md-4">
				<div class="card"> 
  					<div class="card-header">
    					<h3>{{$a->name}}</h3>
      					<p style="margin-top: 4%;">{{$a->email}}</p>
      					<p style="margin-top: 4%;">{{$a->feed}}</p>
      					<p></p>
  					</div>
  					
				</div>
			</div>
			@endforeach
		</div>
	</div>


	<div class="map mt-5">
		<iframe
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001161.424489281!2d-78.01909140705047!3d42.72866436845163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sin!4v1570786994395!5m2!1sen!2sin"
		frameborder="0" allowfullscreen=""></iframe>
	</div>
</section>




@endsection