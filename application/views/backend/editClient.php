     <div class="container-fluid">

        <div class="row"> 

            <div class="col-4"> 

                <h3 class="mt-4"> Edit Client Details for <?php 
                $clients= $client->row();
                echo $clients->vclient_fname;?> </h3>

            </div>
        </div>


    <?php $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');?>

    <?php echo form_open("Client/updateClient/{$clients->vclient_id}"); 
     ?>

<form method="post" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname"> First Name</label>
      <?php echo form_error('cFName'); ?>
      <input type="text" class="form-control" id="fname" placeholder="First Name" name="cFName" value="<?php echo set_value('cFName',$clients->vclient_fname);?>" >
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last Name</label>
      <?php echo form_error('cLName'); ?>
      <input type="text" class="form-control" id="lname" placeholder="Last Name" name="cLName" value="<?php echo set_value('cLName',$clients->vclient_lname);?>" >
    </div>
  </div>



<div class="form-row">
    <div class="form-group col-md-6">
      <label for="email"> Email </label>
      <?php echo form_error('cEmail'); ?>
      <input type="email" class="form-control" id="fname" placeholder="Email" name="cEmail" value="<?php echo set_value('cEmail',$clients->vclient_email);?>">
    </div>
    <div class="form-group col-md-6">
      <label for="phone"> Phone </label>
      <?php echo form_error('cPhone'); ?>
      <input type="tel" class="form-control" id="phone" placeholder="Phone" name="cPhone" pattern="[0-9]{10}" value="<?php echo set_value('cPhone',$clients->vclient_phone);?>">
    </div>
  </div>



  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="address"> Address </label>
      <?php echo form_error('cAddress'); ?>
      <input type="text" class="form-control" id="address" placeholder="Address" name="cAddress" value="<?php echo set_value('cAddress',$clients->vclient_address);?>">
    </div>
    <?php echo form_error('cTole'); ?>
    <div class="form-group col-md-6">
      <label for="phone"> Tole </label>
      <input type="text" class="form-control" id="tole" placeholder="Tole" name="cTole" value="<?php echo set_value('cTole',$clients->vclient_tole);?>">
    </div>
  </div>
    <div class="form-group col-md-12">
      <label for="description">Description</label>
      <textarea type="textarea" class="form-control" id="description" name="cDescription" > <?php echo set_value('cDescription',$clients->vclient_description);?>

      </textarea>


    </div>

    <div class="form-group">
                          <label for="post"> Farm **</label>
                          <?php echo form_error('cFarm'); ?>
                          <select name="cFarm" class="dropdown">
                            <option value="<?php ?>"> Select Farm</option>

                            <?php foreach ($farmView as $farm) 
                            {
                                echo '<option value="'.$farm->vfarm_id.'">'.' * '.$farm->vfarm_name.' * '.$farm->vfarm_address.' * '.$farm->vfarm_tole.'</option>';
                            } ?>
                          </select>
    </div>


    <i>** Please add farm if no associated farm is found in the dropdown with the client. </i> <br>

    <div class="row">

    <button type="submit" class="btn btn-primary"> Update </button>


    </div>

  </div>
  
</form>
        

      
       
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>