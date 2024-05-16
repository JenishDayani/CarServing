@extends('master')

@section('content')
    <div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           ADD MECHANIC HERE 
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputname">Mechanic Name</label>
                                    <input type="text" class="form-control" name="m_name" id="exampleInputname" placeholder="Enter Brand Name Here">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputname">Mechanic E-mail</label>
                                    <input type="email" class="form-control" name="m_email" id="exampleInputname" placeholder="Enter Brand Name Here">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputname">Mechnic Password</label>
                                    <input type="password" class="form-control" name="m_password" id="exampleInputname" placeholder="Enter Brand Name Here">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputname">Mechnic Photo</label>
                                    <input type="file" class="form-control" name="m_photo" id="exampleInputname" >
                                </div>                              
                                <input type="submit" class="btn btn-success" name="Addmechanic" value="ADD NEW MECHANIC">
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>
    </div> 
@endsection 