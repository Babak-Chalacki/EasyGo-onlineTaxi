@extends('template')
@section('content')
@section('title')
    Driver-Register
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
                <h2 class="text-center">Register as a Driver</h2>

                <form method="POST" action="{{url('/driver-register')}}">
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
                    <div class="col-4">
                        <div class="form-group">
                            <label for="car_name">Car Name</label>
                            <input name="car_name" type="text" class="form-control" id="car_name" placeholder="Enter your car name">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="car_model">Car model</label>
                            <select name="car_model" class="form-control" id="car_model">
                                <option value="">Select car color</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>


                                <!-- add more options here -->
                            </select>
                                <!-- add more options here -->
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="car_color">Car color</label>
                            <select name="car_color" class="form-control" id="car_color">
                                <option value="">Select car color</option>
                                <option value="red">Red</option>
                                <option value="white">White</option>
                                <option value="black">Black</option>
                                <option value="silver">Silver</option>
                                <option value="gray">Gray</option>
                                <option value="blue">Blue</option>
                                <option value="green">Green</option>
                                <option value="yellow">Yellow</option>
                                <option value="orange">Orange</option>
                                <option value="brown">Brown</option>
                                <option value="gold">Gold</option>
                                <option value="purple">Purple</option>
                                <option value="pink">Pink</option>
                                <!-- add more options here -->
                            </select>
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

