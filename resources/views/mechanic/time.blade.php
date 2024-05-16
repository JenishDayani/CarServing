@extends('mechanic.master')

@section('content')

<div class="container">
	<form method="post">
		@csrf
		
	<label style="margin-top:3%;">This Date Will Sent to {{$user->name}}</label>
	<input class="form-control mb-3" type="date" name="date">


	<label style="margin-top:3%" >Allocate Time</label>
	<input class="form-control mt-5" type="time" name="time" value="time" >


	<input type="submit" name="send" value="Send" class="btn btn-info" style="margin-top: 2%; margin-bottom: 2%;">


	</form>
</div>

@endsection