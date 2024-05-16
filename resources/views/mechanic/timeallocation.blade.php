@extends('mechanic.master')

@section('content')

<div class="container"> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Costumer Name</th>
      <th scope="col">Service</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($mechanic as $m)
    <tr>
      <th scope="row">{{$m->name}}</th>
      <td>{{$m->product_name}}</td>
      <td>
      	<?php $id = $m->user_id; ?>
      	<a href="{{route('time',$id)}}" class="btn btn-info">Time Allocation</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection