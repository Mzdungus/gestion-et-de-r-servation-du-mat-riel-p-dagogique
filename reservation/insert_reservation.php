<?php

require_once('../php/connexion.php');
error_reporting(0);
session_start();
// page de fin de confirmation
    if (isset($_POST['start_date'], $_POST['end_date'], $_POST['quantity'])) {
        // Récupération des données envoyées en POST
        $date_debut = $_POST['start_date'];
        $date_fin = $_POST['end_date'];
        $quantite = $_POST['quantity'];
        // Récupération des données des session
        $id_utilisateur = $_SESSION["utilisateur"]["id_utilisateur"] ;
        $id_materiel = $_SESSION["materiel"]["id_materiel"] ;
        // creation de la requette SQL .
        $sql="INSERT INTO reservation(
            id_utilisateur,
            id_materiel,
            date_debut,
            date_fin,
            quantite
        )
        VALUES(
            '$id_utilisateur',
            '$id_materiel',
            '$date_debut',
            '$date_fin',
            '$quantite'
        )";
    $rslt = mysqli_query($cnorion, $sql);
    if ($rslt) {
?><script> alert("insertion avec succé");
window.location.href="../index.php";
</script><?php
        ;
    } 
    else
     {
?><script> alert("La reservation ne pas pu termimée correctement. veuillez  ressayer  ultirieurement.");
window.location.href="../index.php";
</script>
<?php

    }
}
    ?>