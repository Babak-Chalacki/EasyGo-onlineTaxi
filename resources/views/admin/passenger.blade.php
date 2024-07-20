
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
        <th>email</th>
        <th>username</th>
        <th>phone number</th>
        <th>Delete</th>

    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{$user["id"]}}</td>
            <td>{{$user["fullname"]}}</td>
            <td>{{$user["email"]}}</td>
            <td>{{$user["username"]}}</td>
            <td>{{$user["phone_number"]}}</td>
            <td><a href='{{ url("/admin/user/delete/$user->id") }}'class="btn btn-danger">delete</a>

        </tr>
    @endforeach
  </table>

@endsection
