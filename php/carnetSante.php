<?php
    require "accesdb.php";

    function insertByIdAndRaison($id, $raison){
        global $PDO;
        $sql = "INSERT INTO carnetsante(patient_id, poids, symptome, prescription) values (:animalId, 4, :raison, :prescription )";
        $requete =$PDO ->prepare($sql);
        $requete ->bindValue(":animalId", $id);
        $requete ->bindValue(":raison", $raison);
        $requete ->bindValue(":prescription", "rien");
        $requete -> execute();
        $result = $requete ->fetchAll();

        //header('Location: ./rendezvous');
        //exit();
    }

    if(isset($_POST['id'])){
        global $PDO;
        $sql = "SELECT * FROM carnetsante where patient_id = :id";
        $requete =$PDO ->prepare($sql);
        $requete ->bindValue(":id",$_POST['id']);
        $requete -> execute();
        $result = $requete ->fetchAll();

        $affichage= "";

        for($i=0;$i<sizeof($result); $i++){
            $affichage = 'Avez un poids de '. $result[$i]['poids']. ' kg, il avait '. $result[$i]['symptome']. ' et comme prescription '. $result[$i]['prescription']. ' a la date du :'. $result[$i]['carnet_date']. ';';
            echo $affichage;
        }

    } 
?>