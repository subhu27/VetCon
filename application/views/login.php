<section class="login" id="loginpg">
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
          <div class="login-page">
            <div class="form ">
              <h4 class="text-center">Staff Login</h4>
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
                      <?php echo validation_errors(); 
                      //echo $errors; ?>

                      <?php echo form_open('Login/validateLogin'); ?>
                      <form method="post">
                        <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="emailL" class="form-control" value="<?php echo set_value('emailL');?>" id="email" aria-describedby="emailHelp" placeholder="Enter email">


                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="passwordL" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="buttons">
                          <button class="btn btn-login" type="submit">Staff - Login</button>
                          <button class="btn btn-login"> 
                            <a href="<?php echo site_url("Register");?>">Staff - Register</a>
                          </button>
                        </div>
                      </form>
                      <? echo form_close(); ?>

                    </div>
                    <span class="col-md-3"></span>

                  </div>
                </div>
              </div>
            </div>

</section>
  <hr>
