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
          <div class="col m4 btn prevision waves-effect waves-light blue darken-4">Précipitations</div>
        </div>
        <div class="col m12 grey lighten-3" id="map" style="height: 480px;"></div>
        <div class="col m12 les_plantes" style="display: none;">
          <form class="col m12">
            <div class="col m10 input-field">
              <input type="text" class="search" id="search" /><label for="search">Rechercher une plante</label>
            </div>
            <button type="submit" class="btn grey darken-4 col m2">Recherche</button>
          </form>
          <center><h4>Pomme de terre</h4></center>
          <h5>le besoin en eau</h5>
          <p>
            Le besoin en eau est important au moment de la tubérisation environ 50 jours après plantation jusqu'à 120 jours après plantation. Attention à l’excès d’eau car il y a risque de pourrissement des tubercules et faire attention lors de l'arrêt brusque des pluies car il y a risque que la pomme de terre n’atteigne pas la maturation.
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
            <tr><td rowspan="2">Oignon</td><td>Oignons de consommation en frais</td><td>Semis en pleine terre : février-avril<br />Récolte : juillet-septembre</td></tr>
            <tr><td>les oignons de conservation</td><td>Semis en pleine terre : mi-août-septembre<br />Récolte : avril-mai de l'année suivante</td></tr>
          </table>
        </div>

        <div class="col m12 previsionArea" style="display: none;">
          <div class="col m12 purple darken-2 bg" style="margin-top: 20px;">
            <div class="waves-effect waves-light seeAll" style="line-height: 45px; color: #fff;">Observation globale</div>
            <div class="waves-effect waves-light seeOther" style="line-height: 45px; color: #fff; border-left: solid 1px #fff; margin-left: 20px;">Observation rapprochée</div>
          </div>
          <?php
            try{$bdd = new PDO('mysql:host=localhost;dbname=alertagricole', 'root', '');}
            catch(Exception $e){die('Error '.$e->getMessage());}
            $req=$bdd->query('SELECT Month, avg(Precip_Normal) as precip FROM temperatureprecipitation WHERE VILLES="OUAHIGOUYA" AND Year=2000 GROUP BY Month');
            $j = array();
            $k='[';
            while($data=$req->fetch()){
              if($k=='[')$k=$k.'['.$data['Month'].','.$data['precip'].']'; else $k=$k.',['.$data['Month'].','.$data['precip'].']';

              //if($y==''){$y=$data['Year'];}else{$y=$y.','.$data['Year'];}
              //if($x==''){$x=$data['precip'];}else{$x=$x.','.$data['precip'];}
            }
            $k=$k.']';
            echo '<div class="icix" style="display: none;">'.$k.'</div>';
            echo '<div class="iciy"></div>';

           ?>
           <div id="diag" class="col m12 all" style="height: 480px;"></div>
           <div class="col m12 other" style="display: none;">
             <div class="col m6" id="diag1" style="height: 300px;"></div>
             <div class="col m6" id="diag2" style="height: 300px;"></div>
             <div class="col m6" id="diag3" style="height: 300px;"></div>
             <div class="col m6" id="diag4" style="height: 300px;"></div>
             <div class="col m6" id="diag5" style="height: 300px;"></div>
             <div class="col m6" id="diag6" style="height: 300px;"></div>
           </div>
        </div>



      </div>
    </div>
    <style>td{border: solid 1px rgb(6, 121, 129);}</style>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2cfs5oXFbTLd6TAUKj3TRTJi0YPUIKF4&callback=initMap"></script>
    <script>
    $('.seeAll').click(function(){
      $('.other').css('display','none');
      $('.all').toggle('drop');
    });
    $('.seeOther').click(function(){
      $('.all').css('display', 'none');
      $('.other').toggle('drop');
    });

    $('.prevision').click(function(){
      $('#map').css('display','none');
      $('.les_plantes').css('display','none');
      $('.previsionArea').toggle('drop');

    });
    $('.plantes').click(function(){
      $('#map').css('display','none');
      $('.previsionArea').css('display','none');
      $('.les_plantes').toggle('drop');
    });
    $('.carte').click(function(){
      $('.les_plantes').css('display','none');
      //$('#map').css('display','block');});
      $('.previsionArea').css('display','none');
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

      var wtab = [w1,w2,w3,w4,w5,w6,{lat:13.757732, lng:-2.832275},
{lat:13.443744, lng:-1.946972},
{lat:13.132066, lng:-2.134332},
{lat:13.138739, lng:-2.113845},
{lat:13.129421, lng:-2.123033}];
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: ouahigouya,
        mapTypeId: 'satellite',
        styles:[{
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            },
            {
    featureType: 'landscape.natural.terrain',
    elementType: 'labels.text.stroke',
    stylers: [
        { color: 'rgb(2, 163, 90)' }
    ]
},{
    featureType: 'landscape.natural.landcover',
    elementType: 'labels.text.fill',
    stylers: [
        { color: 'rgb(2, 163, 90)' }
    ]
          }
          ]

      });
      var marker = new google.maps.Marker({
        position: ouahigouya,
        map: map
      });

      var cityCircle = new google.maps.Circle({
            strokeColor: '#00cc95',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#00cc95',
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
            infowindow.setContent('<b>Point d\'eau a proximité</b><br />Culture possibles : <br />- Oignon<br />- Pomme de terre');
            infowindow.open(map, this);
          });
      }
      /*var polygon = [
        {lat:13.717599, lng: -2.478470},
{lat:13.632200, lng: -2.611336},
{lat:13.561789, lng: -2.663864},
{lat:13.492025, lng: -2.575974},
{lat:13.366465, lng: -2.522072},
{lat:13.369137, lng: -2.363457},
{lat:13.441274, lng: -2.249817},
{lat:13.414559, lng: -2.114548},
{lat:13.412890, lng: -2.047943},
{lat:13.430589, lng: -1.903061},
{lat:13.575087, lng: -1.932587},
{lat:13.533752, lng: -2.049660},
{lat:13.562456, lng: -2.209648},
{lat:13.643210, lng: -2.315392},
{lat:13.679907, lng: -2.431091},
{lat:13.693250, lng: -2.500099},
{lat:13.717599, lng: -2.478470}
        ];
        var yatenga = new google.maps.Polygon({
            paths: polygon,
            strokeColor: '#00cc95',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#00cc95',
            fillOpacity: 0.35
          });
          yatenga.setMap(map);*/
    }




  </script>
  <script src="js/home.js"></script>
  </body>
</html>
