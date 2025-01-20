<?php
    include "cnx.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meteo Web Site</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet"  href="style.css">
</head>
<body>
  <section class="su-header">
    <nav>
      <div class="nav-links">
        <ul>
          <li><a href="Home.php">Acceuil</a></li>
          <li><a href="Climats.php">Climats</a></li>
          <li><a href="Ville.php">Ville</a></li>
          <li><a href="insertion_Ville.php">InsererVille</a></li>
          <li><a href="Date.php">Date</a></li>
        </ul>
      </div>
    </nav>
    <h1>Ville Database</h1>
    <!--Pho code ville -->
    <?php
if ($mysqli->connect_errno) {
    echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql = "SELECT ville_code,ville_nom,ville_altitude,ville_latitude,ville_longitude FROM P11_ville";
$result = $mysqli->query($sql);

if ($result) {
  // output data of each row
  echo "<table class=center > ";
  echo "<tr>
        <th>ville_code</th>
        <th>ville_nom</th>
        <th>ville_altitude</th>
        <th>ville_latitude</th>
        <th>ville_longitude</th>
        <th colspan='2' align='center'>Modifier/Supprimer</th>
        </tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["ville_code"]."</td>";
    echo "<td>" . $row["ville_nom"]."</td>";
    echo "<td>" . $row["ville_altitude"]."</td>";
    echo "<td>" . $row["ville_latitude"]."</td>";
    echo "<td>" . $row["ville_longitude"]."</td>";
    echo "<td><a href= 'suprimer_ville.php?supprimer=$row[ville_code]' class='btn btn-danger'>Supprimer</td>";
    echo "<td><a href= 'modifier_ville.php?ville_code=$row[ville_code]&ville_nom=$row[ville_nom]&ville_altitude=$row[ville_altitude]&ville_latitude=$row[ville_latitude]&ville_longitude=$row[ville_longitude]' class='btn btn-success'>Modifier</td>";
    echo "</tr>";
  }
    echo "</table>";
} else {
  echo "0 results";
}
?>
    
  </section>
<div class="footer">
      <p>Copyright© Tous les droits sont réservés.</p>
    </div>
</body>
</html>

