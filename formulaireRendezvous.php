<?php
    require './php/listeAnimaux.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/script.js"></script> 
	  <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1" />
    <title>Accueil</title>
  </head>

  <body>
  <form class="connectform">
		<!-- ceation d'un champ de saisie -->
          <p class="title">Création d'un Rendez vous</p>
		  <!-- label=nom du champs de saisie  -->
          <label class="fontsize" for="lastname">animal</label> 
            <FORM>
                <?php
                    $tab = listeAnimaux();

                    echo '<SELECT name="animal" size="1" id="select">';
                    echo '<OPTION value=0>choisir un animal ';

                    for($i = 0; $i<sizeof($tab); $i++){
                        echo '<OPTION value='.$tab[$i]['animal_id'].'>'.$tab[$i]['animal_nom'].' '.$tab[$i]['animal_age'].' ans '.'race: '.$tab[$i]['animal_race'].' <br>';
                    }

                    echo '</SELECT>';
                ?>
            </FORM><button type=button class=addAnimal >Creer un animal</button></br>

            <label class="fontsize" for="lastname">Date du rendez vous </label>				<!-- creer un champs de saisie avec son nom -->
          <input type="datetime-local" id="datetimeRDV" name="datetimeRDV"/>

          <label class="fontsize" for="lastname">Raison du rendez vous</label>				<!-- creer un champs de saisie avec son nom -->
          <input type="text" id="raison" name="raison"/>
		  
          </br>
          <button type="button" id="completeRDV">enregister le rendez vous</button>				<!-- creer un bouton  "envoyer" -->	
          <button type="button" class="accueil">retour</button>	
        </form>
  </body>

</html>