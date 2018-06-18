@extends('frontend')

@section('title', 'Wlecome to LLC')

@section('content')


    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible">
            {{ session('message') }}
        </div>
    @endif

    <div class="align-content-center">
        <h1>Account Information</h1>
        <table class="table-bordered">
            <tr>
                <td>Email:</td>
                <td>{{$users->email}}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{$users->username }}</td>
            </tr>
            <tr>
                <td>Image</td>
                <td>{{$users->profile_photo}}</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>{{  }}</td>
            </tr>

        </table>
    </div>


@endsection