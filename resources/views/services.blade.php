@extends('master')

@section('content')

<div class="container">

	<div>
		<form>
			<h3 class="content">Add Services</h3>
			<div class="form-group">
				<label for="exampleInputEmail1">Service Name</label>
				<input type="text" class="form-control" id="service" aria-describedby="emailHelp" placeholder="Enter Service">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Service Price</label>
				<input type="number" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Enter Service">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Service Description</label>
				<textarea class="form-control" id="description" rows="5" placeholder="Enter Description"></textarea>
		
			</div>
			<button type="submit" id="addservice" class="btn btn-primary" style="margin-bottom: 10px;">Add Services</button>
		</form>
	</div>

	<div  style="background-color: white;">
		<table class="table">
			<thead class="thead-light">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Service Name</th>
					<th scope="col">Service Price</th>
					<th scope="col">Service Description</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody id="data">
				

			</tbody>
		</table>
	</div>
</div>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">






function display(){
		$.ajax({

			url:"{{route('serviceajax')}}",
			type:"GET",
			data:{display:1},
			success:function(res){
				$('#data').empty();
				for(i in res)
				{
					var html=`<tr>
					<td>${res[i].id}</td>
					<td>${res[i].service_name}</td>
					<td>${res[i].service_price}</td>
					<td>${res[i].service_description}</td>
					<td>
						<a href="" data-id=${res[i].id} class="btn btn-primary" id="edit_service">EDIT</a>
						<a href="" data-id=${res[i].id} class="btn btn-danger" id="delete_service">DELETE</a>
					</td>
					</tr>`
					$('#data').append(html);
				}
			}

		});
	}


$(document).ready(function(){
	display();
});



$(document).on('click','#addservice',function(e){
	e.preventDefault();
	var service = $('#service').val();
	var price = $('#price').val();
	var description = $('#description').val();
	$.ajax({
		url:"{{route('serviceajax')}}",
		type:"GET",
		data:{add:1,service:service,price:price,description:description},
		success:function(res){
			$('#service').val('');
			$('#price').val('');
			$('#description').val('');
			console.log('hello');
			display();
			
		}
	});
});


</script>





@endsection('content')