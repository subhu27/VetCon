<section class="register" id="registerpg">
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
          <div class="register-page">
            <div class="form ">
              <h4 class="text-center">Edit Details for <?php 
              echo $user->vuser_email;  ?></h4>
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
                      <div class="col-md-6">
                      <?php //$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');?>

                      <?php echo form_open("Users/update_user/{$user->vuser_email}"); ?>
                      <form method="post">
                        <div class="form-group name">

<!-- -------------------------------------------First Name field----------------------------------->

                           <div class="form-group">
                          <label for="firstName"> First Name </label>
                           <?php //echo form_error('firstName'); ?>
                          <input type="text" name="firstName" class="form-control" value="<?php //echo set_value('firstName',$user->vuser_fname);?>" id="firstName" placeholder="Enter First Name">
                          <br>


<!-- -------------------------------------------Last Name field----------------------------------->

                         <div class="form-group">
                          <label for="lastName"> Last Name </label>
                           <?php //echo form_error('lastName'); ?>
                          <input type="text" name="lastName" class="form-control" value="<?php echo set_value('lastName',$user->vuser_lname);?>" id="lastName" aria-describedby="emailHelp" placeholder="Enter First Name">
                          <br>




                          <div class="form-group">
                          <label for="phone"> Phone </label>
                          <?php //echo form_error('phone'); ?>
                          <input type="tel" name="phone" class="form-control" value="<?php echo set_value('phone',$user->vuser_phone);?>" id="phone" aria-describedby="emailHelp" placeholder="Enter Phone Number" pattern="[0-9]{10}" >
                          <br>
                         
<!---------------------------------------------Post of the user---------------------------------------->

                        <div class="form-group">
                          <label for="post">Post</label>
                          <select name="post" class="dropdown">
                            <?php //echo form_error('post'); ?>
                            <option value="<?php echo set_value('post',$user->vuser_post);?>">Choose the post</option>
                            <option>Admin</option>
                            <option>Doctor</option>
                            <option>Super Admin</option>
                          </select>
                        </div>
                        <br>
                          
<!-- ---------------------------Access status to the user ------------------------------------------------->
                        <div class="form-group">
                          <label for="access">Access</label>
                          <?php //echo form_error('access'); ?>
                          <select name="access" class="dropdown">
                            <option value="<?php echo set_value('access',$user->vuser_access);?>">Set Access</option>
                            <option >0</option>
                            <option>1</option>
                          </select>
                        </div>
                        <br>

<!--------------------------------Address of the user------------------------------------- -->



                        </div>
                        <div class="form-group email">
                          <label for="address">Address</label>
                           <?php //echo form_error('address'); ?>
                          <input type="text" name="address" class="form-control" value="<?php echo set_value('address',$user->vuser_address);?>" id="address" placeholder="Enter Address">
                          <br>



                            </div>

<!------------------------------------ User Tole ---------->
                        <div class="form-group email">
                          <label for="address">Tole</label>
                           <?php //echo form_error('tole'); ?>
                          <input type="text" name="tole" class="form-control" value="<?php echo set_value('tole',$user->vsuer_tole);?>" id="address" placeholder="Enter Tole">
                          <br>


<!------------------------------------ User Description ---------->
                        <div class="form-group email">
                          <label for="description">Describe User</label>
                           <?php //echo validation_errors('email'); ?>
                          <textarea type="text" name="desc" class="form-control" id="address"  placeholder="Describe User">
                            <?php echo set_value('desc',$user->vuser_description);?>
                          </textarea>
                          <br>
                                                  
                          
<!-------------------------------------------- Buttons for registration and login    -- >
                        </div>
                        <!-- Register Button-->
                        <div class="buttons">
                          <button class="btn btn-primary"  type="submit">Cancel</button>
                          <button class="btn btn-success"  type="submit">Update</button>
                        <!-- Login Button-->
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
  <hr>
