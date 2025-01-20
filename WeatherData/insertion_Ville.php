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
          <li><a href="insertion_Ville.php">InsererVille</a></li>
          <li><a href="Date.php">Date</a></li>
        </ul>
      </div>
    </nav>
    <h2>Insertion de Ville</h2>
    </section>
  <div class="container">
    <div class="contact-form row">
      <div class="form-field col-lg-6">
        <form class="" action="insertion_Ville_Table.php">
          <label for="name" class="label">ville_code</label>
          <input id="name" class="input-text" type="text" name="ville_code" required>
        </div>
        <div class="form-field col-lg-6">
          <label for="name2" class="label">Ville Nom</label>
          <input id="name2" class="input-text" type="text" name="Ville Nom" required >          
        </div>
        <div class="form-field col-lg-6">
          <label for="name3" class="label">VilleAlt</label>
          <input id="name3" class="input-text" type="text" name="VilleAlt" >
        </div>
        <div class="form-field col-lg-6">
          <label for="name3" class="label">VilleLat</label>
          <input id="name3" class="input-text" type="text" name="VilleLat" >
        </div>
        <div class="form-field col-lg-6">
          <label for="name3" class="label">VilleLong</label>
          <input id="name3" class="input-text" type="text" name="VilleLong" > 
        </div>

        <div class="form-field col-lg-12">
          <input class="submit-btn" type="submit" value="Envoyer" name="envoyer">
        </div>
        </form>
    </div>
  </div>

</body>
</html>