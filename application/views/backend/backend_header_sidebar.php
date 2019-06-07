<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Panel - Welcome <?php echo  $this->session->userdata('userFname'); ?></title>

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/back/back_sidebar.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/back/back_style.css'); ?>" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">VetCon - Admin </div>
      <div class="list-group list-group-flush">
        <a href="<?php echo site_url('Dashboard');  ?>" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="<?php echo site_url('Users');  ?>" class="list-group-item list-group-item-action bg-light">Users</a>
        <a href="<?php echo site_url('Doctors');  ?>" class="list-group-item list-group-item-action bg-light">Doctors</a>
        <a href="<?php echo site_url('Disesses');  ?>" class="list-group-item list-group-item-action bg-light">Disesses</a>
        <a href="<?php echo site_url('Clients');  ?>" class="list-group-item list-group-item-action bg-light">Clients</a>
        <a href="<?php echo site_url('Cases');  ?>" class="list-group-item list-group-item-action bg-light">Cases</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-invert border-bottom">
        <button class="btn btn-light" id="menu-toggle"> <img src="https://img.icons8.com/material-outlined/24/000000/sidebar-menu.png"> </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-link"> Welcome, <?php echo $this->session->userdata('userFname');?> </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Front');?>"> Website </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Login/logout');?>"><img src="https://img.icons8.com/metro/26/000000/exit.png" alt="Logout">
              </a>
            </li>
            </li>
          </ul>
        </div>
      </nav>