@extends('master')

@section('content')
<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                          Edit Profile
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="POST" action="{{route('editproAdmin.update',$verify->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputname">Admin Name</label>
                                    <input type="text" class="form-control" name="adminname" value="{{$verify->name}}" id="exampleInputname" placeholder="Enter Brand Name Here">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputname">Admin E-mail</label>
                                    <input type="email" class="form-control" name="adminemail" value="{{$verify->email}}" id="exampleInputname" placeholder="Enter Brand Name Here">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputname">Admin Photo</label>
                                    <input type="file" class="form-control" name="adminphoto" id="exampleInputname" >
                                </div>                              
                                <input type="submit" class="btn btn-success" name="editadmin" value="Update">
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>
    </div>
@endsection