@include('client.header')
<section class="w3l-about-breadcrumb position-relative text-center">
	<div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
		<div class="container py-lg-5 py-3">
			<h2 class="title">services</h2>
      
		</div>
	</div>
</section>

<style type="text/css">
  
  @import url(https://fonts.googleapis.com/css?family=Raleway|Reenie+Beanie);

  * {
    box-sizing: border-box;
  }

  img {
    width: 100%;
  }

  .jd {
    color: black;
  }

  .caption,
  .tushal,
  .date {
    margin: 0;
    color: black;
    text-align: center;
  }

  .caption,
  .tushal {
    font-family: serif;
    font-size: 1em;
    padding: 10px 10px 0 10px;
  }

  .description1 {
    font-size: 0.9em;
    padding: 0 20px 20px 20px;
    text-align: left;
  }

  .container1 {
    perspective: 1000px;
    display: inline-block;
    margin: 3%;
  }

  .container1:hover .flipper {
    transform: rotateY(180deg);
  }

  .container1,
  .front1,
  .back1 {
    width: 250px;
    height: 250px;
  }

  .flipper {
    transition: 0.9s;
    transform-style: preserve-3d;
    position: relative;
  }

  .front1,
  .back1 {
    backface-visibility: hidden;
    position: absolute;
    top: 0;
    left: 0;
    width: 250px;
    height: 250px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .front1 {
    z-index: 2;
  }

  .back1 {
    transform: rotateY(180deg);
  }

  #content1 {
    text-align: center;
  }

</style>    

<div id="content1">
  @foreach($service as $m)
  <div class="container1">
    <div class="flipper">
      <div class="front1">
        <img src="{{$m->image?url('Uploadchanicalimage/'.$m->image):url('clientAssets/images/team1.jpg')}}" class="img-fluid" alt="" style="width: 250px; height: 300px;">
        <p class="caption" >{{$m->service_name}}</p>
      </div>
      <?php $servicename = $m->service_name; ?>
      <div class="back1">
        <a href="{{route('selectsevice',$servicename)}}">
          <h1 class="tushal" style="color: red;">{{$m->service_name}}</h1>
        </a>
        <p class="caption" ><b>Services Details</b> :- {{$m->service_description}}</p>
        <h5 class="caption" >Service Fees :- {{$m->service_price}}</h5>
      </div>
    </div>
  </div>
  @endforeach
</div>

@include('client.footer')