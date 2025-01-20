<?php

include "cnx.php";
if(isset($_GET['supprimer'])){

  $date_date=$_GET['supprimer'];
  $sql="DELETE FROM P11_date WHERE date_date=$date_date ";

  $mysqli->query($sql) or die($mysqli->error()) ;

}
  header("location: Date.php");

 ?>
