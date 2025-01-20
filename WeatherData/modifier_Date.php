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

    $date_date = $_GET['date_date'];
    
?>

<div class="navigation">
  <ul>
    <li class="active"><a href="Home.php">Home</a></li>
    <li  class="active"><a href="Climat.php">Climat</a></li>
    <li  class="active"><a href="Ville.php">Ville</a></li>
    <li  class="active"><a href="Date.php">Date</a></li>
    <li><a href="insertion_Date.php">InsererDate</a></li>
  </ul>
</div>

  <div class="container">
    <div class="contact-form row">
      <div class="form-field col-lg-6">
        <form  method="get" class="" action="modifier_date_get.php">
          <input id="name" class="input-text" type="text" value="<?php echo "$date_date" ?>" name="date_date">
          <label for="name" class="label">date_date</label>
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