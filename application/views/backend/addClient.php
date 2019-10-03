     <div class="container-fluid">

        <div class="row"> 

            <div class="col-4"> 

                <h3 class="mt-4"> New Client Details </h3>

            </div>
        </div>


    <?php echo validation_errors(); ?>

    <?php echo form_open('Client/addClient'); ?>

<form method="post" action="<?php echo site_url("Client/addClient");?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname"> First Name</label>
      <input type="text" class="form-control" id="fname" placeholder="First Name" name="cFName" <?php echo set_value('cFName');?>>
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" id="lname" placeholder="Last Name" name="cLName" <?php echo set_value('cLName');?>>
    </div>
  </div>



<div class="form-row">
    <div class="form-group col-md-6">
      <label for="email"> Email </label>
      <input type="email" class="form-control" id="fname" placeholder="Email" name="cEmail" <?php echo set_value('cEmail');?>>
    </div>
    <div class="form-group col-md-6">
      <label for="phone"> Phone </label>
      <input type="tel" class="form-control" id="phone" placeholder="Phone" name="cPhone" pattern="[0-9]{10}" <?php echo set_value('cPhone');?>>
    </div>
  </div>



  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="address"> Address </label>
      <input type="text" class="form-control" id="address" placeholder="Address" name="cAddress" <?php echo set_value('cAddress');?>>
    </div>
    <div class="form-group col-md-6">
      <label for="phone"> Tole </label>
      <input type="text" class="form-control" id="tole" placeholder="Tole" name="cTole" <?php echo set_value('cTole');?>>
    </div>
  </div>
    <div class="form-group col-md-12">
      <label for="description">Description</label>
      <textarea type="textarea" class="form-control" id="description" name="cDescription" <?php echo set_value('cDescription');?>>

      </textarea>


    </div>

    <div class="form-group col-md-12">
      <div class="search-container">
          <input type="text" placeholder="Search Farm" name="searchFarm" id="searchFarm"  />
          
      </div>


    </div>

    <div id="result"> Fuck you man </div>


    <div class="form-group">
                          <label for="post"> Farm </label>
                          <select name="cFarm" class="dropdown">
                            <option value="<?php ?>"> Select Farm</option>

                            <?php foreach ($query as $farm) 
                            {
                                echo '<option value="'.$farm->vfarm_id.'">'.' * '.$farm->vfarm_name.' * '.$farm->vfarm_address.' * '.$farm->vfarm_tole.'</option>';
                            } ?>
                          </select>
    </div>

    <a href="<?php echo site_url("Client/displayClients"); ?>"> <button type="submit" class="btn btn-warning"> Cancel </button>  </a>
    <a href="<?php echo site_url("Client/addClient"); ?>"> <button type="submit" class="btn btn-success"> Save </button>  </a>

  </div>
  
</form>

        

      
       
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>