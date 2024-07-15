    @extends('template')
    @section('content')
@section('title')
    EasyGo
@endsection

    <!-- banner section start -->
    <div class="banner_section">
      <div class="container-fluid">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
          <div class="col-md-6">
            <div class="book_now">
              <h1 class="book_text">BOOK NOW</h1>
              <h1 class="call_text">(+71) 1234567890</h1>
            </div>
            <div class="image_1"><img src="{{url('images/img-1.png')}}"></div>
          </div>
          <div class="col-md-6">
            <h1 class="booking_text">Book a City Taxi to your destination in town</h1>
            <div class="contact_bg">
            <div class="input_main">
              <div class="container">
                <h2 class="request_text">Your everyday travel partner</h2>
                <form action="/action_page.php">
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="PICKUP" name="Name">
                </div>
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="DROP" name="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="WHEN" name="Email">
                </div>
                  </form>
                  </div>
                  </div>
                <div class="send_bt"><a href="#">SEARCH</a></div>
          </div>
          </div>
        </div>
    </div>
    <div class="carousel-item">
      <div class="row">
          <div class="col-md-6">
            <div class="book_now">
              <h1 class="book_text">BOOK NOW</h1>
              <h1 class="call_text">(+71) 1234567890</h1>
            </div>
            <div class="image_1"><img src="{{url('images/img-1.png')}}"></div>
          </div>
          <div class="col-md-6">
            <h1 class="booking_text">Book a City Taxi to your destination in town</h1>
            <div class="contact_bg">
            <div class="input_main">
              <div class="container">
                <h2 class="request_text">Your everyday travel partner</h2>
                <form action="/action_page.php">
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="PICKUP" name="Name">
                </div>
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="DROP" name="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="WHEN" name="Email">
                </div>
                  </form>
                  </div>
                  </div>
                <div class="send_bt"><a href="#">SEARCH</a></div>
          </div>
          </div>
        </div>
    </div>
    <div class="carousel-item">
      <div class="row">
          <div class="col-md-6">
            <div class="book_now">
              <h1 class="book_text">BOOK NOW</h1>
              <h1 class="call_text">(+71) 1234567890</h1>
            </div>
            <div class="image_1"><img src="{{url('images/car.png')}}"></div>
          </div>
          <div class="col-md-6">
            <h1 class="booking_text">Book a City Taxi to your destination in town</h1>
            <div class="contact_bg">
            <div class="input_main">
              <div class="container">
                <h2 class="request_text">Your everyday travel partner</h2>
                <form action="/action_page.php">
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="PICKUP" name="Name">
                </div>
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="DROP" name="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="WHEN" name="Email">
                </div>
                  </form>
                  </div>
                  </div>
                <div class="send_bt"><a href="#">SEARCH</a></div>
          </div>
          </div>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="{{url('#main_slider')}}" role="button" data-slide="prev">
    <i class="fa fa-angle-left"></i></a>
  </a>
  <a class="carousel-control-next" href="{{url('#main_slider')}}" role="button" data-slide="next">
    <i class="fa fa-angle-right"></i>
  </a>
  </a>
</div>

      </div>
    </div>
    <!-- banner section end -->
    <!-- our taxis section start -->
    <div id="taxis" class="taxis_section layout_padding">
      <div class="container">
        <h1 class="our_text">Our <span style="color: #f4db31;">Taxi</span></h1>
        <div class="taxis_section_2">
          <div class="row">
            <div class="col-sm-4"  data-aos="flip-left">
              <div class="taxi_main">
                <div class="round_1">01</div>
                <h2 class="carol_text">CAR 1</h2>
                <p class="reader_text">act that a reader will be<br>
                distracted </p>
                <div class="images_2"><a href="#"><img src="{{url('images/img-2.png')}}"></a></div>
              </div>
            </div>
            <div class="col-sm-4"  data-aos="flip-left">
              <div class="taxi_main">
                <div class="round_1">02</div>
                <h2 class="carol_text">CAR 2</h2>
                <p class="reader_text">act that a reader will be<br>
                distracted </p>
                <div class="images_2"><img src="{{url('images/img-2.png')}}"></a></div>
              </div>
            </div>
            <div class="col-sm-4"  data-aos="flip-left">
              <div class="taxi_main">
                <div class="round_1">03</div>
                <h2 class="carol_text">CAR 3</h2>
                <p class="reader_text">act that a reader will be<br>
                distracted </p>
                <div class="images_2"><img src="{{url('images/img-2.png')}}"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- our taxis section end -->
    <!-- why ride section start -->
    <div id="booking" class="ride_section layout_padding">
      <div class="container">
        <div class="ride_main">
          <h1 class="ride_text">Why Ride <span style="color: #f4db31;">With Uloax</span></h1>
      </div>
        </div>
    </div>
    <div class="ride_section_2 layout_padding">
      <div class="container">
        <div class="row">
          <div data-aos="fade-right" class="col-sm-4">
            <div class="image_3"><img src="{{url('images/img-3.png')}}"></div>
          </div>
          <div class="col-sm-8" data-aos="fade-right">
            <h1 class="cabe_text">Uloax for Every Pocket</h1>
            <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as It is a long established fact that a reader will be distracted by the readable c</p>
            <div class="book_bt"><a href="#">BOOK NOW</a></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-8" data-aos="fade-left">
            <h1 class="secure_text" >Secure and Safer Rides</h1>
            <p class="long_text_2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as It is a long established fact that a reader will be distracted by the readable c</p>
            <div class="book_bt_2"><a href="#">BOOK NOW</a></div>
          </div>
          <div class="col-sm-4" data-aos="fade-left">
            <div class="image_3"><img src="{{url('images/img-4.png')}}"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-4" data-aos="fade-right">
            <div class="image_3"><img src="{{url('images/img-5.png')}}"></div>
          </div>
          <div class="col-sm-8" data-aos="fade-right">
            <h1 class="cabe_text">Uloax for Every Pocket</h1>
            <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as It is a long established fact that a reader will be distracted by the readable c</p>
            <div class="book_bt"><a href="#">BOOK NOW</a></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-8" data-aos="fade-left">
            <h1 class="secure_text">Secure and Safer Rides</h1>
            <p class="long_text_2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as It is a long established fact that a reader will be distracted by the readable c</p>
            <div class="book_bt_2"><a href="#">BOOK NOW</a></div>
          </div>
          <div class="col-sm-4" data-aos="fade-left">
            <div class="image_3"><img src="{{url('images/img-5.png')}}"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- why ride section end -->
    <!-- location section start -->
    <div id="contact" class="location_sectin layout_padding" data-aos="zoom-in-up">
      <div class="container-fluid">
        <div class="location_main">
          <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-5">
              <div class="download_text">DOWNLOAD<br><span style="color: #fffcf4;">OUR APP TODAY</span></div>
            </div>
            <div class="col-sm-3">
              <div class="image_7"><img src="{{url('images/img-7.png')}}"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- download section end -->
    @endsection

