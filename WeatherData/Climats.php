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
  <section class="sub-header">
    <nav>
      <div class="nav-links">
        <ul>
          <li><a href="Home.php">Acceuil</a></li>
          <li><a href="Climats.php">Climats</a></li>
          <li><a href="insertion_Climats.php">InsererClimats</a></li>
          <li><a href="Ville.php">Ville</a></li>
          <li><a href="Date.php">Date</a></li>
        </ul>
      </div>
    </nav>
    <h1>Climats Database</h1>
  <!--phpCode-->

<?php
  if ($mysqli->connect_errno) {
    echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

  $sql = "SELECT ville_code, date_date, tmax, tmin, precipitations, ensoleillement FROM P11_climat";
  $rst =  $mysqli->query($sql);
  if ($rst) {
    echo "<table class= center > ";
  echo "<tr>
        <th>ville_code</th>
        <th>date_date</th>
        <th>tmax</th>
        <th>tmin</th>
        <th>precipitations</th>
        <th>ensoleillement</th>
        <th colspan='2' align='center'>Modifier/Supprimer</th>
        </tr>";
  while($row = $rst->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["ville_code"]."</td>";
    echo "<td>" . $row["date_date"]."</td>";
    echo "<td>" . $row["tmax"]."</td>";
    echo "<td>" . $row["tmin"]."</td>"; 
    echo "<td>" . $row["precipitations"]."</td>";
    echo "<td>" . $row["ensoleillement"]."</td>";

    echo "<td><a href= 'suprimer_Climats.php?supprimer=$row[ville_code] & supprimerdate_date=$row[date_date]' class='btn btn-danger'>Supprimer</td>";

    echo "<td><a href= 'modifier_Climats.php?ville_code=$row[ville_code]&date_date=$row[date_date]&tmax=$row[tmax]&tmin=$row[tmin]&precipitations=$row[precipitations]&ensoleillement=$row[ensoleillement]' class='btn btn-success'>Modifier</td>";
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

