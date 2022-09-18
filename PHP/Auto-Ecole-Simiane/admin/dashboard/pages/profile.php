<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php
require '../../../include/fonctions.php';
require '../../../Model/UserModel.php';
session_start();

$userModel = new ModeleUser();
$userInscritCount = $userModel->CountAllUserInscri();
$userAccountList = $userModel->RecupUserAll();
$data = $userInscritCount->fetch();
// echo($userAccountList);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"> -->
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
    Gestion Utilisateurs - Auto École Simiane
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Panel Administrateur</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="profile.php">

            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>

            <span class="nav-link-text ms-1">Gestion Utilisateurs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="tables.php">

            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>

            <span class="nav-link-text ms-1">Gestion Message</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="../../../index.php" type="button">Retour à l'accueil</a>
      </div>
    </div>
  </aside>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Utilisateurs</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Utilisateurs</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Rechercher...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/gest-user.png');">
        <!-- <span class="mask  bg-gradient-primary  opacity-2"></span> -->
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row mb-4 d-flex justify-content-center">
          <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="card w-100">
              <div class="card-header pb-0">
                <div class="row text-start">
                  <div class="col-lg-6 col-7">
                    <h6>Comptes créés</h6>
                    <p class="text-sm mb-0">
                      <i class="fa fa-check text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">
                        <?php echo $data['count']; ?>
                        comptes créés</span>
                    </p>
                  </div>
                  <div class="col-lg-6 col-5 d-flex justify-content-end">
                    <div class="dropdown float-lg-center pe-4">
                      <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/img/small-logos/menu.svg">
                      </a>
                      <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;" onclick="document.location.reload(true)">Raffraichir</a></li>
                        <!-- <li><a class="dropdown-item border-radius-md" href="javascript:;">Réinitialiser</a></li> -->
                        <!-- <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li> -->
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Form Check -->
                <!-- <div class="row mt-2 d-flex justify-content-center">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="allUserListed" id="allUserListed1">
                    <label class="form-check-label" for="allUserListed1">
                      Liste de tout les utilisateurs
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="userSearch" id="userSearch">
                    <label class="form-check-label" for="userSearch">
                      Recherche d'utilisateurs
                    </label>
                  </div>
                </div> -->
              </div>

              <?php 
              // if(isset($_POST['allUserListed'])) : ?>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-8">ID</th>
                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Nom - Prénom</th>
                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Email</th>
                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Type Utilisateur</th>
                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Permis</th>
                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- First compte -->

                      <?php
                      $output = '';
                      foreach ($userAccountList as $uAL) {
                        $output .= "
                      <tr>
                        <td class=\"  text-center\">$uAL[USR_ID]</th>
                        <td class=\"text-center\"> $uAL[USR_LASTNAME] $uAL[USR_FIRSTNAME] </td>
                        <td class=\"text-center\"> $uAL[USR_MAIL] </td>
                        <td class=\"text-center\"> $uAL[UTY_LIBELLE] </td>
                        <td class=\"text-center\"> $uAL[PRT_LIBELLE] </td>
                        <td class=\" d-flex align-content-center text-center\"> <a type=\"button\" class=\"btn btn-info\"> Selectionner </a></td>
                      </tr>
                      ";
                      };
                      echo $output; 
                      // endif; ?>
                      <!-- END -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer py-4  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web, modified by <a href="" class="font-weight-bold" target="_blank">Maxime Bizeau</a>.
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configurateur Materiel</h5>
          <p>Changez les options du dashboard ici.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Couleur barre latérale</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Fond barre latérale</h6>
          <p class="text-sm">Choisissez avec 3 options le fond de la barre latérale.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <!-- <p class="text-sm d-xl-none d-block mt-2">Choisissez le fond de la barre laterale.</p> -->
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixe</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Clair / Sombre</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>