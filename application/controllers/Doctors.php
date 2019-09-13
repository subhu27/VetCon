<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {


	public function __construct()
    {
       	parent::__construct();
       	$this->load->model('User_model');
       	$userCheck = $this->user_handler->isSuperAdmin();
        if ($userCheck === FALSE ) {
          $this->user_handler->index();
        }
    }

	
	public function index()
	{

		$result_rows['query']= $this->User_model->display_doctors();
		$this->load->view('backend/backend_header_sidebar');
		$this->load->view('backend/doctors', $result_rows);
		$this->load->view('backend/backend_footer');
	}


	public function editDoctor()
	{
		$this->load->view('backend/backend_header_sidebar');
    	/*$this->load->view('backend/edit_user');*/
    	$this->load->view('backend/backend_footer');

    	 $this->load->model('User_model');
         $edit=$this->User_model->find_user($vuser_email);
         $controllerClass = "Doctors";
         $this->load->view('backend/edit_user',['user'=>$edit]);

	}


}

?>