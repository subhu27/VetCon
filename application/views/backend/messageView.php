
      <div class="container-fluid">
        <h1 class="mt-4"> Message Sender Details</h1>
       
      </div>


      <div>   

      	 <table class="table table-stripped">
      	<thead>
      		<tr>
		      	<th scope="col">#</th>
		      	<th scope="col">Name</th>
		      	<th scope="col">Phone</th>
		      	<th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col">Date & Time</th>
            <th scope="col">Read</th>
	      	</tr>
      	</thead>
      	
      	<?php $i=1; foreach($query as $row): ?>
      	<tr>
      		<th scope="row"><?php echo $i; ?></th>
      		<td><?php echo $row->vmessage_name;?></td>
      		<td><?php echo $row->vmessage_phone;?></td>
          <td><?php echo $row->vmessage_subject;?></td>
          <td><?php echo $row->vmessage_message;?></td>
          <td><?php echo $row->vmessage_timestamp;?></td>

      		<td><?php echo $row->vmessage_read; 

          $i=$i+1;?><a href="Message/displayMessage/{$row->vmessage_id}" class="btn btn-success">Read</a> </td>
      		
      			


      	</tr>
	    <?php endforeach;?>


      </table>


      </div>
     
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->



