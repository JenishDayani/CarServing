@extends('master')

@section('content')

<div class="table-agile-info">
 <div class="panel panel-default">
  <div class="panel-heading">
    VIEW CLIENT FEEDBACK 
  </div>
  <div>
    <form>
      <table class="table">
        <thead>
          <tr>
            <th data-breakpoints="xs" style="color: black;">ID</th>
            <th style="color: black;">Client Feedback</th>
            <th style="color: black;">Client Name</th>
            <th style="color: black;">Client Email</th>
            <th style="color:black;">Action</th>
          </tr>
        </thead>
        @foreach($client as $m)
        <tbody>
          <tr data-expanded="true">
            <td style="color: black;">{{$m->id}}</td>
            <td style="color: black;">{{$m->feed}}</td>
            <td style="color:black;">{{$m->name}}</td>
            <td style="color:black;">{{$m->email}}</td>
            <td style="color:black;"><a href="{{route('deletefeedback',$m->id)}}" class="btn btn-danger">Delete</a></td>
          </tr>         
        </tbody>
      @endforeach
      </table>
    </form>
  </div>
</div>
</div>


@endsection