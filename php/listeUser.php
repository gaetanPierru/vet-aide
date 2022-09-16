<?php 
    require "accesdb.php";

    function listeUser() {
        global $PDO;
        $sql = "SELECT * FROM user";
        $requete =$PDO ->prepare($sql);
        $requete -> execute();
        $result = $requete ->fetchAll();

        return ($result);
    }
?>