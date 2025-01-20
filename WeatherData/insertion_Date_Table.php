<?php
include "cnx.php";
$date_date=$_GET[date_date];

$sql="INSERT INTO P11_date(date_date ) VALUES('2021-01-02')";
$resultat=$mysqli->query($sql);
include "Date.php";
?>