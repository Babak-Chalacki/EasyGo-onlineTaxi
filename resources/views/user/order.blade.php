
@extends('template')
@section('content')
@section('title')
    User-Order
@endsection
<style>.header_section{
    top:0px;
}</style>
<div class="row mt-5">
<div class="col mt-5"></div>
</div>
<div class="container">
    <form id="myform" action="{{url('/save-order')}}" method="POST">
        @csrf
        <p hidden>Origin Latitude: <input name="origin_lat" id="origin_lat_input" type="number" value="51.508742"></p>
        <p hidden>Origin Longitude: <input  name="origin_lng" id="origin_lng_input" type="number" value="-0.120850"></p>
        <p hidden>Destination Latitude: <input name="dest_lat" id="dest_lat_input" type="number" value="51.503442"></p>
        <p hidden>Destination Longitude: <input name="dest_lng" id="dest_lng_input" type="text" value="-0.130850"></p>
        <p hidden>Destination Longitude: <input id="Inp_price" name="price" type="number"></p>

        <div class="row">
            <div class="col-9">
                <p style="display: inline">Estimated Price: <span id="price" style="display:inline;"></span></p>
            </div>
            <div class="col-3">
                <button id="order-btn" class="btn btn-primary mb-4" type="button">Order</button>
            </div>
        </div>
    </form>
<div id="googleMap" style="width:100%;height:800px;"></div>

</div>

<script>
  let originLatInput = document.getElementById('origin_lat_input');
  let originLngInput = document.getElementById('origin_lng_input');
  let destLatInput = document.getElementById('dest_lat_input');
  let destLngInput = document.getElementById('dest_lng_input');
  let Inp_price = document.getElementById('Inp_price');
  let priceParagraph = document.getElementById('price');

  let originLat = parseFloat(originLatInput.value);
  let originLng = parseFloat(originLngInput.value);
  let destLat = parseFloat(destLatInput.value);
  let destLng = parseFloat(destLngInput.value);

  function myMap() {
    var mapProp = {
      center: new google.maps.LatLng(originLat, originLng),
      zoom: 15,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

    let originMarker = new google.maps.Marker({
      position: new google.maps.LatLng(originLat, originLng),
      map: map,
      draggable: true,
      label: '1'
    });

    let destMarker;

    function calculateDistance(lat1, lon1, lat2, lon2) {
      // Haversine formula to calculate distance between two points
      const R = 100000; // Radius of the Earth in km
      const dLat = (lat2 - lat1) * Math.PI / 180;
      const dLon = (lon2 - lon1) * Math.PI / 180;
      const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
        Math.sin(dLon / 2) * Math.sin(dLon / 2);
      const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
      const distance = R * c; // Distance in km
      return distance;
    }

    function updatePrice(distance) {
    let price = distance * 1; // Adding $1 for each kilometer
    priceParagraph.innerText = `$${price.toFixed(2)}`;
    Inp_price.value = price.toFixed(2); // Setting the value of the input field

    // اضافه کردن رویداد click به دکمه "Order" برای ارسال فرم
    document.getElementById('order-btn').addEventListener('click', function() {
        document.getElementById('myform').submit();
    });
}

    function calculateAndDisplayDistance() {
      const distance = calculateDistance(originLat, originLng, destLat, destLng);
      updatePrice(distance);
    }

    originMarker.addListener('click', function() {
      destMarker = new google.maps.Marker({
        position: new google.maps.LatLng(destLat, destLng),
        map: map,
        draggable: true,
        label: '2'
      });

      google.maps.event.addListener(destMarker, 'dragend', function() {
        destLat = destMarker.getPosition().lat();
        destLng = destMarker.getPosition().lng();
        destLatInput.value = destLat;
        destLngInput.value = destLng;
        console.log(`Destination: Lat: ${destLat}, Lng: ${destLng}`);
        calculateAndDisplayDistance();
      });
    });

    originLatInput.addEventListener('input', function() {
      originLat = parseFloat(originLatInput.value);
      originMarker.setPosition(new google.maps.LatLng(originLat, originLng));
      map.setCenter(originMarker.getPosition());
      console.log(`Origin: Lat: ${originLat}, Lng: ${originLng}`);
      calculateAndDisplayDistance();
    })

    originLngInput.addEventListener('input', function() {
      originLng = parseFloat(originLngInput.value);
      originMarker.setPosition(new google.maps.LatLng(originLat, originLng));
      map.setCenter(originMarker.getPosition());
      console.log(`Origin: Lat: ${originLat}, Lng: ${originLng}`);
      calculateAndDisplayDistance();
    })

    destLatInput.addEventListener('input', function() {
      destLat = parseFloat(destLatInput.value);
      if (destMarker) {
        destMarker.setPosition(new google.maps.LatLng(destLat, destLng));
      }
      console.log(`Destination: Lat: ${destLat}, Lng: ${destLng}`);
      calculateAndDisplayDistance();
    })

    destLngInput.addEventListener('input', function() {
      destLng = parseFloat(destLngInput.value);
      if (destMarker) {
        destMarker.setPosition(new google.maps.LatLng(destLat, destLng));
      }
      console.log(`Destination: Lat: ${destLat}, Lng: ${destLng}`);
      calculateAndDisplayDistance();
    })

    google.maps.event.addListener(originMarker, 'dragend', function() {
      originLat = originMarker.getPosition().lat();
      originLng = originMarker.getPosition().lng();
      originLatInput.value = originLat;
      originLngInput.value = originLng;
      console.log(`Origin: Lat: ${originLat}, Lng: ${originLng}`);
      calculateAndDisplayDistance();
    })
  }

  myMap();

</script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAovp7XpE5uP9WCfdcUPdHBb21iGk0JhI&callback=myMap"></script>


@endsection
