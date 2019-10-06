<div class="container-fluid">

        <div class="row"> 
            <div class="col-4"> 
                <h3 class="mt-4"> Show Message Details  
             </h3>
            </div>
        </div>


    

<!--Client Details-->    

<div class="container">

<table class="table table-hover">
 
  <tbody>
  
    <tr>
      <th scope="row">Name:</th>
      
      <td></td>
    </tr>
    <tr>
      <th scope="row">Phone:</th>
      
      <td></td>
     
    </tr>
    <tr>
      <th scope="row">Subject:</th>
      <td>  </td>
       
    </tr>


    <tr>
      <th scope="row">Message:</th>
      <td>  </td>
       
    </tr>

    <tr>
     
      <td>  </td>
       
    </tr>

    <tr>
      
     <th scope="row">Action Taken:</th>
     <td>
    <textarea type="text" name="desc" class="form-control" id="address"  placeholder="Describe User">
                            
                          </textarea>

      </td>                    

    </tr>  
<tr>

  
     <th scope="row">Assigned Doctors:</th>

     <td>
                          <select name="post" class="dropdown">
                            <?php echo form_error('post'); ?>
                            <option value="#">Assigned Doctors</option>
                            <option>Admin</option>
                            <option>Doctor</option>
                            <option>Super Admin</option>
                          </select>  

     </td>                     


 </tr>   

 <tr>
<td>
  <a href="#" class="btn btn-primary">Cancel</a>
                          <a href="#" class="btn btn-success">Save</a>

                        </td>


  </tr>                                                                

  </tbody>
  </table>

</div>



