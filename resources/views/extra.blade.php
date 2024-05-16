<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>


<label for="cars">Choose a City:</label>

<select name="cars" id="cars">
	@foreach($city as $c)
  <option value="{{$c->cityname}}">{{$c->cityname}}</option>

@endforeach
</select>


<button id="submit">Add</button>

</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">


	$(document).on('click','#submit',function(){
		var city = $('#cars').val();
		alert(city);
	});



</script>