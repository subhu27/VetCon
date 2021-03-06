<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>


<!-- span class / spacer class to manage the div going underneath the header -->

<div class="fixingHeader" id="fixHeader"></div>

<!-- this is the body of the landing page -->

<div class="container-fluid p-0">
  		<div class="slider" id="home" >
		    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100 img-fluid center" src="<?php echo base_url(); ?>/assets/images/img1.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item ">
		      <img class="d-block w-100 img-fluid center" src="<?php echo base_url(); ?>/assets/images/img2.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100 img-fluid center" src="<?php echo base_url(); ?>/assets/images/img3.jpg" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		</div>
  </div>

  <section id="about">
    <div class="row">
      <div class="container-fluid">
        <div class="center">
          <div class="col-md-12">
            <h5 class="text-center">About Us</h5>
            <hr>
            <p class="about-p">Nepal Veterinary Consultancy resides in the part of the country that shares 80% production of chicken live stock and egg production, while the area also serves a quarter in milk production to the nation. This truly means, Vetcon has more opportunities then any other veterinary organization in the nation. The young team of our client has the clear vision to over take any other veterinary clinics not only in the area but aim to spread over the country.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/#about-->
  <section id="services">
    <div class="row">
    <div class="container-fluid">
      <div class="center">
        <div class="col-md-12">
          <h5 class="text-center">Services</h5>
          <hr>
          <p class="bigger-p">We provide professional, efficient and reliable veterinary services</p>
        </div>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="container-fluid">
      <div class="text-center">
        <div class="col-md-12">
        <div class="row">
          <span class="col-md-1"></span>
          <div class="col-md-3">
            <img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/vaccination.jpg" witch=360px height=240px>
            <h6>Vaccination</h6>
            <p>Our doctors and technician team are well equipped and trained to perform the vaccination.</p>
          </div>
          <span class="col-md-1"></span>
          <div class="col-md-3">
            <img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/farm visit.jpg">
            <h6>Farm Visit</h6>
            <p>Nepal Veterinary Consultancy's doctors visits the farm which gives the farm owner leverage to fix the issues in the farm that may lead to the mortality of the birds / animals reared.
            </p>
          </div>
          <span class="col-md-1"></span>
          <div class="col-md-3">
            <img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/post-mortem.jpg">
            <h6>Post-mortem</h6>
            <p>NVC is equipped with a very advance instruments in the lab to perform the culture test and post-mortem giving our clients quick diagnosis and prescription.</p>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <section id="doctors">
    <div class="row">
      <div class="container-fluid">
        <div class="center">
          <div class="col-md-12">
            <h5 class="text-center">Doctors</h5>
              <hr>
              <p class="lead text-center">Our doctors are experienced, skilled and reliable</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
      <div class="text-center">
      <div class="row">
        <span class="col-md-1"></span>
        <div class="col-md-3">
          <img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/drSonam.jpg">
          <h6>Dr.Sonam Bhandari</h6>
          <p>Sonam completed her BVSc. (Bachelors of Veterinary Science) from IAAS, Rampur Campus. Since her completion in 2015
            she has been practising her skills in Animal Science in Nepal Veterinary Concultancy.</p>
        </div>
        <span class="col-md-1"></span>
        <div class="col-md-3">
          <img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/drSulav.jpg">
          <h6>Dr.Sulav Raj Thapaliya</h6>
          <p>Dr.Sulav started practising in Nepal Veterinary Consultancy since 2017 after his completing his BVSc & AH in 2016 from Purbanchal University, Dharan. He is one of the doctor taking the most cases of NVC. Apart from practising in clinic he also visit farms.
            His interest in technology makes gives him the alias of "clinic geek" in the clinic.
          </p>
        </div>
        <span class="col-md-1"></span>
        <div class="col-md-3">
          <img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/drNimesh.jpg">
          <h6>Dr.Nimesh Khanal</h6>
          <p>Dr. Nimesh Khanal is a doctor but yet he chooses to become an administrative staff.
            He is among the backbone of the clinic who handles all the stuff to make sure it is up and running.</p>
        </div>
      </div>
      </div>
      </div>
    </div>
    </div>
  </section>

  <section id="contact">
      <div class="row">
        <div class="container-fluid">
          <div class="col-md-12">
            <h5 class="text-center"> Contact Us </h5>
            <hr>
            <p class="lead text-center">Keep in touch</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container-fluid">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <h6 class="text-center"> Follow our route </h6>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.0108817093205!2d84.50653971401826!3d27.624179635751098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994ef5973e3b033%3A0x8ec03ff2052c1a1b!2z4KSo4KWH4KSq4KS-4KSyIOCkquCktuClgSDgpJrgpL_gpJXgpL_gpKTgpY3gpLjgpL4g4KSq4KSw4KS-4KSu4KSw4KWN4KS2!5e0!3m2!1sne!2sau!4v1558103090733!5m2!1sne!2sau" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>

              </div>

              <div class="col-md-6">
                <br>
                <h6 class="text-center"> Message Us </h6>
                <br>
                <h6>Please tell us your requires, we will respond you soon.</h6>
                <div id="sendmessage">

                  <p class="text-success text-center">
                  <?php echo $this->session->flashdata('contactUs');?>

                  </p>

                </div>

                <?php $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');?>

                <?php echo form_open('Message/addMessage'); ?>


                <form method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <label for="name">Your Name * </label>
                    <?php  echo form_error('name'); ?>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="<?php echo set_value('name');?>" />

                </div>
                <div class="form-group">
                  <label for="phone">Your Phone * </label>
                  <?php  echo form_error('phone'); ?>
                  <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone"  value="<?php echo set_value('phone');?>" />
                </div>
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <?php  echo form_error('subject'); ?>
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="<?php echo set_value('subject');?>" />

                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <?php  echo form_error('message'); ?>
                  <textarea class="form-control" name="message" value="<?php echo set_value('message');?>"></textarea>

                  <i>* - required</i>
                </div>

                <button type="submit" class="btn btnMsg">Send</button>
              </form>
              <? echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
