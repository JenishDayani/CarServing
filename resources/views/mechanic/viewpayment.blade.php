@extends('mechanic.master')

@section('content')

<style type="text/css">
	table {
		border: 1px solid #ccc;
		border-collapse: collapse;
		margin: 0;
		padding: 0;
		width: 100%;
		table-layout: fixed;
	}

	table caption {
		font-size: 1.5em;
		margin: .5em 0 .75em;
	}

	table tr {
		background-color: #f8f8f8;
		border: 1px solid #ddd;
		padding: .35em;
	}

	table th,
	table td {
		padding: .625em;
		text-align: center;
	}

	table th {
		font-size: .85em;
		letter-spacing: .1em;
		text-transform: uppercase;
	}

	@media screen and (max-width: 600px) {
		table {
			border: 0;
		}

		table caption {
			font-size: 1.3em;
		}

		table thead {
			border: none;
			clip: rect(0 0 0 0);
			height: 1px;
			margin: -1px;
			overflow: hidden;
			padding: 0;
			position: absolute;
			width: 1px;
		}

		table tr {
			border-bottom: 3px solid #ddd;
			display: block;
			margin-bottom: .625em;
		}

		table td {
			border-bottom: 1px solid #ddd;
			display: block;
			font-size: .8em;
			text-align: right;
		}

		table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
			content: attr(data-label);
			float: left;
			font-weight: bold;
			text-transform: uppercase;
		}

		table td:last-child {
			border-bottom: 0;
		}
	}





/* general styling */
body {
	font-family: "Open Sans", sans-serif;
	line-height: 1.25;
}
</style>

<div class="forms">
	<h2 class="title1">Payment Details</h2>
	<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
		
		<div class="form-body">
			<table>
				<caption>User Payment Details</caption>
				<thead>
					<tr>
						<th scope="col" width="1%">ID</th>
						<th scope="col">Service Name</th>
						<th scope="col">User Name</th>
						<th scope="col">User email</th>
						<th scope="col">User Transaction Id</th>
						<th scope="col">Service Price</th>
					</tr>
				</thead>
				<tbody>
					@foreach($payment as $m)
					<tr>
						<td scope="row" >{{$m->user_id}}</td>
						<td> {{$m->product_name}}</td>
						<td>{{$m->name}}</td>
						<td>{{$m->email}}</td>
						<td>{{$m->transaction_id}}</td>
						<td>{{$m->product_price}}</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>
		</form>
	</div>
</div>
</div>

@endsection