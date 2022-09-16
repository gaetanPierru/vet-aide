<?php
require './php/listeUser.php';
?>

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
    <title>formulaire animaux</title>
</head>

<body>
    <form>
        <!-- ceation d'un champ de saisie -->
        <p class="title">Création d'un Animal</p>
        <!-- label=nom du champs de saisie  -->
        <label class="fontsize" for="lastname">proprietaire</label>
        <FORM>
            <?php
            $tab = listeUser();

            echo '<SELECT name="proprietaire" size="1" id="select">';
            echo '<OPTION value=0>choisir un proprietaire ';

            for ($i = 0; $i < sizeof($tab); $i++) {
                echo '<OPTION value=' . $tab[$i]['id'] . '>' . $tab[$i]['nom'] . ' ' . $tab[$i]['prenom'];
            }

            echo '</SELECT>';
            ?>
        </FORM>

        <label class="fontsize" for="lastname">Date de naissance </label> <!-- creer un champs de saisie avec son nom -->
        <input type="datetime-local" id="datetimeAnimal" name="datetimeAnimal" />

        <label class="fontsize" for="lastname">Nom animal</label> <!-- creer un champs de saisie avec son nom -->
        <input type="text" id="animalNom" name="animalNom" />

        <label class="fontsize" for="lastname">Espece</label> <!-- creer un champs de saisie avec son nom -->
        <input type="text" id="animalRace" name="animalRace" />

        </br>
        <button type="button" id="completeAnimal">enregister l'animal</button> <!-- creer un bouton  "envoyer" -->
        <button type="button" class="accueil">retour</button>
    </form>
</body>

</html>