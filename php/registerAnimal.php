<?php
require "accesdb.php";

$nom = $_POST['nom'];
$date = $_POST['date'];
$proprietaire = $_POST['proprietaire'];
$race = $_POST['race'];

if ($nom != null && $date != null && $race != null && $proprietaire != null) {

    $age = date_diff(date_create($date), date_create($today = date("Y-m-d")))->format('%Y');


    global $PDO;
    $sql = "INSERT INTO animaux (animal_nom, animal_age, animal_race, animal_aniversaire, animal_proprietaire_id) values (:nom, :age, :race, :dt, :id)";
    $requete = $PDO->prepare($sql);
    $requete->bindValue(":nom", $_POST['nom']);
    $requete->bindValue(":age", $age);
    $requete->bindValue(":race", $race);
    $requete->bindValue(":dt", $date);
    $requete->bindValue(":id", $proprietaire);
    $requete->execute();
    $result = $requete->fetchAll();
}
