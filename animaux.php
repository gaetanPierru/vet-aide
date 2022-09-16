<?php
session_start();

require './php/listeAnimaux.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./js/script.js"></script>
  <script type="text/javascript" src="./js/scriptAnimal.js"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1" />
  <title>Mes Animaux</title>
</head>

<body>
  <div id="header">
    <div class="in">
      <p><a href='./'>Vét-Aide</p></a>
    </div>

    <div id="login"><?php
                    if (isset($_SESSION['nom'])) {
                      echo  $_SESSION['genre'] . ' ' . $_SESSION['nom'] . ' ' . $_SESSION['prenom'];
                    }
                    if (isset($_SESSION['nom']) && $_SESSION['prenom'] !== null) : ?>
        <a href="./logout?logout=1">Se déconnecter</a>
      <?php endif; ?>

    </div>
  </div>

  <?php
  include 'menu.php';
  ?>

  <div>
    
    <div id="animalList">
      <h1> Liste de vos animaux :</h1>
      <?php
      if (isset($_SESSION['id_user'])) {
        $tab = listeAnimauxUserId($_SESSION['id_user']);
        echo '<SELECT class=selectA name="animal" size="1" id="select">';
        echo '<OPTION value=0>choisir un animal ';
        for ($i = 0; $i < sizeof($tab); $i++) {
          echo '<OPTION value=' . $tab[$i]['animal_id'] . '>' . $tab[$i]['animal_nom'] . ' ' . $tab[$i]['animal_age'] . ' ans ' . 'espece: ' . $tab[$i]['animal_race'] . ' <br>';
        }
        echo '</SELECT>';
      }
      ?>
      <div id=container>

      </div>
    </div>

  </div>
</body>

</html>