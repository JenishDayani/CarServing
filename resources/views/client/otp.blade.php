@extends('client.master')
<section class="w3l-about-breadcrumb position-relative text-center">
	<div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
		<div class="container py-lg-5 py-3">
			<h2 class="title">LOGIN</h2>
		</div>
	</div>
</section>

@section('content')

<style type="text/css">
	
	.divider:after,
	.divider:before {
		content: "";
		flex: 1;
		height: 1px;
		background: #eee;
	}
</style>

<section class="vh-100">
	<div class="container py-5 h-100">
		<div class="row d-flex align-items-center justify-content-center h-100">
			<div class="col-md-8 col-lg-7 col-xl-6">
				<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
			</div>
			<div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
				<form method="post" action="">
					@csrf
					@method('POST')
					<!-- Email input -->
					

					<!-- Password input -->
					<div class="form-outline mb-4">
						<input type="password" id="form1Example23" placeholder="Enter OTP Here" class="form-control form-control-lg" name="otp" />
						<label class="form-label" for="form1Example23">OTP</label>
					</div>

					

						<input type="submit" class="btn btn-primary btn-lg btn-block" name="login"  value="Login" style="width: 50%;">
					</div>

					


					</form>
				</div>
			</div>
		</div>
	</section>
	@endsection