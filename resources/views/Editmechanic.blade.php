@extends('master')

@section('content')
<div class="form-w3layouts">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                  <u><b>EDIT MECHANIC'S DETAILS HERE</b></u>
              </header>
              <div class="panel-body">
                <div class="position-center">
                    <form method="POST" enctype="multipart/form-data" action="{{route('update_mechanic',$hello->id)}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputname">Mechanic Name</label>
                            <input type="text" class="form-control" name="m_name" value="{{$hello->name}}" id="exampleInputname" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputname">Mechanic E-mail</label>
                            <input type="email" class="form-control" name="m_email" value="{{$hello->email}}" id="exampleInputname">
                        </div>
                        
                        <label>Mechanic Photo</label>
                        <div>
                            <img src="{{$hello->image?url('Uploadchanicalimage/'.$hello->image):url('Uploadchanicalimage/profile.png')}}" style="width: 150px; margin: 2%; margin-right: 7%">                                   
                    </div>   

                    <div style="margin: 3%;">
                        <input type="file" name="update_image">                          
                    </div>    
                    <input type="submit" class="btn btn-success" name="update_mechanic" value="update">
                </form>
            </div>
        </div>
    </section>
</div>
</div>
</div> 
@endsection 