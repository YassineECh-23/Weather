<?php
    include "cnx.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meteo Web Site</title>
  <link rel="stylesheet"  href="style.css">
  <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
  <section class="s-header">
    <nav>
      <div class="nav-links">
        <ul>
          <li><a href="Home.php">Acceuil</a></li>
          <li><a href="Climats.php">Climats</a></li>
          <li><a href="Ville.php">Ville</a></li>
          <li><a href="Date.php">Date</a></li>
          <li><a href="insertion_Date.php">InsererDate</a></li>
        </ul>
      </div>
    </nav>
    <h1>Date Database</h1>
    <!--Php code date-->
     <?php
if ($mysqli->connect_errno) {
    echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql = "SELECT date_date FROM P11_date";
$result = $mysqli->query($sql);

if ($result) {
  // output data of each row
  echo "<table class=center > ";
  echo "<tr>
        <th>date_date</th>
        
        <th colspan='2' align='center'>Modifier/Supprimer</th>
        </tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["date_date"]."</td>";
    
    echo "<td><a href= 'suprimer_date.php?supprimer=$row[date_date]' class='btn btn-danger'>Supprimer</td>";
    echo "<td><a href= 'modifier_Date.php?date_date=$row[date_date]' class='btn btn-success'>Modifier</td>";
    echo "</tr>";
  }
    echo "</table>";
} else {
  echo "0 results";
}
?>
    
    
  </section>

<div class="footer">
      <p>Copyright © Tous les droits sont réservés.</p>
    </div>

</body>
</html>

