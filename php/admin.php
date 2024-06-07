<!DOCTYPE html>
<?php
error_reporting(0);
session_start();
?>
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
                <li class="sidenav-item active">
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
                                <a href="add_user.php" class="sidenav-link">
                                    <div>Ajouter</div>
                                </a>
                            </li>
                            
                            <li class="sidenav-item">
                                <a href="delete_user.php" class="sidenav-link">
                                    <div>Supprimer</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <!-- Dashboards -->
                    <li class="sidenav-item">
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
                                <i class="feather icon-search navbar-icon align-middle"><p style="font-size: 15px;color:#2c2e3e">Matériels Pédagogiques</p></i>
                                <span class="navbar-search-input pl-2">
                                 
                                </span>
                            </label>
                        </div>

                        <div class="navbar-nav align-items-lg-center ml-auto">
                           

                            <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                                
                                <div class="dropdown-menu dropdown-menu-right">
                                   
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

    

                    <style>
                        body {
                            font-family: sans-serif;
                            margin: 0;
                            padding: 20px;
                            background-color: #f4f4f4;
                        }
                
                        .container {
                            display: grid;
                            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                            gap: 20px;
                        }
                
                        .item {
                            background-color: #fff;
                            border-radius: 10px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                            padding: 20px;
                            text-align: center;
                        }
                
                        .item img {
                            width: 100%;
                            height: 200px;
                            object-fit: cover;
                            border-radius: 8px;
                            margin-bottom: 10px;
                        }
                
                        .item h3 {
                            margin-bottom: 5px;
                        }
                
                        .item p {
                            margin-bottom: 15px;
                        }
                
                        .item button {
                            background-color: #2c2e3e;
                            color: #fff;
                            border: none;
                            padding: 10px 20px;
                            border-radius: 5px;
                            cursor: pointer;
                            transition: background-color 0.3s;
                        }
                
                        .item button:hover {
                            background-color: #2c2e3e;
                        }
                
                        .categories {
                            display: flex;
                            justify-content: center;
                            margin-bottom: 20px;
                        }
                
                        .category-button {
                            background-color: #eee;
                            border: none;
                            padding: 10px 20px;
                            border-radius: 5px;
                            margin: 0 10px;
                            cursor: pointer;
                            transition: background-color 0.3s;
                        }
                
                        .category-button.active {
                            background-color: #2c2e3e;
                            color: #fff;
                        }
                
                        .category-button:hover {
                            background-color: #ddd;
                        }
                
                        .hidden {
                            display: none;
                        }
                    </style>
                <br><br><hr>
                <body>
                <?php require_once('connexion.php'); ?>
                <body>
                   <div class="categories">
                        <button class="category-button active" data-category="all">Tous</button>
                        <button class="category-button" data-category="categorie1">Informatique</button>
                        <button class="category-button" data-category="categorie2">Audiovisuel</button>
                        <button class="category-button" data-category="categorie3">Bureautique</button>
                        <button class="category-button" data-category="categorie4">Sport</button>
                    </div>
                    <div class="container">
                 <!-- CATEGORIE 1 -->
                 <?php
                    $reqselect =  "SELECT * FROM `materiel` WHERE materiel.categorie = 'Informatique'";
                    $resultat = mysqli_query($cnorion, $reqselect);
                    while ($ligne = mysqli_fetch_assoc($resultat)) {
                    ?>
                    <div class="item" data-category="categorie1">
                            <img src="../stock/<?php echo $ligne['photo'] ?>" /><br>
                            <?php echo $ligne['nom']; ?> <br> <hr>
                             <?php echo $ligne['description']; ?><br>
                                 <?php echo $ligne['categorie']; ?>
                        <form  method="post" action="insert.php"> 
                        <input type="hidden" name="nom" value="<?php echo $ligne['nom'];?>">
                        <input type="hidden" name="id_materiel" value="<?php echo $ligne['id_materiel'];?>">
                        <input type="hidden" name="description" value="<?php echo $ligne['description'];?>">
                        <input type="hidden" name="categorie" value="<?php echo $ligne['categorie'];?>"> <br>       
                        <input id="acht" type="submit" class="btn btn-round btn-outline-secondary" value="Reservation">
                        </form>
                        </div>
                      <?php
                        }
                       ?>  
                                                                    <!-- CATEGORIE 2 -->
                                                                    <?php
                    $reqselect =  "SELECT * FROM `materiel` WHERE materiel.categorie = 'Audiovisuel'";
                    $resultat = mysqli_query($cnorion, $reqselect);
                    while ($ligne = mysqli_fetch_assoc($resultat)) {
                    ?>
                    <div class="item" data-category="categorie2">
                    <img src="../stock/<?php echo $ligne['photo'] ?>" /><br>
                            <?php echo $ligne['nom']; ?> <br> <hr>
                             <?php echo $ligne['description']; ?><br>
                                 <?php echo $ligne['categorie']; ?>
                        <form  method="post" action="insert.php"> 
                        <input type="hidden" name="nom" value="<?php echo $ligne['nom'];?>"> 
                        <input type="hidden" name="id_materiel" value="<?php echo $ligne['id_materiel'];?>">
                        <input type="hidden" name="description" value="<?php echo $ligne['description'];?>">
                        <input type="hidden" name="categorie" value="<?php echo $ligne['categorie'];?>">       <br>
                        <input id="acht" type="submit" class="btn btn-round btn-outline-secondary" value="Reservation">
                        </form>
                        </div>
                      <?php
                        }
                       ?>   
                                                                    <!-- CATEGORIE 3 -->
                                                                    <?php
                    $reqselect =  "SELECT * FROM `materiel` WHERE materiel.categorie = 'Bureautique'";
                    $resultat = mysqli_query($cnorion, $reqselect);
                    while ($ligne = mysqli_fetch_assoc($resultat)) {
                    ?>
                    <div class="item" data-category="categorie3">
                    <img src="../stock/<?php echo $ligne['photo'] ?>" /><br>
                            <?php echo $ligne['nom']; ?> <br> <hr>
                             <?php echo $ligne['description']; ?><br>
                                 <?php echo $ligne['categorie']; ?>
                        <form  method="post" action="insert.php"> 
                        <input type="hidden" name="nom" value="<?php echo $ligne['nom'];?>"> 
                        <input type="hidden" name="id_materiel" value="<?php echo $ligne['id_materiel'];?>">
                        <input type="hidden" name="description" value="<?php echo $ligne['description'];?>">
                        <input type="hidden" name="categorie" value="<?php echo $ligne['categorie'];?>">       
                        <input id="acht" type="submit" class="btn btn-round btn-outline-secondary" value="Reservation">
                        </form>
                        </div>
                      <?php
                        }
                       ?> 
                                    <!-- CATEGORIE 4 -->
                                                                    <?php
                    $reqselect =  "SELECT * FROM `materiel` WHERE materiel.categorie = 'Sport'";
                    $resultat = mysqli_query($cnorion, $reqselect);
                    while ($ligne = mysqli_fetch_assoc($resultat)) {
                    ?>
                    <div class="item" data-category="categorie4">
                    <img src="../stock/<?php echo $ligne['photo'] ?>" /><br>
                            <?php echo $ligne['nom']; ?> <br> <hr>
                             <?php echo $ligne['description']; ?><br>
                                 <?php echo $ligne['categorie']; ?>
                        <form  method="post" action="insert.php"> 
                        <input type="hidden" name="nom" value="<?php echo $ligne['nom'];?>">
                        <input type="hidden" name="id_materiel" value="<?php echo $ligne['id_materiel'];?>">
                        <input type="hidden" name="description" value="<?php echo $ligne['description'];?>">
                        <input type="hidden" name="categorie" value="<?php echo $ligne['categorie'];?>">       
                        <input id="acht" type="submit" class="btn btn-round btn-outline-secondary" value="Reservation">
                        </form>
                        </div>
                      <?php
                        }
                       ?>                   
                    <br>
                    </div>     
                    <script>
                        const categoryButtons = document.querySelectorAll('.category-button');
                        const items = document.querySelectorAll('.item');
                
                        categoryButtons.forEach(button => {
                            button.addEventListener('click', () => {
                                const category = button.dataset.category;
                
                                // Remove active class from all buttons
                                categoryButtons.forEach(btn => btn.classList.remove('active'));
                
                                // Add active class to the clicked button
                                button.classList.add('active');
                
                                // Show all items if "Tous" is clicked
                                if (category === 'all') {
                                    items.forEach(item => item.classList.remove('hidden'));
                                } else {
                                    // Hide all items and show only items from the selected category
                                    items.forEach(item => {
                                        if (item.dataset.category === category) {
                                            item.classList.remove('hidden');
                                        } else {
                                            item.classList.add('hidden');
                                        }
                                    });
                                }
                            });
                        });
                    </script>
                    <hr><hr>
                    <!-- [ Layout footer ] Start  -->
                    <nav class="layout-footer footer bg-white">
                        <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                            <div class="pt-3">
                                <span class="footer-text font-weight-semibold">&copy; <a href="" class="footer-link" target="_blank"></a>Groupe 05 !</span>
                            </div>
                            <div>
                                <a href="javascript:" class="footer-link pt-3">A propos</a>
                                <a href="javascript:" class="footer-link pt-3 ml-4">Aide</a>
                                <a href="javascript:" class="footer-link pt-3 ml-4">Contact</a>
                                <a href="javascript:" class="footer-link pt-3 ml-4">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </nav>
                 <!--[ Layout footer ] End -->
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
