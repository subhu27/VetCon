     <div class="container-fluid">

        <div class="row"> 

            <div class="col-4"> 

                <h3 class="mt-4"> Edit Disease Details for <?php echo $disease->vdisease_name;?> </h3>

            </div>
        </div>


    <?php echo validation_errors(); ?>


    <?php //$disease_id = $disease->vdisease_id; 
    echo form_open("Disease/updateDisease/{$disease->vdisease_id}"); ?>

    <?php //var_dump($disease); ?>


<form method="post">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="fname"> Disease </label>
      <input type="text" class="form-control" id="dname" placeholder="Name of the disease" name="dName" value="<?php echo set_value('dName',$disease->vdisease_name);?>" >
    </div>
  </div>



  <div class="form-row">




    <div class="form-group col-md-6">
      <label for="dSymptoms">Symptoms</label>
      <textarea type="textarea" class="form-control" id="dSymptoms" name="dSymptoms" >

        <?php echo set_value('dSymptoms',$disease->vdisease_symptoms);?>


      </textarea>


    </div>


     <div class="form-group col-md-6">
      <label for="dDescription">Description</label>
      <textarea type="textarea" class="form-control" id="ddescription" name="dDescription" >
        <?php echo set_value('dDescription',$disease->vdisease_description);?>
      </textarea>


    </div>

      <button type="submit" class="btn btn-primary"> Update </button>
      <? echo form_close(); ?>

   
  </div>
  
</form>
        

      
       
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>