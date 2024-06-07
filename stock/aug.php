<?php
error_reporting(0);
session_start();

 include "../php/connexion.php";
   $newEmail = $_POST["newEmail"];
   $id = $_SESSION["materiel"]["id_materiel"];
  

   $sql = "UPDATE materiel SET quantite='$newEmail' WHERE id_materiel='$id'";
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