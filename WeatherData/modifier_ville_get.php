
  <?php
  
  include "cnx.php";
  if($_GET['envoyer']){
    
    $ville_code = $_GET['ville_code'];
    $ville_nom = $_GET['ville_nom'];
    $ville_altitude = $_GET['ville_altitude'];
    $ville_latitude = $_GET['ville_latitude'];
    $ville_longitude = $_GET['ville_longitude'];

  $query="UPDATE P11_ville SET ville_code='$ville_code',ville_nom='$ville_nom', ville_altitude='$ville_altitude',
  ville_latitude='$ville_latitude', ville_longitude='$ville_longitude' WHERE ville_code='$ville_code' ";
  $update=mysqli_query($mysqli,$query);
header("location: Ville.php");
  }
  ?>
