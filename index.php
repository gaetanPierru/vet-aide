<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/script.js"></script> 
	  <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1" />
    <title>Accueil</title>
  </head>

  <body>
    <div id="header">
      <div class="in">
        <p><a href='./'>Vét-Aide</p></a>
      </div>

      <div id="login"><?php 
          if(isset($_SESSION['nom'])) {
              echo  $_SESSION['genre'].' '. $_SESSION['nom']. ' '.$_SESSION['prenom'];
          }
          if( isset($_SESSION['nom']) && $_SESSION['prenom'] !== null ) : ?>
            <a href="./logout?logout=1">Se déconnecter</a>
          <?php else : ?>
            <a href="./login">Se connecter</a>
          <?php endif; ?>

       </div>

    </div>

   <?php 
      include 'menu.php';
   ?>

    <h1>Bienvenu sur le site Vét-aide</h1>

    <p>Sur ce site vous pouvez voir le carnet de sante de vos animaux et si vous avez un rendez vous, un mail vous seras envoyé 4 jour avant celui-ci</p>
    <p>Vét-aide la solution pour vos animaux</p>

    <div style="height:auto; background-color: black;">
      <div style="width:33%;  float:right;"> <img style="max-width: 100%; height:500px;" src="./css/images/loutre.jpg"/></div>
      <div style="width:33%;  float:right;"><img style="max-width: 100%; height:500px;" src="./css/images/chien.jpeg"/></div>
      <div style="width:34%;  float:right;"> <img style="float:right; height:500px;" src="./css/images/chat.jpg"/></div>
    </div>
  </body>
  
</html>