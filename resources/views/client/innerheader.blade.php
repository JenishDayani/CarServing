@extends('client.header')
<section class="w3l-about-breadcrumb position-relative text-center">
	<div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
		<div class="container py-lg-5 py-3">
			
		</div>
	</div>
</section>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<style type="text/css">
		@import url("https://fonts.googleapis.com/css?family=Titillium+Web");
		* {
			font-family: "Titillium Web", sans-serif;
		}
		/*body {
			height: 2000px;
		}*/
		.navbar .navbar-brand {
			font-size: 30px;
		}
		.navbar .nav-item {
			padding: 10px 20px;
		}
		.navbar .nav-link {
			font-size: 20px;
			margin-left: 10px;
		}
		.fa-bars {
			color: red;
			font-size: 30px;
		}
		.nav{
			background: #211f24 !important;
		}

	</style>
</head>

<body>

	<nav class="navbar sticky-top navbar-expand-lg nav">
		<div class="container">
			<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button> -->

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto w-100 justify-content-end">
					<li class="nav-item">
						<a class="nav-link" href="{{route('ExteriorWashing')}}">Exterior Washing <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Interior Washing</a>
					<li class="nav-item">
						<a class="nav-link" href="#">Vaccum Cleanign</a>
					<li class="nav-item">
						<a class="nav-link" href="#">Seats Washing</a>
					<li class="nav-item">
						<a class="nav-link" href="#">Windows Wiping</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Weat Cleaning</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Oil Changing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Brake Repairing</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

	<!-- <div class="form">
		<input placeholder="Zip Code">
		<select data-placeholder="&nbsp;Year" class="chzn-select year" style="width:70px;" tabindex="1" id="year">
			<option value=""></option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
			<option value="1999">1999</option>
			<option value="1998">1998</option>
			<option value="1997">1997</option>
			<option value="1996">1996</option>
			<option value="1995">1995</option>
			<option value="1994">1994</option>
			<option value="1993">1993</option>
			<option value="1992">1992</option>
			<option value="1991">1991</option>
			<option value="1990">1990</option>
		</select><select data-placeholder="Make" class="chzn-select" style="width:115px;" tabindex="2" id="make">
			<option value=""></option>
			<option value="ACURA">ACURA</option>
			<option value="ASTON MARTIN">ASTON MARTIN</option>
			<option value="AUDI">AUDI</option>
			<option value="BENTLEY">BENTLEY</option>
			<option value="BMW">BMW</option>
			<option value="BUICK">BUICK</option>
			<option value="CADILLAC">CADILLAC</option>
			<option value="CHEVROLET">CHEVROLET</option>
			<option value="CHRYSLER">CHRYSLER</option>
			<option value="DODGE">DODGE</option>
			<option value="FERRARI">FERRARI</option>
			<option value="FORD">FORD</option>
			<option value="GMC">GMC</option>
			<option value="HONDA">HONDA</option>
			<option value="HUMMER">HUMMER</option>
			<option value="HYUNDAI">HYUNDAI</option>
			<option value="INFINITI">INFINITI</option>
			<option value="ISUZU">ISUZU</option>
			<option value="JAGUAR">JAGUAR</option>
			<option value="JEEP">JEEP</option>
			<option value="KIA">KIA</option>
			<option value="LAMBORGHINI">LAMBORGHINI</option>
			<option value="LAND ROVER">LAND ROVER</option>
			<option value="LEXUS">LEXUS</option>
			<option value="LINCOLN">LINCOLN</option>
			<option value="LOTUS">LOTUS</option>
			<option value="MASERATI">MASERATI</option>
			<option value="MAYBACH">MAYBACH</option>
			<option value="MAZDA">MAZDA</option>
			<option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
			<option value="MERCURY">MERCURY</option>
			<option value="MINI">MINI</option>
			<option value="MITSUBISHI">MITSUBISHI</option>
			<option value="NISSAN">NISSAN</option>
			<option value="PONTIAC">PONTIAC</option>
			<option value="PORSCHE">PORSCHE</option>
			<option value="ROLLS-ROYCE">ROLLS-ROYCE</option>
			<option value="SAAB">SAAB</option>
			<option value="SATURN">SATURN</option>
			<option value="SUBARU">SUBARU</option>
			<option value="SUZUKI">SUZUKI</option>
			<option value="TOYOTA">TOYOTA</option>
			<option value="VOLKSWAGEN">VOLKSWAGEN</option>
			<option value="VOLVO">VOLVO</option>
		</select><select data-placeholder="Model" class="chzn-select" style="width:115px;" tabindex="3" id="model">
			<option value=""></option>
			<option value="COMMANDER">COMMANDER</option>
			<option value="COMPASS">COMPASS</option>
			<option value="GRAND CHEROKEE">GRAND CHEROKEE</option>
			<option value="LIBERTY">LIBERTY</option>
			<option value="PATRIOT">PATRIOT</option>
			<option value="WRANGLER">WRANGLER</option>
		</select><select data-placeholder="Trim" class="chzn-select" style="width:100px;" tabindex="4" id="trim">
			<option value=""></option>
			<option value="LIMITED">LIMITED</option>
			<option value="UNLIMITED">UNLIMITED</option>
			<option value="SPORT">SPORT</option>
			<option value="RENEGADE">RENEGADE</option>
		</select>

		<div class="checkbox">
			<label for="checkbox" class="text">Currently Insured?</label>
			<input type="checkbox" id="checkbox" value="1" checked="checked" />
			<label class="box" for="checkbox"></label>
		</div>

		<a href="#" class="button">LET'S GO!</a>
	</div> -->

	
	


	@yield('content')

	@extends('client.footer')