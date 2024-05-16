@extends('master')

@section('content')

<div class="table-agile-info">
 <div class="panel panel-default">
  <div class="panel-heading">
    VIEW CLIENT DETAILS HERE 
  </div>
  <div>
    <form>
      <table class="table">
        <thead>
          <tr>
            <th data-breakpoints="xs" style="color: black;">ID</th>
            <th style="color: black;">Name</th>
            <th style="color: black;">E-mail</th>
            <th style="color: black;">Photo</th>
            <th style="color: black;">Action</th>
          </tr>
        </thead>
        @foreach($client as $m)
        <tbody>
          <tr data-expanded="true">
            <td style="color: black;">{{$m->id}}</td>
            <td style="color: black;">{{$m->name}}</td>
            <td style="color: black;">{{$m->email}}</td>
            <td>
              <img src="{{$m->image?url('Uploadchanicalimage/'.$m->image):url('Uploadchanicalimage/profile.png')}}" style="width: 100px;" />        
            </td>            
            <td>
              <a href="{{route('deleteclient',$m->id)}}" class="btn btn-danger">DELETE</a>  
            </td>
          </tr>         
        </tbody>
      @endforeach
      </table>
    </form>
  </div>
</div>
</div>
@endsection