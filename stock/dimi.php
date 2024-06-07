<?php
error_reporting(0);
session_start();

 include "../php/connexion.php";
   $newPassword = $_POST["newPassword"];
   $id = $_SESSION["materiel"]["id_materiel"];
  

   $sql = "UPDATE materiel SET indesponible ='$newPassword' WHERE id_materiel='$id'";
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