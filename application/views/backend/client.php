
      <div class="container-fluid">
        <h1 class="mt-4"> Clients </h1>
       
      </div>


      <div>   

      	 <table class="table table-stripped">
      	<thead>
      		<tr>
            
		      	<th scope="col">#</th>
		      	<th scope="col">Name</th>
		      	<th scope="col">Phone</th>
		      	<th scope="col">Address</th>
            <th scope="col">Farm Name</th>
	      	</tr>
      	</thead>

      	
      	<?php $i=1; foreach($query as $row): ?>
      	<tr>
          <?php 
            $name = $row->vclient_fname." ".$row->vclient_lname;
            $address = $row->vclient_address.", ".$row->vclient_tole;

             ?>
      		<th scope="row"><?php echo $i; ?></th>
      		<td><?php echo $name;?></td>
      		<td><?php echo $row->vclient_phone;?></td>
          <td><?php echo $address;?></td>
      		<td><?php echo $row->vfarm_name;
           $i=$i+1;?> </td>
      		<td> 
      
      				<a class="btn btn-success" href="<?php echo ("editClient/{$row->vclient_id}") ?>" > Edit 
      				</a> 
      			 
      			
      				<a class="btn btn-info" href="<?php echo ("viewClient/{$row->vclient_id}") ?>" > View Details
      				</a>  <br> </td>  


      	</tr>
	    <?php endforeach;?>


      </table>


      </div>
     
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->



