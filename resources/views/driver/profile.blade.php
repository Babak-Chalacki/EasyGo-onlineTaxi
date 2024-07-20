@extends('template')
@section('content')
@section('title')
   User-profile
@endsection
<div class="row mt-5">
    <div class="col mt-5"></div>
</div>
    <style>
        .header_section{
            top: 0px
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
       .card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
        }
       .card-body {
            padding: 30px;
        }
       .card-title {
            font-weight: bold;
            color: #333;
        }
       .form-group {
            margin-bottom: 20px;
        }
       .form-control {
            height: 40px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
       .btn-primary {
            background-color: #337ab7;
            border-color: #337ab7;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        }
        #button1{
            display: none
        }

    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Personal Profile</h2>
                        <hr>
                       <form action="{{url('/edit-driver-profile')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="fullname">Full Name:</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" value="{{Auth::guard('drivers')->user()->fullname}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" class="form-control" name="number" id="phone" value=" {{Auth::guard('drivers')->user()->phone_number}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{Auth::guard('drivers')->user()->email}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" name="username" id="username" value="{{Auth::guard('drivers')->user()->username}}" readonly>
                            <input type="text" class="form-control" hidden name="password" id="username" value="{{Auth::guard('drivers')->user()->password}}" readonly>
                        </div>
                        <div class="row">
                            <div class="col-4">
                            <label for="car_name">Car Name:</label>
                                <input type="text" class="form-control" name="car_name" id="car_name" value="{{Auth::guard('drivers')->user()->car_name}}" readonly></div>
                                <div class="col-4">
                            <label for="car_model">Car Nodel:</label>
                                <input type="text" class="form-control" name="car_model" id="car_model" value="{{Auth::guard('drivers')->user()->car_model}}" readonly></div>
                                <div class="col-4">
                            <label for="car_color">Car Nolor:</label>
                                <input type="text" class="form-control" name="car_color" id="car_color" value="{{Auth::guard('drivers')->user()->car_color}}" readonly></div>
                        </div>
                        <div class="text-center">
                            <center><button type="submit" id="button1" class="btn btn-primary mt-4">Edit Profile</button></center>
                        </div>
                    </form>
                   <center> <button type="button" id="button" class="btn btn-primary mt-4">Edit Profile</button></center>

                    </div>
                </div>
            </div>
        </div>
        @if($orders)
    <div class="row mt-5">
        <table class="table table-light">
            <tr>
                <th>Passenger</th>
                <th>The amount payable</th>
                <th>origin lat</th>
                <th>origin lng</th>
                <th>destination lat</th>
                <th>destination lng</th>
                <th>accept</th>
            </tr>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->user->fullname }}</td>
                    <td>${{ $order->fare }}</td>
                    <td>{{ $order->pickup_lat }}</td>
                    <td>{{ $order->pickup_lng }}</td>
                    <td>{{ $order->dropoff_lat }}</td>
                    <td>{{ $order->dropoff_lng }}</td>
                    <td>
                        <form action="{{ url("/driver-accept/$order->id") }}" method="post">
                            @csrf
                            <button class="btn btn-primary">accept</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@else
    <div class="row mt-5">
        <p class="text-center">No orders found</p>
    </div>
@endif
    </div>

    <!-- Code injected by live-server -->
    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function () {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel!= "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:'? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function (msg) {
                    if (msg.data == 'eload') window.location.reload();
                    else if (msg.data == 'efreshcss') refreshCSS();
                };
                if (sessionStorage &&!sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        }
        else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }



        // ]]>
    </script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const editButton = document.querySelector("#button");
        const editButton1 = document.querySelector("#button1");
        const inputFields = document.querySelectorAll("input[readonly]");

        editButton.addEventListener("click", function() {
            inputFields.forEach(function(input) {
                input.removeAttribute("readonly");
                editButton.style.display = "none"
                editButton1.style.display = "block"
            });
        });
    });
    </script>


@endsection

