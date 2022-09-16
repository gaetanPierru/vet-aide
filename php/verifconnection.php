<?php
session_start();
    require "accesdb.php";

    $id='';
    $email=$_POST['email'];
    $mdp=$_POST['psw'];
    global $PDO;
    $sql = "SELECT id, nom, prenom, genre, veterinaire, email FROM user where email = :email and psw = :mdp";
    $requete =$PDO ->prepare($sql);
    $requete ->bindValue(":email",$email);
    $requete ->bindValue(":mdp",hash("md5", $mdp));
    $requete -> execute();
    $result = $requete ->fetchAll();

    foreach($result as $res){
        foreach($res as $key =>$value){
            $id=$value;
        }
    }

    if($id == $email && $email != ""){
        $_SESSION['id_user']= $result[0][0];
        $_SESSION['email']= $email;
        $_SESSION['nom']= $result[0][1];
        $_SESSION['prenom']= $result[0][2];
        $_SESSION['genre']= $result[0][3];
        $_SESSION['veterinaire']= $result[0][4];
        
        echo ($_SESSION['genre'].' '. $_SESSION['nom']. ' '.$_SESSION['prenom']);
    }
    else{
        echo "err";
    }
?>
