@extends('master')

@section('content')


<div class="table-agile-info">
 <div class="panel panel-default">
  <div class="panel-heading">
    VIEW PENDING USER DETAILS HERE 
  </div>
  <div>
    <form>
      <table class="table">
        <thead>
          <tr>
            <th data-breakpoints="xs" style="color: black;">ID</th>
            <th style="color: black;">Name</th>
            <th style="color: black;">E-mail</th>
            <th style="color: black;">Action</th>
            <!-- <th><a href="{{route('addmechanic')}}" style="color: dark; width: 20px;">Add More Brands</a></th> -->
          </tr>
        </thead>
        @foreach($user as $m)
        <tbody>
          <tr data-expanded="true">
            <td style="color: black;">{{$m->id}}</td>
            <td style="color: black;">{{$m->name}}</td>
            <td style="color: black;">{{$m->email}}</td>           
            <td>
              <a href="{{route('pending_enable',$m->id)}}" class="btn btn-success">ENABLE</a>  

              <a href="{{route('pending_disable',$m->id)}}" class="btn btn-danger">DISABLE</a>  
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