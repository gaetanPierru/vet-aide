<?php
require "accesdb.php";

function listeAnimauxUserId($id)
{
    global $PDO;
    $sql = "SELECT * FROM animaux where animal_proprietaire_id = :id";
    $requete = $PDO->prepare($sql);
    $requete->bindValue(":id", $_SESSION['id_user']);
    $requete->execute();
    $result = $requete->fetchAll();

    return ($result);
}

function listeAnimaux()
{
    global $PDO;
    $sql = "SELECT * FROM animaux";
    $requete = $PDO->prepare($sql);
    $requete->execute();
    $result = $requete->fetchAll();

    return ($result);
}
