<?php
error_reporting(0);
session_start();

 include "../php/connexion.php";

 if(!empty($_POST)){

    if(isset( $_POST["email"]) && !empty($_POST["email"])){


   $email = $_POST["email"];


   $id = $_SESSION['utilisateur']['id_utilisateur'];
   

        $sql = "UPDATE `utilisateur` SET `email` = '$email' WHERE `utilisateur`.`id_utilisateur` = '$id';";
        $req =mysqli_query($conn,$sql); 
           if ($req) 
           {

            $_SESSION["utilisateur"]["email"] = $email ;
             echo "votre email a ete remplacé  avec succes !   ";
           }
           else
           {
            echo "le remplacement a echouer  ";
           }
        }
    }
   
 ?>