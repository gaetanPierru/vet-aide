<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/script.js"></script> 
	  <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1" />
    <title>Accueil</title>
  </head>

  <body>
  <form>
		<!-- ceation d'un champ de saisie -->
          <p class="title">Création du compte</p>
		  <!-- label=nom du champs de saisie  -->
          <label class="fontsize" for="lastname">Civilité</label>
            <FORM>
			<!-- creation champs de saisie  -->
              <SELECT name="nom" size="1" id="select">
			  <!-- select=creation liste deroulante -->
              <OPTION>Monsieur
              <OPTION>Madame
              <OPTION>Autre
			  <!-- option=item de la liste deroulante -->
              </SELECT>
            </FORM>

          <label class="fontsize" for="lastname">Nom</label>				<!-- creer un champs de saisie avec son nom -->
          <input type="text" id="Nom" />
		  
		  
          <label class="fontsize" for="lastname">Prénom</label>				<!-- creer un champs de saisie avec son nom -->
          <input type="text" id="Prenom" />
		  
		  
          <label class="fontsize" for="lastname">Adresse électronique</label>	<!-- creer un champs de saisie avec son nom -->
          <input type="mail" id="Email" placeholder="monAdresse@adresse.fr"/>
		  
		  
          <label class="fontsize" for="lastname">Mot de passe</label>				<!-- creer un champs de saisie avec son nom -->
          <input type="password" id="password"/>

          <label class="fontsize" for="lastname">Verification Mot de passe</label>				<!-- creer un champs de saisie avec son nom -->
          <input type="password" id="checkPassword"/>
          </br>
          <button type="button" id="register">Envoyer</button>				<!-- creer un bouton  "envoyer" -->	
          <button type="button" class="accueil">retour</button>	
        </form>
  </body>

</html>