

<section class="login" id="loginpg">
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
          <div class="login-page">
            <div class="form ">
              <h4 class="text-center">Forgot Password</h4>
            </div>
            <div>
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

                      <?php echo form_open('Login/sendEmail'); ?>
                      <form method="post">
                        <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="emailL" class="form-control"  id="email" aria-describedby="emailHelp" placeholder="Enter email">


                        </div>

                        <p> An email will be sent to you, to reset the password.<br> 
                          Please check your email.<br> 
                        Sometimes the email may end up in the spam folder as well.</p>
                        
                        <div class="buttons">
                          <button class="btn btn-login" type="submit">Send Email</button>
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
