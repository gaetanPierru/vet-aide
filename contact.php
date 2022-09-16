<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/formulaire.css" type="text/css" />
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

    <h1>Contact</h1>

    <p>Vous avez un probleme ou une question</p>
    <p>Voici la solution</p>

    <div class="connectform">
        <form>
		<!-- ceation d'un champ de saisie -->
          <p class="title">Contactez-nous</p>
		  <!-- label=nom du champs de saisie  -->
          <label class="fontsize" for="lastname">Civilité</label>
            <FORM>
			<!-- creation champs de saisie  -->
              <SELECT name="nom" size="1" id="select">
			  <!-- select=creation liste deroulante -->
              <OPTION>Monsieur
              <OPTION>Madame
              <OPTION>Mademoiselle
              <OPTION>Autre
			  <!-- option=item de la liste deroulante -->
              </SELECT>
            </FORM>

          <label class="fontsize" for="lastname">Nom</label>				<!-- creer un champs de saisie avec son nom -->
          <input type="text" id="username" />
		  
		  
          <label class="fontsize" for="lastname">Prénom</label>				<!-- creer un champs de saisie avec son nom -->
          <input type="text" id="username" />
		  
		  
          <label class="fontsize" for="lastname">Adresse électronique</label>	<!-- creer un champs de saisie avec son nom -->
          <input type="mail" id="username" placeholder="mon@adresse.fr"/>
		  
		  
          <label class="fontsize" for="lastname">Message</label>				<!-- creer un champs de saisie avec son nom -->
          <textarea name="message" rows="10" cols="60"></textarea>		  
		  
          <button type="button" class="btn">Envoyer</button>				<!-- creer un bouton  "envoyer" -->		
        </form>
      </div>
  </body>
  
</html>