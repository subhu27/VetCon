<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disease extends CI_Controller {


		public function __construct()
    	{
      		parent::__construct();
      		$this->load->model('Disease_model');
       		$this->load->model('User_model');
       		$user_status = $this->session->userdata('is_logged_in');
       		if ($user_status == FALSE) 
       		{
       			redirect('Login');
       		}
    	}

    	public function index()
    	{
	    	$this->load->view('backend/backend_header_sidebar');
	    	$this->load->view('backend/addDisease');
	    	$this->load->view('backend/backend_footer');

    	}

    	public function addDisease()
    	{
	    	$this->load->library('form_validation');
			$this->form_validation->set_rules('dName', 'Disease Name', 'trim|required');
	    	$this->form_validation->set_rules('dDescription', 'dDescription', 'trim|required');
	    	$this->form_validation->set_rules('dSymptoms', 'Disease Symptoms', 'trim|required');

	    	if ($this->form_validation->run() === FALSE)
	    	{
	            $this->index();
		     }
		     else{
		     	$this->Disease_model->register();
	            $this->index();
	             }
    	}
}


?>