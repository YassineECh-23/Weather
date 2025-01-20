<?php
include "cnx.php";
include "insertion_Climats.php";

$ville_code = $_GET['ville_code'];
$date_date = $_GET["date_date"];
$Tmax = $_GET["Tmax"];
$Tmin = $_GET["Tmin"];
$precipitations = $_GET['precipitations'];
$ensoleillement = $_GET['ensoleillement'];

$sql = "INSERT INTO P11_climat (ville_code, date_date, tmax, tmin, precipitations, ensoleillement) VALUES('$ville_code', '$date_date', '$Tmax', '$Tmin', '$precipitations', '$ensoleillement')";
$resultat = $mysqli->query($sql);
include "Climats.php";

 ?>
