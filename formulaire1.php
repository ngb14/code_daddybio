<?php
 if(isset($_POST['valider']))
 {
     if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['telephone']) AND isset($_POST['mail']) AND isset($_POST['message']) )
     {
         if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['telephone']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
         {
# Filtrer les donnees pour pas qu'on mette des chose mauvaise#

          $nom=htmlspecialchars($_POST['nom']);
          $prenom=htmlspecialchars($_POST['prenom']);
          $telephone=htmlspecialchars($_POST['telephone']);
          $mail=htmlspecialchars($_POST['mail']);
          $message=htmlspecialchars($_POST['message']);

          echo "ok" ;
          echo "<h2> Bonjour <mark><b> $nom , $prenom </b></mark> merci pour votre email:<mark><b> $mail </b></mark>, nous avons lu votre message: </br></br> $message </h2>"; 
         }
     }
 }
?>