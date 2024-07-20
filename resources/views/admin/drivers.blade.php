

@extends('admin.admin_template')
@section('content')

@if(@session('message'))
<div class="alert alert-{{@session('color')}}" role="alert">
    {{ @session('message') }}
  </div>
@endif

<table class="table table-dark table-striped">
    <tr>
        <th>#</th>
        <th>Full name</th>
        <th>Car name</th>
        <th>Car model</th>
        <th>Car color</th>
        <th>Delete</th>

    </tr>
    @foreach ($drivers as $drivers)
        <tr>
            <td>{{$drivers["id"]}}</td>
            <td>{{$drivers["fullname"]}}</td>
            <td>{{$drivers["car_name"]}}</td>
            <td>{{$drivers["car_model"]}}</td>
            <td>{{$drivers["car_color"]}}</td>
            <td><a href='{{ url("/admin/driver/delete/$drivers->id") }}'class="btn btn-danger">delete</a>

        </tr>
    @endforeach
  </table>

@endsection

