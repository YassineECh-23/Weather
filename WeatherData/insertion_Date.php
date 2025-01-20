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
  <link rel="stylesheet"  href="inssertion.css">
  <link rel="stylesheet"  href="format.css">
</head>
<body>
  <section class="heade">
    <nav>
      <div class="navigation">
        <ul>
          <li><a href="Home.php">Acceuil</a></li>
          <li><a href="Climats.php">Climats</a></li>
          <li><a href="Ville.php">Ville</a></li>
          <li><a href="Date.php">Date</a></li>
          <li><a href="insertion_Date.php">InsererDate</a></li>
        </ul>
      </div>
    </nav>
    
    </section>
  <div class="container">
    <div class="contact-form row">
      <div class="form-field col-lg-6">
        <form class="" action="insertion_Date_Table.php">
          <label for="name" class="label">date_date</label>
          <input id="name" class="input-text" type="text" name="date_date" required>
        </div>
      <div class="form-field col-lg-12">
          <input class="submit-btn" type="submit" value="Envoyer" name="envoyer">
        </div>
        </form>
    </div>
  </div>

</body>
</html>
