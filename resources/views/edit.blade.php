@extends('master')

@section('content')
    <div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           EDIT BRAND
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="{{route('brand.update',$brand->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputname">Brand Name</label>
                                    <input type="text" class="form-control" name="b_name" value="{{$brand->brand_name}}" id="exampleInputname" placeholder="Enter Brand Name Here">
                                </div>                              
                                <input type="submit" class="btn btn-success" name="button_click" value="Edit">
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>
    </div> 
@endsection 