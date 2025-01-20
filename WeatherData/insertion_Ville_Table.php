<?php
include "cnx.php";
$newVilleNom=$_GET[VilleNm];
$newVillealtitude=$_GET[VilleAlt];
$newVillelatitude=$_GET[VilleLat];
$newVilleLongitude=$_GET[VilleLong];

$sql="INSERT INTO P11_ville(ville_nom, ville_altitude, ville_latitude, ville_longitude) VALUES('$newVilleNom','$newVillealtitude','$newVillelatitude','$newVilleLongitude')";
$resultat=$mysqli->query($sql);
include "Ville.php";
