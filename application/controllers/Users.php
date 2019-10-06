<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
    {
        //$params=$hello;
       	parent::__construct();
       	$this->load->model('User_model');
        $this->load->library('form_validation');
       	$userCheck = $this->user_handler->isAnyUser();
        if ($userCheck === FALSE ) {
            $this->user_handler->index();
        }
    }


//reterieves the users from the database and passes to the 'users' view

    public function index(){

        $userCheck = $this->user_handler->isSuperAdmin();
        $userEmail = $this->session->userdata('userEmail');
        /*
        *Only allows 'Super Admin' users to run the else statement otherwise redirects it to the respective dashboard view
        this is essentail for using the code.
        *
        */
        if ($userCheck === FALSE ) {
            $this->user_handler->index();
        }
        else{
            $result_rows['query']= $this->User_model->display_users($userEmail);
            $this->load->view('backend/backend_header_sidebar');
            $this->load->view('backend/users', $result_rows);
            $this->load->view('backend/backend_footer');
        }

    	
    }

    public function edit_user_handler($vuser_email){
        $isSuperAdmin = $this->user_handler->isSuperAdmin();
        if ($isSuperAdmin===TRUE) {
            $edit=$this->User_model->find_user($vuser_email);
            $this->editSuperAdminUser($edit);
        }
        else{
            $vuser_email = $this->session->userdata('userEmail');
            $edit=$this->User_model->find_user($vuser_email);
            $this->editAdminOrDoctorUser($edit);
        }
         
    }

    public function editSuperAdminUser($edit){
        if ($this->user_handler->isSuperAdmin() === TRUE) {
            $this->load->view('backend/backend_header_sidebar');
            $this->load->view('backend/backend_footer');
            $this->load->view('backend/edit_user',['user'=>$edit]);
        }
        else{
            $this->user_handler->index();
        }
    }

    public function editAdminOrDoctorUser($edit){
        $isAdminOrDoctor = $this->user_handler->isAdminOrDoctorUser();
        if ($isAdminOrDoctor === TRUE) {
            $this->load->view('backend/admin/adminDashboardHeaderSidebar');
            $this->load->view('backend/admin/adminFooter');
            $this->load->view('backend/admin/editAdminUser',['user'=>$edit]);
        }
        else{
            $this->user_handler->index();
        }
    }



    	
    public function update_user($email)
    {
        $updateValidation = $this->userUpdateValidate();
        if ($updateValidation===TRUE) {
    	   $this->load->model('User_model');
    	   $result = $this->User_model->update_user_data($email);
    	   if ($result===TRUE) {
                $message = $email.","." is updated successfully";
                $this->session->set_flashdata('userUpdate',$message);
                return redirect('Users');
            }
        }
    	else{
            return $this->edit_user_handler($email);
    	}
    }


    private function userUpdateValidate(){
        $this->form_validation->set_rules('firstName', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'trim|numeric|required|integer|max_length[10]|min_length[10]');
        if($this->user_handler->isSuperAdmin()===TRUE){
            $this->form_validation->set_rules('post', 'Post', 'trim|required');
            $this->form_validation->set_rules('access', 'Access', 'trim|required');
        }
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

    public function validateDeletion($email){
        
    }


}







//end of the class 