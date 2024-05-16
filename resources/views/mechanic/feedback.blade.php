@extends('mechanic.master')

@section('content')
<?php 

$a=Session::get('mechanic');

?>

<div class="forms">
	<h2 class="title1">EDIT YOUR PERSONAL INFORMATION</h2>
	<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
		<div class="form-title">
			<h4>YOUR PROFILE</h4>
		</div>
		<div class="form-body">
			<form method="post" action="{{route('mechanicfeedback')}}" enctype="multipart/form-data">
				@csrf
				@method('POST')
				<div class="form-group">
					<label for="exampleInputEmail1"><b>Name</b></label> 
					<input type="text" class="form-control" name="mechanic_name" id="exampleInputEmail1" value="{{$a->name}}">
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1"><b>Email address</b></label> 
					<input type="email" class="form-control" name="mechanic_email" id="exampleInputEmail1" 
					value="{{$a->email}}">
				</div>
					<label for="exampleInputEmail1"><b>Add Your Feedback</b></label> 
				<div class="form-group">
					<textarea rows="7" cols="90" class="form-control" name="mechanicfeed" required/>
												
					</textarea>
					@error('mechanicfeed')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				</div> 
				<input type="submit" class="btn btn-primary" name="sendfeed" value="sendfeed"> 
			</form>
		</div>
	</div>
</div>



	<div class="container">
		<div class="row">
			@foreach($verify as $a)
			<div class="col-md-4">
				<div class="card"> 
  					<div class="card-header">
    					{{$a->name}}
  					</div>
  					<div class="card-body">
    					<blockquote class="blockquote mb-0">
      						<p>{{$a->feed}}</p>
    					</blockquote>
  					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>




<!-- <button class="btn btn-success" style="margin-left :3%; margin-bottom: 4%;" >SEND FEEDBACK</button> -->

@endsection