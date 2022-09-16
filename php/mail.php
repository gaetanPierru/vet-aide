<?php
    function sendMail($mail, $nom, $date) {      
        if(mail($mail,'rappel rendez vous','je vous rappel le rendez vous pour '.$nom. ' le :'. $date))
            echo "Mail envoyé avec succès.";
        else
            echo "Un problème est survenu.";
    } 
?>