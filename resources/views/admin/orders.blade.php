



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
        <th>Driver name</th>
        <th>Passenger name</th>
        <th>Pickup lat</th>
        <th>Pickup lng</th>
        <th>Dropoff lat</th>
        <th>Dropoff lng</th>

    </tr>
    @foreach ($orders as $order)
        <tr>
            <td>{{$order["id"]}}</td>
            <td>{{ optional($order->driver)->fullname?? 'none' }}</td>
            <td>{{$order->user->fullname}}</td>
            <td>{{$order->pickup_lat}}</td>
            <td>{{$order->pickup_lng}}</td>
            <td>{{$order->dropoff_lat}}</td>
            <td>{{$order->dropoff_lng}}</td>


        </tr>
    @endforeach
  </table>

@endsection

