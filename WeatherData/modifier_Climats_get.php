<?php 

  include "cnx.php";
  if($_GET['envoyer']){

    $ville_code = $_GET['ville_code'];
    $date_date = $_GET['date_date'];
    $tmax = $_GET['tmax'];
    $tmin = $_GET['tmin'];
    $precipitations = $_GET['precipitations'];
    $ensoleillement = $_GET['ensoleillement'];
  

  $query="UPDATE P11_ville SET ville_code='$ville_code', date_date='$date_date', Tmax='$Tmax',
  Tmin='$Tmin', precipitations='$precipitations', ensoleillement='$ensoleillement' WHERE ville_code='$ville_code' ";
  $update=mysqli_query($mysqli,$query);
header("location : Climats.php");
  }
  ?>
