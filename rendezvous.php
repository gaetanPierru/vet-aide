<?php   
    include './php/RendezVous.php';

    if(isset($_GET['check'])){
        setRealise($_GET['check']);
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/script.js"></script>
	  <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1" />
    <title>Mes Rendez-vous</title>
  </head>

  <body>
    <div id="header">
      <div class="in">
        <p><a href='./'>Vét-Aide</p></a>
      </div>

      <div id="login"><?php 
          if(isset($_SESSION['nom'])) {
              echo  $_SESSION['genre'].' '. $_SESSION['nom']. ' '.$_SESSION['prenom'];
          }
          if( isset($_SESSION['nom']) && $_SESSION['prenom'] !== null ) : ?>
            <a href="./logout?logout=1">Se déconnecter</a>
          <?php endif; ?>
       </div>
    </div>

    <?php 
      include 'menu.php';
    ?>
    <div>
        <button type="button" class="addRDV">Ajouter un rendez-vous </button>
    </div>

    <div class=rdv>
    <?php
        $list = listeRDV($_SESSION['id_user']);

        if(isset($list) && $list != 'pas de rdv'){
            for($i = 0; $i < sizeof($list); $i++){
                echo '<li>'.$list[$i]["animal_nom"]." ".$list[$i]["rendez_vous_date"].'</li><a href=./rendezvous?check='.$list[$i]["rendez_vous_id"].'>effectué</a>';
            }
        }else {
          echo 'pas de rendez vous';
        }
    ?>
    </div>
    
        
    </body>
</html>