<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet"  href="inssertion.css">
  <link rel="stylesheet"  href="format.css">
  <title> Meteo Web Site</title>
</head>
<body>
  <?php

  include "cnx.php";

    $ville_code = $_GET['ville_code'];
    $ville_nom = $_GET['ville_nom'];
    $ville_altitude = $_GET['ville_altitude'];
    $ville_latitude = $_GET['ville_latitude'];
    $ville_longitude = $_GET['ville_longitude'];
?>

<div class="navigation">
  <ul>
    <li class="active"><a href="Home.php">Home</a></li>
    <li  class="active"><a href="Climat.php">Climat</a></li>
    <li  class="active"><a href="Ville.php">Ville</a></li>
    <li><a href="insertion_Ville.php">InsererVille</a></li>
    <li  class="active"><a href="Date.php">Date</a></li>
  </ul>
</div>

  <div class="container">
    <div class="contact-form row">
      <div class="form-field col-lg-6">
        <form  method="get" class="" action="modifier_ville_get.php">
          <label for="name" class="label">ville_code</label>
          <input id="name" class="input-text" type="text" value="<?php echo "$ville_code" ?>" name="VilleCd">
          
        </div>
        <div class="form-field col-lg-6">
          <label for="name2" class="label">ville_nom</label>
          <input id="name2" class="input-text" type="text" value="<?php echo "$ville_nom" ?>" name="VilleNm">
          
        </div>
        <div class="form-field col-lg-6">
          <label for="name3" class="label">ville_altitude</label>
          <input id="name3" class="input-text" type="text" value="<?php echo "$ville_altitude" ?>" name="VilleAlt" >
          
        </div>
        <div class="form-field col-lg-6">
          <label for="name4" class="label">ville_latitude</label>
          <input id="name4" class="input-text" type="text" value="<?php echo "$ville_latitude" ?>" name="VilleLat" >
          
        </div>
        <div class="form-field col-lg-6">
          <label for="name4" class="label">ville_longitude</label>
          <input id="name4" class="input-text" type="text" value="<?php echo "$ville_longitude" ?>" name="VilleLong" >
          
        </div>
        <div class="form-field col-lg-12">
          <input class="submit-btn" type="submit" value="Envoyer" onclick="if(!confirm('etes-vous sur de cette modification?')) return false;" name="envoyer">
        </div>
        </form>
    </div>
  </div>

<?php
$mysqli->close();
?>
</body>
</html>