@extends('master')

@section('content')
<div class="table-agile-info">
 <div class="panel panel-default">
  <div class="panel-heading">
    VIEW PAYMENT DETAILS 
  </div>
  <div>
    <form>
      <table class="table">
        <thead>
          <tr>
            <th data-breakpoints="xs" style="color: black;">ID</th>
            <th style="color: black;">Mechanic Name</th>
            <th style="color: black;">User Name</th>
            <th style="color: black;">Service Name</th>
            <th style="color: black;">Service Price</th>
            <th style="color: black;">Transaction Id</th>
          </tr>
        </thead>
        @foreach($verify as $m)
        <tbody>
          <tr data-expanded="true">
            <td style="color: black;">{{$m->id}}</td>
            <td style="color: black;">{{$m->mechanic_name}}</td>
            <td style="color: black;">{{$m->name}}</td>
            <td style="color: black;">{{$m->product_name}}</td>
            <td style="color: black;">{{$m->product_price}}</td>
            <td style="color: black;">{{$m->transaction_id}}</td>
          </tr>         
        </tbody>
      @endforeach
      </table>
    </form>
  </div>
</div>
</div>
@endsection