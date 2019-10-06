<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Welcome Dr XXX</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-12">
      <li>
          <a class="menu" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <img class="display-2" align="left"src="<?php echo base_url();  ?>/assets/images/user.png" width="30px" height="30px" padding="10px" alt="user icon">
          <span>Dashboard Home</span>
        </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="users.php">
            <i class="fas fa-fw fa-chart-area"></i>
          <span>Users</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="doctors.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Doctors</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="diseases.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Diseases</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="clients.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Clients</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="cases.php">
         <i class="fas fa-fw fa-table"></i>
         <span>Cases</span></a>
    </ul>

    <div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Home</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-4 col-sm-6 mb-4">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                <img src="<?php echo base_url(); ?>/assets/images/user.png">
                </div>
                <div class="mr-5">XX Active Users</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 mb-4">
            <div class="card text-white bg-lightgreen o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                <img src="<?php echo base_url(); ?>/assets/images/doctor.png">
                </div>
                <div class="mr-5">XX Active Doctors</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 mb-4">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                <img src="<?php echo base_url(); ?>/assets/images/farm.png">
                </div>
                <div class="mr-5">XX Active Farms</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 mb-4">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                <img src="<?php echo base_url(); ?>/assets/images/disease.png">
                </div>
                <div class="mr-5">XX Active Diseases</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 mb-4">
            <div class="card text-white bg-orange o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                <img src="<?php echo base_url(); ?>/assets/images/client.png">
                </div>
                <div class="mr-5">XX Active Clients</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 mb-4">
            <div class="card text-white bg-yellow o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                <img src="<?php echo base_url(); ?>/assets/images/case.png">
                </div>
                <div class="mr-5">XX Active Cases</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
