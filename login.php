<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./css/style.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/script.js"></script> 
	  <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1" />
  </head>
  
  <body>
    <div id="header">
      <div class="in">
        <h3>Connexion</h3>
      </div>
    </div>
    <div id="headline">
      <div class="in">
        <div class="formulaire">
          <div class="connectform">
            <form  action="index.php" method="post">
              <label>
                <p class="label-txt">email :</p>
                <input type="mail" class="email" name="email" class="input" placeholder="monAdresse@adresse.fr">
              </label>
              <label>
                <p class="label-txt">Mot de passe:</p>
                <input type="password" class="password" name="password" class="input">
              </label>
              <button type="button" class="connexion" >Connexion</button>
              <button type="button" class="register" >Register</button>
              <button type="button" class="accueil" >Annuler</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
