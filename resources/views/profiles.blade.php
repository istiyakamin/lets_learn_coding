@extends('frontend')

@section('title', 'Wlecome to LLC')
@section('styles')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
@endsection

@section('content')

    <h2>HTML Table</h2>

    <table>
        <tr>
            <th>Email</th>
            <th>UserName</th>
            <th>Images</th>
        </tr>

            @foreach($all_users as $single_user)
            <tr>
                <td> {{ $single_user->email}}</td>
                <td>{{ $single_user->username}}</td>
                <td><img src="{{ url('/images/' . $single_user->profile_photo)  }}" alt=""></td>
            </tr>
                @endforeach


    </table>

@endsection