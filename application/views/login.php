

<section class="login" id="loginpg">
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
          <div class="login-page">
            <div class="form ">
              <h4 class="text-center">Staff Login</h4>
            </div>
            <div>
              <p class="text-success text-center">
                <?php echo $this->session->flashdata('register');?>
                
              </p>
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

                      <?php echo form_open('Login/login'); ?>
                      <form method="post">
                        <div class="form-group">
                        <label for="email">Email address</label>
                        <?php  echo form_error('emailL'); ?>
                        <input type="email" name="emailL" class="form-control" value="<?php echo set_value('emailL');?>" id="email" aria-describedby="emailHelp" placeholder="Enter email">


                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <?php  echo form_error('passwordL'); ?>
                          <input type="password" name="passwordL" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="text-center" style="margin: 50px;">
                        <?php echo $this->session->flashdata('forgetPassword');?>
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
