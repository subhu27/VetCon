<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function __construct()
    {
       	parent::__construct();
       	$this->load->model('User_model');
        $this->load->library('form_validation');
       	$user_status = $this->session->userdata('is_logged_in');
       	if ($user_status == FALSE) {
       		redirect('Login');
       	}
    }


//reterieves the users from the database and passes to the 'users' view

    public function index(){

    	$result_rows['query']= $this->User_model->display_users();
    	$this->load->view('backend/backend_header_sidebar');
    	$this->load->view('backend/users', $result_rows);
    	$this->load->view('backend/backend_footer');

    	
    }

    public function edit_user_handler($vuser_email){

    	$this->load->view('backend/backend_header_sidebar');
    	/*$this->load->view('backend/edit_user');*/
    	$this->load->view('backend/backend_footer');

    	 $this->load->model('User_model');
         $edit=$this->User_model->find_user($vuser_email);
         $this->load->view('backend/edit_user',['user'=>$edit]);
    }
    	
    public function update_user($email)
    {
        $updateValidation = $this->userUpdateValidate();
        if ($updateValidation===TRUE) {
    	   $this->load->model('User_model');
    	   $result = $this->User_model->update_user_data($email);
    	   if ($result===TRUE) {
                $message = $email.","." this user is edited successfully";
                $this->session->set_flashdata('userUpdate',$message);
                return redirect('Users');
            }
        }
    	else{
            return $this->edit_user_handler($email);
    		

    	 
    	}
    }


    public function userUpdateValidate(){
        $this->form_validation->set_rules('firstName', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('post', 'Post', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|integer|max_length[10]|min_length[10]');
        $this->form_validation->set_rules('access', 'Access', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('tole', 'Tole', 'trim|required');
        

        if ($this->form_validation->run()===TRUE) {
            return TRUE;
        }
        else{
           return FALSE;
        }

    }




    public function delete_user_handler($email){

    	//$this->load->model('')
    	$delete = $this->User_model->delete_user($email);

    }


}







//end of the class 