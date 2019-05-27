
<?php include('header.php')?>


<div class="container" style="margin-top:20px">

<section class="login" id="loginpg">
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
          <div class="login-page">
            <div class="form ">
              <h4 class="text-center">Staff Login</h4>
               <?php echo form_open('login/index'); ?>

            </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
        <div class="row">
          <div class="container-fluid">
            <div class="col-md-12">
              
                   <span class="col-md-3"></span>
                    
                    
                    
                        <div class="form-group">
                          <label for="email">Email address</label>
                         <!-- <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">-->
                          

                        
                          <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter email','name'=>'uemail','value'=>set_value('uemail')]);?>

                        </div>

                       

                    

                       
                       <?php echo form_error('uemail');  ?>
                      
                     
                    
                      
                       
                    


                        <div class="form-group">
                          <label for="password">Password</label>
                          <!--<input type="password" class="form-control" id="password" placeholder="Password">
                        </div>-->
                             
                               <?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'pass','value'=>set_value('pass')]);?>

                          </div>
                      
                      
                       
                       <?php echo form_error('pass');  ?>
                      
                  


                        <div class="buttons">
                          <!--<button class="btn btn-login" type="submit">Staff - Login</button>-->

                          <?php echo form_submit(['type'=>'submit','class'=>'btn btn-login','value'=>'Staff Login']); ?>





                        <button class="btn btn-default">
                            <a href="<?php echo site_url("register");?>">Staff - Register</a>
                          </button>
                        </div>
                      </form>

                    </div>
                    <span class="col-md-3"></span>

                  </div>
                </div>
              
            </div>

</section>
  
</div>



<?php include('footer.php')?>