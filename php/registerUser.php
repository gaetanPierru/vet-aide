<?php
    require "accesdb.php";

    $email=$_POST['email'];
    $mdp=$_POST['psw'];
    $cmdp=$_POST['cpsw'];

    if($cmdp === $mdp && $email != null && $mdp != null){
        global $PDO;
        $sql = "INSERT INTO user (nom, prenom, genre, email, psw, veterinaire) values (:nom, :prenom, :genre, :email, :psw, 0)";
        $requete =$PDO ->prepare($sql);
        $requete ->bindValue(":nom",$_POST['nom']);
        $requete ->bindValue(":prenom",$_POST['prenom']);
        $requete ->bindValue(":genre",$_POST['civilite']);
        $requete ->bindValue(":email",$email);
        $requete ->bindValue(":psw",hash("md5", $mdp));
        $requete -> execute();
        $result = $requete ->fetchAll();

    }

?>