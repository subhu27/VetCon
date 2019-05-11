<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to Nepal Veterinary Consultancy</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 

</head>

<body>

  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <div class="col-md-3">
              <img src="img/logo.jpg">
            </div>
            <div class="col-md-3">
              <a href="index.html"><h1>Vetcon</h1></a>
            </div>
              <div class="col-md-6" action="" method="post" role="form">
                    <input type="text" name="ID" class="form-control" id="ID" placeholder="Your ID" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Your Password" data-rule="minlen:8" data-msg="Please enter a valid password" />
                    <div class="validation"></div>
                    <button type="button" class="btn btn-default">Login</button>
              </div>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="#home" class="active">Home</a></li>
                <li role="presentation"><a href="#about">About Us</a></li>
                <li role="presentation"><a href="#services">Services</a></li>
								<li role="presentation"><a href="#doctors">Doctors</a></li>
                <li role="presentation"><a href="#contact">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>