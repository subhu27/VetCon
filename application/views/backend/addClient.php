     

     <!--<head>
<title>testing</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
</head>-->



 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://twitter.github.io/typeahead.js/css/examples.css" /> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
 <script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script>
 <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>-->




 <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> -->

 

     <div class="container-fluid">

        <div class="row"> 

            <div class="col-4"> 

                <h3 class="mt-4"> New Client Details </h3>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/chosen.css')?>"> 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/prism.css')?>">   

<script src="<?php echo base_url('js/jquery-3.2.1.min.js')?>">
  </script>
  <script src="<?php echo base_url('js/chosen.proto.min.js')?>">
  </script>
  <script src="<?php echo base_url('js/chosen.jquery.min.js')?>">
  </script>
  <script src="<?php echo base_url('js/site.js')?>">
  </script>

            </div>
        </div>


    

    

<form method="post" action="<?php echo site_url("Client/addClient");?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname"> First Name</label>
      <input type="text" class="form-control" id="fname" placeholder="First Name" name="cFName" <?php echo set_value('cFName'); ?>>
      <?php echo form_error('cFName'); ?>
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" id="lname" placeholder="Last Name" name="cLName" <?php echo set_value('cLName');?>>
      <?php echo form_error('cLName'); ?>
    </div>
  </div>



<div class="form-row">
    <div class="form-group col-md-6">
      <label for="email"> Email </label>
      <input type="email" class="form-control" id="fname" placeholder="Email" name="cEmail" <?php echo set_value('cEmail');?>>
        <?php echo form_error('cEmail'); ?>
    </div>
    <div class="form-group col-md-6">
      <label for="phone"> Phone </label>
      <input type="tel" class="form-control" id="phone" placeholder="Phone" name="cPhone" pattern="[0-9]{10}" <?php echo set_value('cPhone');?>>
      <?php echo form_error('cPhone'); ?>
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

    

     <div class="col-md-4" style="margin: 0 auto;">
      <!--<label class="control-label">Select farm</label>
      <input type="text" name="title" id="title" placeholder="Farm" class="form-control">-->
       <!--<div id="prefetch">
   <input type="text" name="search_box" id="search_box" class="form-control input-lg typeahead" placeholder="Search Here" />
  </div>-->


 
 </div id="container">
 <?php echo form_open('Client/ajaxPro','',$hidden=array()); ?>
  <div class="label" style="display: block;clear: both">

    <?php echo form_label('choose farm', 'farm', $attribute= array());?>

  </div>    
 
 

   <div class="input" style="display: block;clear: both">

     
     <?php $options = array("" => "") ?>

     <?php foreach($farms as $key => $value): ?>
     <?php $options[$value->vfarm_id] = $value->vfarm_name; ?>
      
     
<!--end foreach here-->

<?php  endforeach?>

     <?php echo form_dropdown('farm',$options, set_value('farm'),$attributes=array());?>




    
  </div>
      
    </div>

    <a href=""> <button type="submit" class="btn btn-primary"> Next </button>  </a>

  </div>
  
</form>
 <?php echo form_close(); ?>

<!-- ajax script for autocomplete-->

<script type="text/javascript">
    $('input.typeahead').typeahead({
        source:  function (query, process) {
       return $.get('/ajaxpro', { query: query }, function (data) {
                console.log(data);
                data = $.parseJSON(data);
                return process(data);
           });
        }
    });
</script>



    <!--  <script>
$(document).ready(function(){
  var sample_data = new Bloodhound({
   datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
   queryTokenizer: Bloodhound.tokenizers.whitespace,
   prefetch:'<?php /*echo base_url(); ?>autocomplete/fetch',
   remote:{
    url:'<?php echo base_url();*/ ?>autocomplete/fetch/%QUERY',
    wildcard:'%QUERY'
   }
  });
  

  $('#prefetch .typeahead').typeahead(null, {
   name: 'sample_data',
   display: 'name',
   source:sample_data,
   limit:10,
   templates:{
    suggestion:Handlebars.compile('<div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
   }
  });
});
</script>-->

      
       
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>