<?php
session_start();
require "accesdb.php";
require "carnetsante.php";
include "mail.php";

function listeRDV($id)
{
    global $PDO;
    $sql = "SELECT rendezvous.rendez_vous_id, animaux.animal_nom, rendezvous.rendez_vous_date FROM rendezvous INNER JOIN animaux on animaux.animal_id = rendezvous.rendez_vous_animal_id where veterinaire_id = :id and rendez_vous_realise = 0";
    $requete = $PDO->prepare($sql);
    $requete->bindValue(":id", $id);
    $requete->execute();
    $result = $requete->fetchAll();



    if ($result != null) {
        for ($i = 0; $i < count($result); $i++) {
            if (date_diff(date_create($result[$i]["rendez_vous_date"]), date_create($today = date("Y-m-d")))->format('%d') < 4 && !isset($_SESSION['mail_send'])) sendMail("pierrugaetan0@gmail.com", $result[$i]["animal_nom"], $result[$i]["rendez_vous_date"]);
        }
        $_SESSION['mail_send'] = true;
        return ($result);
    } else
        return ('pas de rdv');
}

function setRealise($id)
{
    global $PDO;
    $sql = "UPDATE rendezvous set rendez_vous_realise = 1 where rendez_vous_id = :id";
    $requete = $PDO->prepare($sql);
    $requete->bindValue(":id", $id);
    $requete->execute();
    $result = $requete->fetchAll();

    $sql = "SELECT rendez_vous_raison, rendez_vous_animal_id from rendezvous where rendez_vous_id = :id";
    $requete = $PDO->prepare($sql);
    $requete->bindValue(":id", $id);
    $requete->execute();
    $result = $requete->fetchAll();

    insertByIdAndRaison($result[0]['rendez_vous_animal_id'], $result[0]['rendez_vous_raison']);
}

if (isset($_POST['animal']) && $_POST['animal'] != 0) {
    global $PDO;
    $sql = "INSERT INTO rendezvous(rendez_vous_animal_id, veterinaire_id, rendez_vous_date, rendez_vous_raison) values (:animalId, :id, :rdvdate, :raison )";
    $requete = $PDO->prepare($sql);
    $requete->bindValue(":animalId", $_POST['animal']);
    $requete->bindValue(":id", $_SESSION['id_user']);
    $requete->bindValue(":rdvdate", $_POST['date']);
    $requete->bindValue(":raison", $_POST['raison']);
    $requete->execute();
    $result = $requete->fetchAll();
}

if (isset($_POST['animal']) && $_POST['animal'] == 0) echo 'error';
