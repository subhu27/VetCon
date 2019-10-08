<section class="register" id="registerpg">
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
          <div class="register-page">
            <div class="form ">
              <h4 class="text-center">Staff - Register</h4>
            </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
        <div class="row">
          <div class="container-fluid">
            <div class="col-md-12">
              <div class="row">
                    <span class="col-md-3"></span>
                    <div class="col-md-6">
                      <?php $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');?>

                      <?php echo form_open('register/register_user'); ?>
                      <form method="post">
                        <div class="form-group name">

<!-- -------------------------------------------First Name field----------------------------------->

                          <label for="firstName">First Name</label>
                          <?php echo form_error('firstName'); ?>
                          <input type="text" name="firstName" class="form-control" value="<?php echo set_value('firstName');?>" id="firstName" aria-describedby="firstNameHelp" placeholder="Enter First Name">


<!-- -------------------------------------------Last Name field----------------------------------->

                          <label for="lastName">Last Name</label>
                          <?php echo form_error('lastName'); ?>
                          <input type="text" name="lastName" class="form-control" value="<?php echo set_value('lastName');?>" id="lastName" aria-describedby="lastNameHelp" placeholder="Enter Last Name">


<!-- -------------------------------------------Email field---------------------------------------->
                        </div>
                        <div class="form-group email">
                          <label for="email">Email address</label>
                           <?php echo form_error('email'); ?>
                          <input type="email" name="email" class="form-control" value="<?php echo set_value('email');?>" id="email" aria-describedby="emailHelp" placeholder="Enter email">


<!-- -------------------------------------------Phone number field---------------------------------------->

                        </div>
                        <div class="form-group phoneNumber">
                          <label for="phoneNumber">Phone Number</label>
                          <?php echo form_error('phoneNumber'); ?>
                          <input type="tel" name="phoneNumber" pattern=".{10}" value="<?php echo set_value('phoneNumber');?>" class="form-control" id="phoneNumber" aria-describedby="phoneNumberHelp" placeholder="Enter Your Phone Number">



<!-- -------------------------------------------Password field---------------------------------------->
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <?php echo form_error('password'); ?>
                          <input type="password" name="password" class="form-control" placeholder="Password" id="password" >



<!-- -------------------------------------------Password  Confirmation field---------------------------------------->

                        </div>
                        <div class="form-group">
                          <label for="rePassword">Re - Password</label>
                          <?php echo form_error('rePassword'); ?>
                          <input type="password" class="form-control" name="conf_password" placeholder="Retype Password">
                          <br>
                          
<!-------------------------------------------- Buttons for registration and login    -- >
                        </div>
                        <!-- Register Button-->
                        <div class="buttons">
                          <button class="btn btn-login" type="submit">Staff - Register</button>
                        <!-- Login Button-->
                          <button class="btn btn-login">
                            <a href="<?php echo site_url('Login');?>">Staff - Login</a>
                          </button>
                        </div>
                      <? echo form_close(); ?>
                      </form>
                    </div>
                    <span class="col-md-3"></span>
                  </div>
                </div>
              </div>
            </div>
</section>
