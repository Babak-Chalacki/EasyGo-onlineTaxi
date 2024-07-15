

@extends('template')
@section('content')
@section('title')
    Register
@endsection
<style>
    .header_section{
        top:0px;
    }
    body {
        background: rgb(246,246,246);
        background: linear-gradient(305deg, rgba(246,246,246,1) 0%, rgba(0,0,0,1) 100%);
        color: aqua
        }
       .orange-btn {
            background-color: #FFA07A;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
       .orange-btn:hover {
            background-color: #FFC107;
        }
       .form-control {
           background-color: white
        }
       .form-control:focus {
            border-color: #FFA07A;
            box-shadow: 0 0 10px rgba(255, 160, 122, 0.5);
        }
    </style>
</head>
<body>
    <div class="row mt-5">
        <div class="col mt-5"></div>
        <div class="col mt-5"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Register as a User</h2>
<!-- In your Blade file -->
@error('error')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@enderror
@if (Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif
                <form method="POST" action="{{url('/user_register')}}">
                    @csrf
                    <div class="row">
                        <div class="col-6"><div class="form-group">
                            <label for="name">Full name</label>
                            <input name="fullname" type="text" class="form-control" id="name" placeholder="Enter your Full name">
                        </div></div>
                        <div class="col-6"><div class="form-group">
                            <label for="national_id">Username</label>
                            <input name="username" type="text" class="form-control" id="national_id" placeholder="Enter your Username">
                        </div></div>

                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                  <div class="row">
                   <div class="col-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                   </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input name="repass" type="password" class="form-control" id="confirm_password" placeholder="Confirm your password">
                        </div>
                    </div>
                  </div>

                        <div class="row">
                           <center>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="mobile_number">Mobile Number</label>
                                    <input name="number" type="text" class="form-control" id="mobile_number" placeholder="Enter your mobile number">
                                </div>
                            </div>
                           </center>
                        </div>

                        <center>
                            <button type="submit" class="orange-btn">Register</button>
                        </center>
                    </form>
            </div>
        </div>
    </div>

@endsection

