     <div class="container-fluid">

        <div class="row"> 

            <div class="col-4"> 

                <h3 class="mt-4"> New Farm Details </h3>

            </div>
        </div>


    <?php echo validation_errors(); ?>

    <?php echo form_open('Farm/addFarm'); ?>

<form method="post" action="<?php echo site_url("Farm/addFarm");?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="faname"> Farm Name</label>
      <input type="text" class="form-control" id="faname" placeholder="Farm Name" name="faName" <?php echo set_value('faName');?>>
    </div>
    <div class="form-group col-md-6">
      <label for="faaddress">Address</label>
      <input type="text" class="form-control" id="faaddress" placeholder="Farm Address" name="faAddress" <?php echo set_value('faAddress');?>>
    </div>
  </div>



<div class="form-row">
    <div class="form-group col-md-6">
      <label for="fatole"> Farm Tole </label>
      <input type="text" class="form-control" id="fatole" placeholder="Farm Tole" name="faTole" <?php echo set_value('faTole');?>>
    </div>
    <div class="form-group col-md-6">
      <label for="faEst"> Estd. Date </label>
      <input type="Date" class="form-control" id="faEst" placeholder="Farm Estd." name="faEst" <?php echo set_value('faEst');?>>
    </div>
  </div>


    <a href="<?php echo site_url("Farm/addFarm"); ?>"> <button type="submit" class="btn btn-primary"> Next </button>  </a>

  </div>
  
</form>
        

      
       
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>