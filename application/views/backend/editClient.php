     <div class="container-fluid">

        <div class="row"> 

            <div class="col-4"> 

                <h3 class="mt-4"> Edit Client Details for <?php 
                $query= $result->row();
                echo $query->vclient_fname;?> </h3>

            </div>
        </div>


    <?php echo validation_errors(); ?>

    <?php echo form_open("Client/updateClient/{$query->vclient_id}"); 
     ?>

<form method="post" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname"> First Name</label>
      <input type="text" class="form-control" id="fname" placeholder="First Name" name="cFName" value="<?php echo set_value('cFName',$query->vclient_fname);?>" >
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" id="lname" placeholder="Last Name" name="cLName" value="<?php echo set_value('cLName',$query->vclient_lname);?>" >
    </div>
  </div>



<div class="form-row">
    <div class="form-group col-md-6">
      <label for="email"> Email </label>
      <input type="email" class="form-control" id="fname" placeholder="Email" name="cEmail" value="<?php echo set_value('cEmail',$query->vclient_email);?>">
    </div>
    <div class="form-group col-md-6">
      <label for="phone"> Phone </label>
      <input type="tel" class="form-control" id="phone" placeholder="Phone" name="cPhone" pattern="[0-9]{10}" value="<?php echo set_value('cPhone',$query->vclient_phone);?>">
    </div>
  </div>



  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="address"> Address </label>
      <input type="text" class="form-control" id="address" placeholder="Address" name="cAddress" value="<?php echo set_value('cAddress',$query->vclient_address);?>">
    </div>
    <div class="form-group col-md-6">
      <label for="phone"> Tole </label>
      <input type="text" class="form-control" id="tole" placeholder="Tole" name="cTole" value="<?php echo set_value('cTole',$query->vclient_tole);?>">
    </div>
  </div>
    <div class="form-group col-md-12">
      <label for="description">Description</label>
      <textarea type="textarea" class="form-control" id="description" name="cDescription" > <?php echo set_value('cDescription',$query->vclient_description);?>

      </textarea>


    </div>

    <div class="form-group">
                          <label for="post"> Farm **</label>
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