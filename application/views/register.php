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
                      <?php echo validation_errors(); ?>

                      <?php echo form_open('register/register_user'); ?>
                        <div class="form-group name">
                          <label for="firstName">First Name</label>
                          <input type="text" name="firstName" class="form-control" id="firstName" aria-describedby="firstNameHelp" placeholder="Enter First Name">
                          <label for="lastName">Last Name</label>
                          <input type="text" name="lastName" class="form-control" id="lastName" aria-describedby="lastNameHelp" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group email">
                          <label for="email">Email address</label>
                          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group phoneNumber">
                          <label for="phoneNumber">Phone Number</label>
                          <input type="tel" name="phoneNumber" pattern=".{10}" class="form-control" id="phoneNumber" aria-describedby="phoneNumberHelp" placeholder="Enter Your Phone Number">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="rePassword">Re - Password</label>
                          <input type="password" class="form-control" id="rePassword" placeholder="Retype Password">
                        </div>
                        <div class="buttons">
                          <button class="btn btn-login" type="submit">Staff - Register</button>
                          <button class="btn btn-login"> 
                            <a href="<?php echo site_url('login');?>">Staff - Login</a>
                          </button>
                        </div>
                      </form>

                    </div>
                    <span class="col-md-3"></span>

                  </div>
                </div>
              </div>
            </div>

</section>
  <hr>
