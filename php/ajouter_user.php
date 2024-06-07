<?php
require_once('connexion.php');

if (isset($_POST["nom_user"]) && isset($_POST['prenom']) && isset($_POST['email']) 
&& isset($_POST['role'])&& isset($_POST['mot_de_passe'])) {
    $nom = $_POST['nom_user'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_ARGON2I);
    $role = $_POST['role'];
    $sql = "INSERT INTO utilisateur(nom_user, prenom, email, mot_de_passe, role_u) VALUE('$nom', '$prenom', '$email', '$mot_de_passe', '$role')";
    $rslt = mysqli_query($cnorion, $sql);
    var_dump($rslt);
    if ($rslt) {
?>
<script> 
alert("insertion avec succé");
window.location.href="../index.php";
</script>
<?php 
    } else {
?>
<script>
alert("insertion n'est pas terminé avec succé");
window.location.href="../index.php";
;</script>
<?php
    }
} 
?>