@extends('master')

@section('content')
<div class="table-agile-info">
 <div class="panel panel-default">
  <div class="panel-heading">
    VIEW MECHANIC DETAILS HERE 
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
            <!-- <th><a href="{{route('addmechanic')}}" style="color: dark; width: 20px;">Add More Brands</a></th> -->
          </tr>
        </thead>
        @foreach($verify as $m)
        <tbody>
          <tr data-expanded="true">
            <td style="color: black;">{{$m->id}}</td>
            <td style="color: black;">{{$m->name}}</td>
            <td style="color: black;">{{$m->email}}</td>
            <td>
              <img src="{{$m->image?url('Uploadchanicalimage/'.$m->image):url('Uploadchanicalimage/profile.png')}}" style="width: 100px;" />        
            </td>            
            <td>
              <a href="{{route('editmechanic',$m->id)}}" class="btn btn-success">EDIT</a>
              <a href="{{route('deletemechanic',$m->id)}}" class="btn btn-danger">DELETE</a> 
              <a href="{{route('enable_desable',$m->id)}}" class="{{$m->action == 'DISABLE'?'btn btn-primary':'btn btn-danger'}}">
                {{$m->action == 'DISABLE'?'ENABLE':'DISABLE'}}
              </a> 
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


<!-- if($m->has(image))
{
  <img src="{{url('Uploadchanicalimage')}}/$m->image">
}
else
{  
  <img src="{{url('Uploadchanicalimage')}}">
} -->