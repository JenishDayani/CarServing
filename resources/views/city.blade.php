@extends('master')

@section('content')

<div class="container">
	
	<div>
		<form class="form-group">
			<div class="form-group">
				<label for="exampleInputEmail1">City Name</label>
				<input type="text" class="form-control" id="city" aria-describedby="emailHelp" placeholder="Enter Service">
			</div>
			<button type="submit" id="addcity" class="btn btn-primary">Add</button>
		</form>
	</div>

	<div  style="background-color: white;">
		<table class="table">
			<thead class="thead-light">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">City Name</th>
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

			url:"{{route('cityajaxjd')}}",
			type:"GET",
			data:{display:1},
			success:function(res){
				$('#data').empty();
				for(i in res)
				{
					var html=`<tr>
					<td>${res[i].id}</td>
					<td>${res[i].cityname}</td>
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














$(document).on('click','#addcity',function(e){
	e.preventDefault();
	var city = $('#city').val();
	$.ajax({
		url:"{{route('cityajaxjd')}}",
		type:"GET",
		data:{add:1,city:city},
		success:function(res){
			$('#city').val('');
			display();
			
		}
	});
});


</script>





@endsection('content')