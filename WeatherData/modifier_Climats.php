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
    $date_date = $_GET['date_date'];
    $tmax = $_GET['tmax'];
    $tmin = $_GET['tmin'];
    $precipitations = $_GET['precipitations'];
    $ensoleillement = $_GET['ensoleillement'];
?>

<div class="navigation">
  <ul>
    <li class="active"><a href="Home.php">Home</a></li>
    <li  class="active"><a href="Climat.php">Climat</a></li>
    <li><a href="insertion_Climats.php">InsererVille</a></li>
    <li  class="active"><a href="Ville.php">Ville</a></li>
    <li  class="active"><a href="Date.php">Date</a></li>
  </ul>
</div>

  <div class="container">
    <div class="contact-form row">
      <div class="form-field col-lg-6">
        <form class="#" action="modifier_Climats_get.php">
          
          <input id="name" class="input-text" type="text" value="<?php echo "$ville_code" ?>" name="VilleCd">
          <label for="name" class="label">Ville Code</label>
        </div>
        <div class="form-field col-lg-6">
          <input id="name2" class="input-text" type="text" value="<?php echo "$date_date" ?>" name="date_date">
          <label for="name2" class="label">date_date</label>
        </div>
        <div class="form-field col-lg-6">
          <input id="name3" class="input-text" type="text" value="<?php echo "tmax" ?>" name="Tmax" >
          <label for="name3" class="label">tmax</label>
        </div>
        <div class="form-field col-lg-6">
          <input id="name4" class="input-text" type="text" value="<?php echo "$tmin" ?>" name="Tmin" >
          <label for="name4" class="label">tmin</label>
        </div>
        <div class="form-field col-lg-6">
          <input id="name4" class="input-text" type="text" value="<?php echo "$precipitations" ?>" name="precipitations" >
          <label for="name4" class="label">precipitations</label>
        </div>
        <div class="form-field col-lg-6">
          <input id="name4" class="input-text" type="text" value="<?php echo "$ensoleillement" ?>" name="ensoleillement" >
          <label for="name4" class="label">ensoleillement</label>
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