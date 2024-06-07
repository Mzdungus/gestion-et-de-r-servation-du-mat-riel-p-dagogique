<?php
$serveur = "localhost";
$user = "root";
$bdd = "materiel";
$pw = "";
$cnorion = new mysqli($serveur, $user, $pw, $bdd);
  

$conn=$cnorion;

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "materiel");

$dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

try{
      $db = new PDO($dsn, DBUSER, DBPASS);
      //echo "on est connecter";
} catch (PDOException $e) {
         die("erreur:".$e->getMessage()); 
}   
?>