<?php
error_reporting(0);
session_start();

include "../php/connexion.php";
$dir = "images/";
$nameFile = $_FILES['image']['name'];
$tmpFile = $_FILES['image']['tmp_name'];
$typeFile = explode(".",$nameFile)[1];
$time = time();
$nomf = $time.$nameFile;
$photo = $dir.$nomf;
$correct = array ('png','jpg','gif');
$nom = $_POST['nom'];
$description = $_POST['description'];
$quantite = $_POST['quantite'];
$categorie = $_POST['categorie'];


if(in_array($typeFile ,$correct))
{
  if(move_uploaded_file($tmpFile, $dir.$nomf))
  {
    $sql="INSERT INTO materiel(nom, description, categorie, photo, quantite) VALUE
                       ('$nom','$description','$categorie','$photo','$quantite');";

    $req =mysqli_query($conn,$sql); 
       if ($req) 
       {
        ?>
        <script> alert("votre image a ete remplacé  avec succes Votre photo sera prise en charge lors de votre prochaine reconnexion !.");</script>
     <?php
         header('location: index.php');
       }
       else
       {
        echo "l'importation de l'image a echouer  ";
       }
  }
  else
  {
    echo "L'image n'a pas pu etre importer";
  }
}
else
{
  echo "not correct type ";
}


 ?>