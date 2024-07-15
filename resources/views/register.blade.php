@extends('template')
@section('content')
@section('title')
    User-Register
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
      .btn{
        padding: 70px;
        border-radius:100%;
        font-size: 20px
      }
      .btn:hover{
        background: #f8ca11;
      }
      a{
        text-decoration: none;
        color:black;
      }

    </style>
</head>
<body>
    <div class="row mt-5">
        <div class="col mt-5"></div>
        <div class="col mt-5"></div>
    </div>
    <div class="row mt-5">
        {{-- <div class="col mt-5"></div> --}}
    </div>
    <h2 class="text-center">Who are you?</h2>
  {{-- register question   --}}

  <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-3">
           <a href="/driver-register"><button class="btn btn-info">Driver</button></a>
        </div>
        <div class="col-2">
         <a href="/user-register"><button class="btn btn-info">User</button></a>
        </div>
    </div>
</div>

  {{-- register question   --}}


<div class="row mt-5">
    <div class="col mt-5"></div>
</div>
@endsection
