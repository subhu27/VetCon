
      <div class="container-fluid">
        <h1 class="mt-4"> Users</h1>
        <p class="text-success text-center">
                <?php echo $this->session->flashdata('userUpdate');?>
                
              </p>

       
      </div>


      <div>   

      	 <table class="table table-stripped">
      	<thead>
      		<tr>
		      	<th scope="col">#</th>
		      	<th scope="col">Name</th>
		      	<th scope="col">Email</th>
		      	<th scope="col">Phone</th>
		      	<th scope="col">Access</th>
		      	<th scope="col">Action</th>
	      	</tr>
      	</thead>
      	
      	<?php $i=1; foreach($query as $row): ?>
      	<tr>
      		<th scope="row"><?php echo $i; ?></th>
      		<td><?php $userFname = $row->vuser_fname; $userLname = $row->vuser_lname; $name = $userFname." ".$userLname; echo $name;?></td>
      		<td><?php echo $row->vuser_email;?></td>
      		<td><?php echo $row->vuser_phone;?></td>
      		<td><?php echo $row->vuser_access; $i=$i+1;?> </td>
      		<td> 
      			<button class="btn btn-success">
      				<a href="<?php echo ("Users/edit_user_handler/{$row->vuser_email}") ?>" > Edit 
      				</a> 
      			</button>  
      			<button class="btn btn-danger" onclick="confirm('Are you sure you want to delete ?')"> 
      				<a href="<?php echo ("Users/delete_user_handler/{$row->vuser_email}") ?>" > Delete 
      				</a> </button> <br> </td>  


      	</tr>
	    <?php endforeach;?>


      </table>


      </div>
     
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->



