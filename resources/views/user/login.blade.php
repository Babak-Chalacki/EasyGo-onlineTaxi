@extends('template')
@section('content')
@section('title')
    User-login
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
    <div class="row mt-5">
        <div class="col mt-5"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Login</h2>
                <form method="post" action="/user-login">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <center>
                        <button type="submit" class="orange-btn">Login</button>
                    </center>
                </form>
            </div>
        </div>
    </div>

@endsection
