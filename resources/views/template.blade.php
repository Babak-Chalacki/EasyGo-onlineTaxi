


<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>@yield('title')</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- aos.js  -->
<link rel="stylesheet" href="{{url('https://unpkg.com/aos@next/dist/aos.css')}}" />
<!-- aos.js  -->
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{url('css/responsive.css')}}">
<!-- fevicon -->
<link rel="icon" href="{{url('images/fevicon.png')}}" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{url('css/jquery.mCustomScrollbar.min.css')}}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets -->
<link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
	<!--header section start -->
    <div id="index.html" class="header_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div class="menu_text">
                        <ul>

                            <li>@auth
                                {{ Auth::user()->fullname ||
                                 Auth::guard('drivers')->user()->fullName  }}
                                <li><a href="/logout">logout</a></li>
                                @else

                                <li><a href="/login-page">login</a></li>
                                <li><a href="/register-page">Register</a></li>

                            @endauth</li>
                            <li><a href="#contact">Contact Us</a></li>
                            <li><a href="#"><img src="images/search-icon.png"></a></li>
                            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.html">Home</a>
                  <a href="#about">About</a>
                  <a href="#taxis">Taxi</a>
                  <a href="#booking">Booking</a>
                  <a href="#contact">Contact Us</a>
                </div>
                </div>
                <span  style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="{{url('images/toggle-menu.png')}}" class="toggle_menu"></span>
                </div>
                </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <!-- header section end -->


    @yield('content')


 <!-- section footer start -->
 <div class="section_footer">
    <div class="container">
        <div class="footer_section_2">
          <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-3">
                <h2 class="account_text">Address</h2>
                <p class="ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3">
                <h2 class="account_text">Links</h2>
                <div class="image-icon"><img src="{{url('images/bulit-icon.png')}}"><span class="fb_text"><a href="#">Home</span></a></div>
              <div class="image-icon"><img src="{{url('images/bulit-icon.png')}}"><span class="fb_text"><a href="#">About</span></a></div>
              <div class="image-icon"><img src="{{url('images/bulit-icon.png')}}"><span class="fb_text"><a href="#">Taxi</span></a></div>
              <div class="image-icon"><img src="{{url('images/bulit-icon.png')}}"><span class="fb_text"><a href="#">Booking</span></a></div>
              <div class="image-icon"><img src="{{url('images/bulit-icon.png')}}"><span class="fb_text"><a href="#">Contact Us</span></a></div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3">
              <h2 class="account_text">Follow Us</h2>
              <div class="image-icon"><img src="images/fb-icon.png"><span class="fb_text"><a href="#">Facebook</a></span></div>
              <div class="image-icon"><img src="images/twitter-icon.png"><span class="fb_text"><a href="#">Twitter</a></span></div>
              <div class="image-icon"><img src="images/in-icon.png"><span class="fb_text"><a href="#">Linkedin</a></span></div>
              <div class="image-icon"><img src="images/youtube-icon.png"><span class="fb_text"><a href="#">Youtube</a></span></div>
              <div class="image-icon"><img src="images/instagram-icon.png"><span class="fb_text"><a href="#">Instagram</a></span></div>
              </div>
        <div class="col-sm-6 col-md-6 col-lg-3">
          <h2 class="adderess_text">Newsletter</h2>
          <input type="" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
          <button class="subscribr_bt">SUBSCRIBE</button>
        </div>
        </div>
        </div>
        </div>
    </div>
  </div>
<!-- section footer end -->
<!-- copyright section start -->
<div class="copyright_section">
  <div class="container">
    <p class="copyright">2024 All Rights Reserved.
  </div>
</div>

    <!-- Javascript files-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{url('js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{url('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>
    <!-- javascript -->
    <script src="{{url('js/owl.carousel.js')}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
    });

    $(".zoom").hover(function(){

    $(this).addClass('transition');
    }, function(){

    $(this).removeClass('transition');
    });
    });
    </script>
    <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }
</script>
</body>
</html>
