
      <div class="container-fluid">
        <h1 class="mt-4"> Cases</h1>
       
      </div>


      <div>   

      	 <table class="table table-stripped">
      	<thead>
      		<tr>
		      	<th scope="col">#</th>
		      	<th scope="col">Name</th>
		      	<th scope="col">Symptoms</th>
		      	<th scope="col">Description</th>
	      	</tr>
      	</thead>
      	
      	<?php $i=1; foreach($query as $row): ?>
      	<tr>
      		<th scope="row"><?php echo $i; ?></th>
      		<td><?php echo $row->vdisease_name;?></td>
      		<td><?php echo $row->vdisease_symptoms;?></td>
      		<td><?php echo $row->vdisease_description; $i=$i+1;?> </td>
      		<td> 
      			<button class="btn btn-success">
      				<a href="<?php echo ("editDisease/{$row->vdisease_id}") ?>" > Edit 
      				</a> 
      			</button>  
      			<button class="btn btn-danger"> 
      				<a href="<?php echo ("deleteDisease/{$row->vdisease_id}") ?>" > Delete 
      				</a> </button> <br> </td>  


      	</tr>
	    <?php endforeach;?>


      </table>


      </div>
     
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->



