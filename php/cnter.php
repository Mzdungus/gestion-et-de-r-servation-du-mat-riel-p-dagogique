<?php
error_reporting(0);
session_start();
if($_SESSION["utilisateur"]){
    $role = $_SESSION["utilisateur"]["role_u"];
   
 // Supposons que $role contient le rôle de l'utilisateur (par exemple, "admin", "utilisateur", "invité")
//$role =$resultat["fonction"];
switch ($role) {
    case "Administrateur":
    // Code pour gérer l'accès en tant qu'administrateur
    header("location: admin.php");
    break;
    case "Enseignant":
    // Code pour gérer l'accès en tant qu'utilisateur régulier
    header("location: user.php");
    break;
    default:
    // Code pour gérer les cas non prévus
    echo "Accès non autorisé.";
    break;
    } 
     
}
if(!empty($_POST)){

    if(isset($_POST["email"], $_POST["mot_de_passe"]) && !empty($_POST["email"]) && !empty($_POST["mot_de_passe"])){

        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){

            die("saisir adress email valide svp");
        }

        include"connexion.php";


        $message = "veuller connecter !";

        $sql = "SELECT * FROM utilisateur WHERE email = :email";

        $requeter = $db->prepare($sql);

        $requeter->bindValue(":email", $_POST["email"]);

        $requeter->execute();

        $resultat = $requeter->fetch();

        if(!password_verify($_POST["mot_de_passe"], $resultat["mot_de_passe"])){

            die("L'adresse email que vous aviez saisi ou mot de mpasse invalide !");
 
        }
        $_SESSION["utilisateur"] = [
            "id_utilisateur" => $resultat["id_utilisateur"],
            "nom_user" => $resultat["nom_user"],
            "prenom" => $resultat["prenom"],
            "email" => $resultat["email"] ,
            "role_u" => $resultat["role_u"],
            "img" => $resultat["img"],
        ];

        $role =$resultat["role_u"];
switch ($role) {
    case "Administrateur":
        // Code pour gérer l'accès en tant qu'administrateur
        header("location: admin.php");
        break;
        case "Enseignant":
        // Code pour gérer l'accès en tant qu'utilisateur régulier
        header("location: user.php");
break;
default:
// Code pour gérer les cas non prévus
echo "Accès non autorisé.";
break;
}

   

    }else{
        die("raplisez tous les formulair svp");
    }



}

?>

