<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>materiel</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Bhumlu Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Bhumlu, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <meta name="author" content="Srthemesvilla" />
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <!-- Icon fonts -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.css">
    <link rel="stylesheet" href="../assets/fonts/linearicons.css">
    <link rel="stylesheet" href="../assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="../assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="../assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="../assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="../assets/css/shreerang-material.css">
    <link rel="stylesheet" href="../assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="../assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/libs/flot/flot.css">

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
     <!-- [ Preloader ] Start -->
     <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">
                <!-- Brand demo (see ../assets/css/demo/demo.css) -->
                <div class="app-brand demo">
                    <span class="app-brand-logo demo">
                    </span>
                    <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Matériel</a>
                    <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                        <i class="ion ion-md-menu align-middle"></i>
                    </a>
                </div>
                <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
               
                <ul class="sidenav-inner py-1">
                      



                <li class="sidenav-item">
                        <a href="../php/admin.php " class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Home</div>
                        </a>
                    </li>

                    <!-- Dashboards -->
                    <li class="sidenav-item">
                        <a href="../reservation/tableau_admin.php" class="sidenav-link">
                            <i class="sidenav-icon feather icon-layers"></i>
                            <div>Réservation</div>
                          
                        </a>
                    </li>
                 
                    <!--  Icons -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold">______</li>
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon feather icon-package"></i>
                            <div>Matériel</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="../stock/add_materiel.php" class="sidenav-link">
                                    <div>Ajouter</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="delete_materiel.php" class="sidenav-link">
                                    <div>Supprimer</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    
                    <!--  Icons -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold">_____</li>
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon feather icon-users"></i>
                            <div>Utilisateurs</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="../php/add_user.php" class="sidenav-link">
                                    <div>Ajouter</div>
                                </a>
                            </li>
                            
                            <li class="sidenav-item">
                                <a href="../php/delete_user.php" class="sidenav-link">
                                    <div>Supprimer</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <!-- Dashboards -->
                    <li class="sidenav-item active">
                        <a href="../stock/" class="sidenav-link">
                            <i class="sidenav-icon lnr lnr-database"></i>
                            <div>Stocks</div>
                          
                        </a>
                    </li>
                 
                </ul>
            </div>
            <!-- [ Layout sidenav ] End -->
                <!-- [ Layout container ] Start -->
                <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                        <!-- Divider -->
                        <hr class="d-lg-none w-100 my-2">

                        <div class="navbar-nav align-items-lg-center">
                            <!-- Search -->
                            <label class="nav-item navbar-text navbar-search-box p-0 active">
                                <i class="feather icon-search navbar-icon align-middle"><p style="font-size: 15px;color:#2c2e3e;">Materiel Pedagogique de FS</p></i>
                                <span class="navbar-search-input pl-2">
                                 
                                </span>
                            </label>
                        </div>

                        <div class="navbar-nav align-items-lg-center ml-auto">
                           

                            <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                                
                                <div class="dropdown-menu dropdown-menu-right">
                                   
                                    

                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="../profile/<?=$_SESSION["utilisateur"]["img"]?>" alt class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0"><?=$_SESSION["utilisateur"]["nom_user"] ?> <?=$_SESSION["utilisateur"]["prenom"] ?></span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                <a href="../profile/" class="dropdown-item">  
                                        <i class="feather icon-user text-muted"></i> &nbsp; Mon profile</a>
                                    <a href="../profile/" class="dropdown-item">
                                    <a href="../profile/" class="dropdown-item">
                                        <i class="feather icon-settings text-muted"></i> &nbsp; Modifier mon profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="../php/decon.php" class="dropdown-item">
                                        <i class="feather icon-power text-danger"></i> &nbsp;Deconnecter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">
                <?php





include "../php/connexion.php";


        if (isset($_POST['btnsubmit'])) {
            $mc = $_POST['motcle'];
            $reqselect = "SELECT * FROM mobile WHERE marque LIKE '%$mc%'";
        } else {
            $reqselect = "SELECT * FROM materiel";
        }
        $resultat = mysqli_query($cnorion, $reqselect);
        while ($ligne = mysqli_fetch_assoc($resultat)) {
        ?>
     
            <br>

            <?php
            $quantite = $ligne['quantite'] - $ligne['indisponible'];
            ?>
          
          <div class="dropdown-menu d-block position-static float-left">
                                <a class="dropdown-item" href="javascript:void(0)"><span class="badge badge-success float-right"><?php echo $quantite ?></span>Disponible :</a>
                                <a class="dropdown-item" href="javascript:void(0)"><span class="badge badge-pill badge-primary float-right"><?php echo $ligne['indisponible']; ?></span>Indisponible :</a>
                                <a class="dropdown-item" href="javascript:void(0)"><span class="badge badge-pill badge-primary float-right"><?php echo $ligne['quantite']; ?></span>Totale : </a>
                                <a class="dropdown-item disabled" href="javascript:void(0)"> <?php echo $ligne['description']; ?></a>
                                <div class="dropdown-divider"></div>
                                <h6 class="dropdown-header">________________________________________</h6>
                                <a class="dropdown-item active" href="javascript:void(0)"><i class="ion ion-md-cloud"></i> &nbsp;<p><?php echo $ligne['nom']; ?></p></a>
                                <a class="dropdown-item" href="javascript:void(0)"><p>Categorie : <?php echo $ligne['categorie']; ?></p></a>
                                <form  method="post" action="up.php"> 
                        <input type="hidden" name="nom" value="<?php echo $ligne['nom'];?>">
                        <input type="hidden" name="id_materiel" value="<?php echo $ligne['id_materiel'];?>">
                        <input type="hidden" name="description" value="<?php echo $ligne['description'];?>">
                        <input type="hidden" name="categorie" value="<?php echo $ligne['categorie'];?>"> 
                        <input type="hidden" name="photo" value="<?php echo $ligne['photo'];?>">       
                        <input id="acht" type="submit" value="Mettre à jour">
                        </form>
                            </div>
                             <br> <hr>

        <?php
        }
        ?>
                    <!-- [ Layout footer ] Start  -->
                    <nav class="layout-footer footer bg-white">
                        <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                            <div class="pt-3">
                                <span class="footer-text font-weight-semibold">&copy; <a href="https://srthemesvilla.com" class="footer-link" target="_blank">Srthemesvilla</a></span>
                            </div>
                            <div>
                                <a href="javascript:" class="footer-link pt-3">About Us</a>
                                <a href="javascript:" class="footer-link pt-3 ml-4">Help</a>
                                <a href="javascript:" class="footer-link pt-3 ml-4">Contact</a>
                                <a href="javascript:" class="footer-link pt-3 ml-4">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </nav>
                 <!--[ Layout footer ] End -->
                 <br><br>
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Core scripts -->
    <script src="../assets/js/pace.js"></script>
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/libs/popper/popper.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/sidenav.js"></script>
    <script src="../assets/js/layout-helpers.js"></script>
    <script src="../assets/js/material-ripple.js"></script>

    <!-- Libs -->
    <script src="../assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/libs/eve/eve.js"></script>
    <script src="../assets/libs/flot/flot.js"></script>
    <script src="../assets/libs/flot/curvedLines.js"></script>
    <script src="../assets/libs/chart-am4/core.js"></script>
    <script src="../assets/libs/chart-am4/charts.js"></script>
    <script src="../assets/libs/chart-am4/animated.js"></script>

    <!-- Demo -->
    <script src="../assets/js/demo.js"></script><script src="../assets/js/analytics.js"></script>
    <script src="../assets/js/pages/dashboards_index.js"></script>
</body>

</html>
