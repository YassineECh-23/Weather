<?php
  
  include "cnx.php";
  if($_GET['envoyer']){
    
    $date_date = $_GET['date_date'];
   

  $query="UPDATE P11_date SET date_date='$date_date' WHERE date_date='$date_date' ";
  $update=mysqli_query($mysqli,$query);
header("location: Ville.php");
  }
  ?>
