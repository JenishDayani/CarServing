@extends('master')


@section('content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				ADD CITY
			</header>
			<div class="panel-body">
				<div class="position-center">
					<form class="form-horizontal bucket-form">
							<section class="panel">
								<h5 style="color: red;">* Please Select State & View </h5>

								<div class="panel-body">
									<div class="form-group">

												<div class="form-group">
													<label for="exampleInputname">ADD STATE</label>
													<input type="text" class="form-control" id="state" placeholder="Enter City Here">
												</div>
												<div class="form-group">
													<style type="text/css">
														.btn-block{
															width: 30% !important;
															background-color:hsla(9, 100%, 64%, 0.5);
															border-radius: 25% 10%;
															border: 1px solid #888;
															box-shadow: 0 0 8px 0 rgba(0,0,0,0.50);
														}
													</style>
													<button type="submit" class="btn btn-block b1 mb-5" id="Add_State">Submit</button>
												</div>
											</div>
										</div>
									</section>
								</form>
							</div>
						</div>
					</section>
				</div>
			</div>

			<div class="table-agile-info">
				<div class="panel panel-default">
					<div class="panel-heading">
						View City And Area 
					</div>
					<div>
						<table class="table">
							<thead>
								<tr>
									<th data-breakpoints="xs">ID</th>
									<th style="width: 40%; text-align: center;">City</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody  id="state_data">

							</tbody>
						</table>
					</div>
				</div>
			</div>


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	 <!-- <script type="text/javascript">
		$(document).ready(function(){

			

			getcity();
			$(document).on('click','#addcity',function(e){
				e.preventDefault();

				var cityname = $('#cityname').val();

				$.ajax({
					url:"{{route('addcityajax')}}",
					type:"GET",
					data:{add:1,cityname:cityname},
					success:function(res){
					// console.log(res);
					$('#cityname').val('');
					getcity();
				}
			})

			});			

			function getcity(){
				$.ajax({
					url:"{{route('cityajax')}}",
					type:"GET",
					data:{sel:1},
					success:function(res){
						$('#city_data').empty();
						for(i in res){

							var html = `<tr>

							<td>${res[i].id}</td>
							<td>${res[i].cityname}</td>
							<td>
							<a href="" id="delete_city" data-id=${res[i].id} class="btn btn-danger">DELETE</a>
							<a href="" id="edit_city" data-id=${res[i].id} class="btn btn-success">EDIT</a>
							</td>

							</tr>`;
							$('#city_data').append(html);
						}
					}
				});
			}

			
			$(document).on('click','#edit_city',function(e){
				e.preventDefault();
				var id = $(this).data('id');

				$.ajax({
					url:"{{route('editcityajax')}}",
					type:"GET",
					data:{edit:1,id:id},
					success:function(res){
						$('#cityname').val(res.cityname);
					}
				})
			})

			$(document).on('click','#delete_city',function(e){
				e.preventDefault();

				var id = $(this).data('id');

				$.ajax({
					url:"{{route('deletecityajax')}}",
					type:"GET",
					data:{delete:1,id:id},
					success:function(res){
						getcity();
					}
				})
			})

		});
	</script> -->


	<script type="text/javascript">
		$(document).ready(function(){

			getstate();
			$(document).on('click','#Add_State',function(e) {
				e.preventDefault();

				var state = $('#state').val();

				$.ajax({
					url:"{{route('addstateajax')}}",
					type:"GET",
					data:{add:1,state:state},
					success:function(res){
						$('#state').val('');
						getstate();
					}
				})
			})

			function getstate(){
				$.ajax({
					url:"{{route('viewstateajax')}}",
					type:"GET",
					data:{sel:1},
					success:function(res){

						$('#state_data').empty();
						for(i in res){

							var html = `<tr>

								<td>${res[i].id}</td>
								<td>${res[i].state_name}</td>
								<td>
									<a href="" id="edit_state" data-id=${res[i].id} class="btn btn-success t1">EDIT</a>
									<a href="" id="delete_state" data-id=${res[i].id} class="btn btn-danger t1">DELETE</a>
									<a href="" id="add_city"  class="btn btn-primary t1">ADD CITY AND AREA HERE</a>
								</td>
							</tr>`;

							$('#state_data').append(html);
						}
					}
				});
			}

			// $(document).on('click','#edit_state',function(e){
			// 	e.preventDefault();

			// 	var var_id = $(this).data('id');

			// 	$.ajax({
			// 		url:"{{route('editstateajax')}}",
			// 		type:"GET",
			// 		data:{edit:1,id:var_id},
			// 		success:function(res){
			// 			$('#state').val(res.state_name);
			// 			$('.b1').attr('id','update_state');
			// 			$('.b1').text('Update');

			// 			$('.b1').attr('data-id',res.id);
			// 			$('#state').val(res.state_name);

			// 			getstate(); 
			// 		}
			// 	})
			// })



			// $(document).on('click','#delete_state',function(e){
			// 	e.preventDefault();

			// 	var var_id = $(this).data('id');

			// 	$.ajax({
			// 		url:"{{route('deletestateajax')}}",
			// 		type:"GET",
			// 		data:{delete:1,id:var_id},
			// 		success:function(res){
			// 			getstate();
			// 		}
			// 	})
			// })

			

		});

	</script>


	@endsection