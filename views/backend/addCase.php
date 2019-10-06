     <div class="container-fluid">

        <div class="row"> 

            <div class="col-4"> 

                <h3 class="mt-4"> New Cases Details </h3>

            </div>
        </div>


    <?php echo validation_errors(); ?>

    <?php echo form_open('V_Case/addCase'); ?>

<form method="post" action="<?php echo site_url("V_Case/addCase");?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="caDescription"> Description </label>
      <textarea type="textarea" class="form-control" id="description" name="caDescription" <?php echo set_value('caDescription');?>>
      </textarea>
    </div>


    <div class="form-group col-md-6">
      <label for="caSymptoms"> Symptoms </label>
      <textarea type="textarea" class="form-control" id="description" name="caSymptoms" <?php echo set_value('caSymptoms');?>>
      </textarea>
    </div>
  </div>



  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="caDiagnosis"> Diagnosis </label>
      <textarea type="textarea" class="form-control" id="description" name="caDiagnosis" <?php echo set_value('caDiagnosis');?>>
      </textarea>
    </div>


    <div class="form-group col-md-6">
      <label for="caPrescription"> Prescription </label>
      <textarea type="textarea" class="form-control" id="description" name="caPrescription" <?php echo set_value('caPrescription');?>>
      </textarea>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group">
      <div class="form-group col-md-6">
                          <label for="caClient"> Client </label>
                          <select name="caClient" class="dropdown">
                          <option value="<?php ?>"> Select Farm</option>

                            <?php foreach ($query as $client) 
                            {
                                echo '<option value="'.$client->vclient_id.'">'.' * '.$client->vclient_phone.' * '.$client->vclient_fname.' * '.$client->vclient_lname.'</option>';
                            } ?>
                          </select>
    </div>
  </div>



    <div class="form-group col-md-6">

     <div class="form-group">
                          <label for="caDisease"> Disease </label> <br>
                          <select name="caDisease" class="dropdown">
                          <option value="<?php ?>"> Select Disease</option>

                            <?php foreach ($disease as $diseaseView) 
                            {
                                echo '<option value="'.$diseaseView->vdisease_id.'">'.' * '.$diseaseView->vdisease_name.'</option>';
                                var_dump($diseaseView);
                                var_dump($disease);
                            } ?>
                          </select>
    </div>
  </div>
</div>


    <a href="<?php echo site_url("V_Case/addCase"); ?>"> <button type="submit" class="btn btn-primary"> Next </button>  </a>

  </div>
  
</form>
        

      
       
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>