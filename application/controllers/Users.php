<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function __construct()
    {
       	parent::__construct();
       	$this->load->model('User_model');
    }



    public function index(){

    	$result_rows['query']= $this->User_model->display_users();

    		//var_dump($result_rows);

    /*	foreach ($result_rows->result() as $row){
    		$rows_count = $result_rows->num_rows();
        	$fname = $row->vuser_fname;
        	$lname = $row->vuser_lname;
        	$name = $fname." ".$lname;
        	$email = $row->vuser_email;
        	$access = $row->vuser_access;
        	$phone = $row->vuser_phone;
        	$users_details=array('name'=>$name, 'email'=>$email, 'access'=>$access, 'phone'=>$phone);
        	echo "<br> <br>";
        	echo $name."<br>";
        	echo $email."<br>";
        	echo $access."<br>";
        	echo $phone."<br>";
        	
    	}

    	echo $rows_count;
        //echo $row->body;
    	//foreach ($return->result() as $value) {
    	//	echo $value->vuser_fname;
    	//}
    	*/
    	//var_dump($return);
    	//$data['a']="hello word";
    	$this->load->view('backend/backend_header_sidebar');
    	$this->load->view('backend/users', $result_rows);
    	$this->load->view('backend/backend_footer');
    	//print_r($result);

    	
    }


/*edit user details */
    public function edituser($vuser_email){

    
                      $this->load->view('backend/backend_header_sidebar');
                      $this->load->view('backend/backend_footer');
                      $this->load->model('User_model');
                      $edit=$this->User_model->find_user($vuser_email);

                      $this->load->view('edit_user',['user'=>$edit]);

    }


/*update users */    	


public function updateuser(){

     
        $this->load->model('User_model');
        

        if($this->User_model->update_user()){


            
        }   else {


        }




    }





//end of the class 

}