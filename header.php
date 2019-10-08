<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to Nepal  Veterinary Consultancy</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();  ?>/assets/front/style.css">


</head>

<body>

<header class="col col-lg-12 col-md-12 col-sm-12"id="toShow">
	<div class="row">
		<div class="container-fluid p-0">
			<div class="jumbotron">
				<div class="col-md-12 col-sm-12">
          <a href="<?php echo base_url();?>">
            <img class="display-2" align="left"src="<?php echo base_url();  ?>/assets/images/vetcon_sample_logo.png" width="45px" height="45px" padding="10px" class="d-inline-block align-top navBrand" alt="logo">
          </a>
            <h1 class="brand-text">Nepal Veterinary Consultancy</h1>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="container-fluid p-0">
			<nav class="navbar sticky-top navbar-expand-md navs">
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				  	</button>
					<div class="collapse navbar-collapse" id="navbarNav">
				    	<ul class="navbar-nav">
				      		<li class="nav-item active">
				        		<a class="menu-a" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
				      		</li>
				      		<li class="nav-item">
				        		<a class="menu-a" href="<?php echo base_url();?>#about">About Us</a>
				      		</li>
				      		<li class="nav-item">
				        		<a class="menu-a" href="<?php echo base_url();?>#services">Services</a>
				      		</li>
				      		<li class="nav-item">
				        		<a class="menu-a" href="<?php echo base_url();?>#doctors">Doctors</a>
				      		</li>
                  <li class="nav-item">
                    <a class="menu-a" href="<?php echo site_url("Appointment");?>#appointment">Appointment</a>
                  </li>
				       		<li class="nav-item">
				        		<a class="menu-a" href="<?php echo base_url();?>#contact">Contact Us</a>
				      		</li>
				      		<li class="btnStfLogin" id="staffLogin">
				        		<a  href="
					        		<?php
					        		$logged_in = $this->session->userdata('is_logged_in');
					        		$username = $this->session->userdata('userFname');

					        		if($logged_in==TRUE)
					        		{
					        		  	echo site_url("Dashboard");

					        		}
					        		else{
					        			echo site_url("Login");
					        		}
					        		?>
				        		">
				        			<?php
				        					$btn_class = "btnStfLogin";

				        					if($logged_in==TRUE) {
				        						echo "<button class=\"".$btn_class."\"> Admin </button>";

				        					}
				        					else{
				        						echo "<button class=\"".$btn_class."\"> Staff Login </button>";

				        					}
				        			?>
				        		</a>
				      		</li>
				    	</ul>
				    </div>
				  </nav>
				</div>
			</div>
		</div>
	</div>


</header>
