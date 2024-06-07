<?php
error_reporting(0);
session_start();
if($_SESSION["utilisateur"]){
    $role = $_SESSION["utilisateur"]["role_u"];
 // Supposons que $role contient le rôle de l'utilisateur (par exemple, "admin", "utilisateur", "invité")
//$role =$resultat["fonction"];
switch ($role) {
    case "administrateur":
    // Code pour gérer l'accès en tant qu'administrateur
    header("location: php/admin.php");
    break;
    case "Enseignant":
    // Code pour gérer l'accès en tant qu'utilisateur régulier
    header("location: php/user.php");
    break;
    default:
    // Code pour gérer les cas non prévus
    die("non autoriser");
    break;
    }  
}
?>
<!DOCTYPE html>
<html lang="en" class="material-style layout-fixed">
<head>
    <title>login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Bhumlu Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Bhumlu, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <meta name="author" content="Srthemesvilla" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Icon fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.css">
    <link rel="stylesheet" href="assets/fonts/linearicons.css">
    <link rel="stylesheet" href="assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/fonts/feather.css">
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="assets/css/shreerang-material.css">
    <link rel="stylesheet" href="assets/css/uikit.css">
    <!-- Libs -->
    <link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <!-- Page -->
    <link rel="stylesheet" href="assets/css/pages/authentication.css">
</head>
<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->
    <!-- [ content ] Start -->
    <div class="authentication-wrapper authentication-1 px-4">
        <div class="authentication-inner py-5">
            <!-- [ Logo ] Start -->
        <img  src="assets/img/logo-dark.png" alt="">
            <!-- [ Logo ] End -->
            <!-- [ Form ] Start -->
            <form class="my-5"  method="post" action="php/cnter.php">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="form-label d-flex justify-content-between align-items-end">
                        <span>Mot de passe</span>
                        <a href="php/cnter.php" class="d-block small">Mot de passe oublier?</a>
                    </label>
                    <input style="widh:3OOpx;high:300px" type="password" name="mot_de_passe" class="form-control">
                    <div class="clearfix"></div>
                </div>
                <div class="d-flex justify-content-between align-items-center m-0">
                    <label class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-label">Enregitré </span>
                    </label>
                    <button type="submit" class="btn btn-primary">Connecter</button>
                </div>
            </form>
            <!-- [ Form ] End -->
        </div>
    </div>
    <!-- [ content ] End -->
    <!-- Core scripts -->
    <script src="assets/js/pace.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/libs/popper/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/sidenav.js"></script>
    <script src="assets/js/layout-helpers.js"></script>
    <script src="assets/js/material-ripple.js"></script>
    <!-- Libs -->
    <script src="assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <!-- Demo -->
    <script src="assets/js/demo.js"></script><script src="assets/js/analytics.js"></script>
</body>
</html>