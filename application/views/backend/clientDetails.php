<div class="container-fluid">

        <div class="row"> 
            <div class="col-8"> 
                <h4 > Details
                </h4>
            </div>
            <div class="col-2">
               <a href="" class="btn btn-success" > Add Batch </a>
            </div> 
            <hr>
        </div>
       


    

<!--Client Details-->    

<div class="container">

<table class="table table-hover">
  <thead>
  
   <th scope="row" style="text-align:center">Client Details</th>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> Name:</th>
      
      <td> 
        <?php 
          echo $client['clientName']; 
        ?>
          
      </td>
    </tr>
    <tr>
      <th scope="row"> Phone:</th>
      
      <td>
        <?php 
          echo $client['clientPhone']; 
        ?>

      </td>
     
    </tr>
    <tr>
      <th scope="row">Email:</th>
      <td>  
        <?php 

          echo $client['clientEmail'];
          
        ?>
      </td>  
    </tr>
    <tr>
      <th scope="row">Address:</th>
      <td>  
        <?php 

          echo $client['clientAddress'];
          
        ?>
      </td>  
    </tr>
    <tr>
      <th scope="row">Description:</th>
      <td>  
        <?php 

          echo $client['clientDescription'];
          
        ?>
      </td>  
    </tr>
  </tbody>
</table>

</div>

<!--Farm Details-->

<div class="container">

<table class="table table-hover">
  <thead>
  
   <th scope="row" style="text-align:center">Farm Details
   </th>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Farm Name:</th>
      
      <td>
        <?php

          echo $farm->vfarm_name;

        ?>

      </td>
    </tr>
    
    <tr>
      <th scope="row">Farm Address:</th>
      <td>  
        <?php
          $address= $farm->vfarm_address;
          $tole=$farm->vfarm_tole;

          echo $address.", ".$tole;

        ?>
      </td>
       
    </tr>

    <tr>
      <th scope="row">Farm Estd:</th>
      <td>  
        <?php

          echo $farm->vfarm_estd;

        ?>
      </td>
       
    </tr>
  </tbody>
  
</table>

</div>

<div class="container">

<table class="table table-hover">
  
<thead>
  
  <th scope="row" style="text-align:center">Batch</th>
  
    <tr>

      <th scope="col">#</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Type</th>
      <th scope="col">Total Count</th>
      <th scope="col">Death</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $i=1;
      foreach ($details as $detail):
    ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      
      <td><?php echo $detail->vbatch_start_date; ?></td>
      <td><?php echo $detail->vbatch_end_date; ?></td>
      <td><?php echo $detail->vbatch_type; ?></td>
      <td><?php echo $detail->vbatch_heads; ?></td>
      <td><?php echo $detail->vbatch_death; ?></td>
      <?php $id = $detail->vbatch_id;?>
      <td><button class="btn btn-warning"> <a href="<?php echo site_url("Batch/editBatch/{$id}");?>" > <?php echo $detail->vbatch_id;?> Edit </a> </button></td>

    </tr>

  <?php endforeach; ?>

  </tbody>
  
</table>

</div>