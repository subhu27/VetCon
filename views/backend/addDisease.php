     <div class="container-fluid">

        <div class="row"> 

            <div class="col-4"> 

                <h3 class="mt-4"> New Disease Details </h3>

            </div>
        </div>


    <?php echo validation_errors(); ?>

    <?php echo form_open('Disease/addDisease'); ?>



<form method="post" action="<?php echo site_url("Disease/addDisease");?>">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="fname"> Disease </label>
      <input type="text" class="form-control" id="dname" placeholder="Name of the disease" name="dName" value="<?php echo set_value('dName');?>" >
    </div>
  </div>



  <div class="form-row">




    <div class="form-group col-md-6">
      <label for="dSymptoms">Symptoms</label>
      <textarea type="textarea" class="form-control" id="dSymptoms" name="dSymptoms" value="<?php echo set_value('dSymptoms')?>">




      </textarea>


    </div>


     <div class="form-group col-md-6">
      <label for="dDescription">Description</label>
      <textarea type="textarea" class="form-control" id="ddescription" name="dDescription" value="<?php echo set_value('dDescription');?>" >

      </textarea>


    </div>

     <a href="<?php echo site_url("Disease/addDisease"); ?>"> <button type="submit" class="btn btn-primary"> Next </button>  </a>

   
  </div>
  
</form>
        

      
       
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>