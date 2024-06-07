<?php

error_reporting(0);
session_start();
// if(!$_SESSION["utilisateur"]){
//     header("location: add.php");
// }

require_once('connexion.php');
if(!empty($_POST)){

    if(isset($_POST["nom_user"], $_POST["prenom"], $_POST["email"], $_POST["mot_de_passe"] 
    ,$_POST["role"])&& !empty($_POST["nom_user"]) && !empty($_POST["prenom"]) 
    && !empty($_POST["email"]) && !empty($_POST["mot_de_passe"]) && !empty($_POST["role"]) ){

        $nom = strip_tags($_POST["nom_user"]);
        $prenom = strip_tags($_POST["prenom"]);
        $role = strip_tags($_POST["role"]);

        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                $validation = "saisir adress email valide svp";
        }else{

        $pass = password_hash($_POST["mot_de_passe"], PASSWORD_ARGON2I);

        $conn = new PDO('mysql:host=localhost;dbname=materiel', 'root', '');

        $sql = "INSERT INTO utilisateur(nom_user, prenom, email, mot_de_passe,role_u) VALUES(:nom, :prenom, :email, :mot_de_passe, :role_u)";
        

        $requeter = $db->prepare($sql);

        $requeter->bindValue(":nom_user", $nom, PDO::PARAM_STR);
        $requeter->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $requeter->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
        $requeter->bindValue(":mot_de_passe", $pass, PDO::PARAM_STR);
        $requeter->bindValue(":role_u", $role, PDO::PARAM_STR);

        if(!$requeter->execute()){
            die(" Votre inscrition n'a pas pu terminer ");
        }
        die(" Votre inscrition n'a pas pu terminer ");

    }

    }else{
        $validation = "remplisez tous les formulaire";
    }

}

?>