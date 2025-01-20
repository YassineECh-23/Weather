<?php

include "cnx.php";
if(isset($_GET['supprimer'])){
  $ville_code=$_GET['supprimer'];
  $sql="DELETE FROM P11_ville WHERE ville_code=$ville_code";
  $mysqli->query($sql) or die($mysqli->error()) ;

}
  header("location: Ville.php");

 ?>
