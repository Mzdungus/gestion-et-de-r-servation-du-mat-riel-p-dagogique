<?php
error_reporting(0);
session_start();

 include "../php/connexion.php";
   $pass = password_hash($_POST["pass"], PASSWORD_ARGON2I);
   $id = $_SESSION['utilisateur']['id_utilisateur'];
   

        $sql = "UPDATE `utilisateur` SET `mot_de_passe` = '$pass' WHERE `utilisateur`.`id_utilisateur` = '$id';";
        $req =mysqli_query($conn,$sql); 
           if ($req) 
           {
             echo "votre mot de passe a ete remplacé  avec succes !   ";
           }
           else
           {
            echo "le remplacement a echouer  ";
           }
   
 ?>