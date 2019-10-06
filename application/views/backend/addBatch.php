     <div class="container-fluid">

        <div class="row"> 

            <div class="col-4"> 

                <h3 class="mt-4"> New Batch Details </h3>

            </div>
        </div>


    <?php echo validation_errors(); ?>

    <?php echo form_open('Batch/addBatch'); ?>

<form method="post" action="<?php echo site_url("Batch/addBatch");?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname"> Batch Start Date</label>
      <input type="Date" class="form-control" id="bSDate" placeholder="Batch Start Date" name="bSDate" <?php echo set_value('bSDate');?>>
    </div>
    <div class="form-group col-md-6">
      <label for="bEDate">Batch End Date</label>
      <input type="Date" class="form-control" id="bEDate" placeholder="Batch End Date" name="bEDate" <?php echo set_value('bEDate');?>>
    </div>
  </div>

<div class="form-row">
<div class="form-group col-md-4">
  <label for="bType">Batch Type</label> <br>
  <select name="bType" class="dropdown">
    <option> None </option>
    <option>Broiler</option>
    <option>Layers</option>
    <option>Local</option>
    <option>Parent</option>
  </select>
</div>


    <div class="form-row">
      <div class="form-group col-md-4">
      <label for="bHeads"> Head Counts </label>
      <input type="number" class="form-control" id="bHeads" placeholder="Batch Head Counts" name="bHeads" min="1" <?php echo set_value('bHeads');?> >
    </div>

    <div class="form-group col-md-4">
      <label for="bFlock"> Flocks </label>
      <input type="number" class="form-control" id="bFlock" placeholder="Batch Flocks" name="bFlock" min="1" <?php echo set_value('bFlock');?> >
    </div>
  
    <div class="form-group col-md-4">
      <label for="bDeath"> Death In Flock </label>
      <input type="number" class="form-control" id="bDeath" placeholder="Death in flock" name="bDeath" min="0" <?php echo set_value('bDeath');?> >
    </div>
    
  </div>

     <div class="form-group col-md-8">
                          <label for="post"> Batch Farm </label> <br>
                          <select name="bFarm" class="dropdown">
                            <option value="<?php ?>"> Select Farm</option>

                           <?php foreach ($query as $farm) 
                            {
                                echo '<option value="'.$farm->vfarm_id.'">'.' * '.$farm->vfarm_name.' * '.$farm->vfarm_address.' * '.$farm->vfarm_tole.'</option>';
                            } ?>
                          </select>
                        </div>
  </div>


    <a href="<?php echo site_url("Batch/addBatch"); ?>"> <button type="submit" class="btn btn-primary"> Next </button>  </a>

  </div>
  
</form>
        

      
       
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>