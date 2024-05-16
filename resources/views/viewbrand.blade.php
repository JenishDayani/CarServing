@extends('master')

@section('content')
<style type="text/css">
	.btn-outline-secondary{
		border: 1px;
	}
</style>
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    ALL BRAND NAME 
    </div>
    <div>
      <table class="table">
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>First Name</th>
            <th>Action</th>
            <th><a href="{{route('brand.create')}}" class="btn btn-outline-secondary" style="color: dark;">Add More Brands</a></th>
          </tr>
        </thead>
        @foreach($brand as $b)
        <tbody>
          <tr data-expanded="true">
            <td>{{$b->id}}</td>
            <td>{{$b->brand_name}}</td>
            <td>
            <form method="post" action="{{route('brand.destroy',$b->id)}}">
              @csrf
              @method('DELETE')
              <a href="{{route('brand.edit',$b->id)}}" class="btn btn-success">EDIT</a>
              <input class="btn btn-danger" type="submit" value="DELETE">
            </form>
             </td>
          </tr>         
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>
 @endsection