<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>halal market</title>
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/ruang-admin.min.css" rel="stylesheet">
  <!-- Select2 -->
  <link href="assets/vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap DatePicker -->
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <!-- <div class="sidebar-brand-icon">
          <img src="assets/img/logo/logo2.png">
        </div> -->
        <div class="sidebar-brand-text mx-3">Halal Market</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Navigation
      </div>
      <li class="nav-item">
        <a class="nav-link" href="bonus.php">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Pelanggan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pemasukan.php">
          <i class="fas fa-fw fa-download"></i>
          <span>Pemasukan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="penilaian.php">
          <i class="far fa-fw fa-list-alt"></i>
          <span>Penilaian</span>
        </a>
      </li>

    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="./assets/img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">VANIA, IBMAL, ANNISA</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->