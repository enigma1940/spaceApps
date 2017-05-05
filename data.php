<?php
  try{$bdd = new PDO('mysql:host=localhost;dbname=alertagricole', 'root', '');}
  catch(Exception $e){die('Error '.$e->getMessage());}
  $req=$bdd->query('SELECT * FROM temperatureprecipitation');
  $obj = array();
  while($data=$req->fetch()){
    array_push($obj, array('ville'=>$data['VILLES'], 'year'=>$data['Year'], $data['Precip_Normal']));
  }
  echo '<div class="ici">'.json_encode($obj).'</div>';

 ?>
