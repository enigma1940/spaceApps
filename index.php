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
          <div class="col m4 btn carte waves-effect waves-light blue darken-4">Carte</div>
          <div class="col m4 btn plantes waves-effect waves-light blue darken-4" >Plantes</div>
          <div class="col m4 btn waves-effect waves-light blue darken-4">Archives</div>
        </div>
        <div class="col m12 grey lighten-3" id="map" style="height: 480px;"></div>
        <div class="col m12 les_plantes" style="display: none;">
          <center><h4>Pomme de terre</h4></center>
          <h5>le besoin en eau</h5>
          <p>
            Le besoin en eau est important au moment de la tubérisation environ 50 jours après plantation jusqu'à 120 jours après plantation.
Attention à l’excès d’eau car il y a risque de pourrissement des tubercules et faire attention lors de l'arrêt brusque des pluies car il y a risque que la pomme de terre n’atteigne pas la maturation.
          </p>
          <h5>Calendrier cultural : </h5>
          <table>
            <tr><td rowspan="2">Pomme de terre</td><td>Date de semis</td><td>Mi février à mi Mars</td><td>Avril à mai</td><td>Mi mars à mi Avril</td></tr>
            <tr><td>Date de récolte</td><td>Début juin à septembre</td><td>Août à Octobre</td><td>Mi juillet fin Septembre</td></tr>
          </table>
          <center><h4>Oignon</h4></center>
          <p>DIFFERENTS TYPES D’OIGNONS : Oignons de consommation en frais (courte durée dans le sol), les oignons de conservation (longue durée dans le sol)</p>
          <p><span style="color: rgb(13, 141, 223); font-size: 18px;">Sol : </span> peu profond, Les sols meuble, drainé se réchauffant vite. Les sols sableux peuvent convenir à condition que l’alimentation hydrique soit maîtrisée</p>
          <p><span style="color: rgb(13, 141, 223); font-size: 18px;">Eau : </span> L'oignon n'a pas besoin de grandes quantités d'eau pour se développer.Cette règle comprend une exception en cas de fortes chaleurs ou de périodes de sécheresse. Une faible pluviométrie est alors vivement conseillé dans ces situations.</p>
          <p><span style="color: rgb(13, 141, 223); font-size: 18px;">Exigences thermiques : </span>La température optimale de germination est de 15-18°C.La levée dure de 8 à 20 jours selon les conditions climatiques, elle est lente aux températures basses 30 jours </p>
          <p><span style="color: rgb(13, 141, 223); font-size: 18px;">Calendrier cultural : </span>Le cycle varie de 90 jours à 150 jours</p>
          <table>
            <tr><td rowspan="2">Oignon</td><td>Oignons de consommation en frais</td><td></td>Semis en pleine terre : février-avril<br />Récolte : juillet-septembre</tr>
            <tr><td>les oignons de conservation</td><td>Semis en pleine terre : mi-août-septembre<br />Récolte : avril-mai de l'année suivante</td></tr>
          </table>
        </div>
      </div>
    </div>
    <style>td{border: solid 1px rgb(6, 121, 129);}</style>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2cfs5oXFbTLd6TAUKj3TRTJi0YPUIKF4&callback=initMap"></script>
    <script>
    $('.plantes').click(function(){
      $('#map').css('display','none');
      $('.les_plantes').toggle('drop');
    });
    $('.carte').click(function(){
      $('.les_plantes').css('display','none');
      //$('#map').css('display','block');});
      $('#map').toggle('drop');});
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
      var infowindow = new google.maps.InfoWindow();
      for(i=0; i<wtab.length; i++){
        var marker = new google.maps.Marker({
          position: wtab[i],
          map: map,
          animation: google.maps.Animation.DROP,
          icon: 'fonts/water2.png'
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent('Culture possibles : <br />Oignon<br />Pomme de terre');
            infowindow.open(map, this);
          });
      }
    }
  </script>
  <script>

  </script>
  </body>
</html>
