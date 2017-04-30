<!DOCTYPE html>
<html>
  <head>
    <title>Alert agricole</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <header class="col m12">
      <center><h3 style="font-family: cursive;">Alert agricole</h3></center>
    </header>
    <div class="row">
      <div class="col m2">
        <div class="left-menu-item col m12 btn waves-effect waves-light grey darken-2">Suivi</div>
        <div class="left-sub-menu col m11 offset-m1">
          <div class="col m12"><i class="material-icons left">map</i>Carte des prévisions</div>
          <div class="col m12"><i class="material-icons left">web</i>Table des prévisions</div>
        </div>
        <div class="left-menu-item col m12 btn waves-effect waves-light grey darken-2">Conseils</div>
        <div class="left-sub-menu col m11 offset-m1">
          <div class="col m12"><i class="material-icons left">list</i>Carte des prévisions</div>
        </div>
      </div>
      <div class="col m10">
        <div class="col m12">
          <div class="col m4 z-depth-2">Régions</div>
          <div class="col m4 z-depth-2">Plantes</div>
          <div class="col m4 z-depth-2">Archives</div>
        </div>
        <div class="col m12 grey lighten-3" id="map" style="height: 480px;">
          <?php
            /*$request = 'http://api.openweathermap.org/data/2.5/weather?APPID=f0edc1c8a876b45ec0727fda2602c22a&q=Titao';
            $response  = file_get_contents($request);
            $obj  = json_decode($response);
            echo '<pre>';
            print_r($obj);
            echo '</pre>';*/
          ?>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2cfs5oXFbTLd6TAUKj3TRTJi0YPUIKF4&callback=initMap"></script>
    <script>
    function initMap() {
      //var uluru = {lng:-145.00,  lat: -89.00    };

      //var ouaga = {lat: 12.366956, lng: -1.504687};
      //var fada = {lat: 12.060283, lng: 0.362602};
      //var kombissiri = {lat: 12.077039, lng: -1.342435};

      var ouahigouya = {lat: 13.571445, lng: -2.414181};
      var i;
      var w1 = {lat: 13.584981, lng: -2.439439};
      var w2 = {lat: 13.628466, lng: -2.450822};
      var w3 = {lat: 13.632373, lng: -2.449382};
      var w4 = {lat: 13.68824, lng: -2.220523};
      var w5 = {lat: 13.780882, lng: -2.147867};
      var w6 = {lat: 13.799548, lng: -2.067663};
      var wtab = [w1,w2,w3,w4,w5,w6];
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: ouahigouya
      });
      var marker = new google.maps.Marker({
        position: ouahigouya,
        map: map
      });

      var cityCircle = new google.maps.Circle({
            strokeColor: '#00a3ff',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#00d16d',
            fillOpacity: 0.35,
            map: map,
            center: ouahigouya,
            radius: 30000
          });

      for(i=0; i<wtab.length; i++){
        var marker = new google.maps.Marker({
          position: wtab[i],
          map: map,
          animation: google.maps.Animation.DROP,
          icon: 'fonts/water2.png'
        });
      }
    }
  </script>
  <script>

  </script>
  </body>
</html>
