@extends('frontend')

@section('title', 'Wlecome to LLC')]

@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <form action="/reg" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    @if($errors->has('email'))
                        <div class="alert alert-warning" role="alert">
                           {{$errors->first('email')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Username">
                    @if($errors->has('username'))
                        <div class="alert alert-warning" role="alert">
                            {{$errors->first('username')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    @if($errors->has('password'))
                        <div class="alert alert-warning" role="alert">
                            {{$errors->first('password')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" name="pphoto" class="form-control-file" id="exampleFormControlFile1">
                    @if($errors->has('pphoto'))
                        <div class="alert alert-warning" role="alert">
                            {{$errors->first('pphoto')}}
                        </div>
                    @endif
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>

@endsection