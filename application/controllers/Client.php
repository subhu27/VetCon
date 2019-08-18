<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {


		public function __construct()
    	{
      		parent::__construct();
      		$this->load->model('Farm_model');
      		$this->load->model('Client_model');
       		$this->load->model('User_model');
       		$user_status = $this->session->userdata('is_logged_in');
       		if ($user_status == FALSE) 
       		{
       			redirect('Login');
       		}
    	}

    	public function index()
    	{
    		$this->load->model('Farm_model');
	    	$farmView['query'] = $this->Farm_model->getFarm();
	    	$this->load->view('backend/backend_header_sidebar');
	    	$this->load->view('backend/addClient',$farmView);
	    	$this->load->view('backend/backend_footer');

    	}

    	public function addClient()
    	{
	    	$this->load->library('form_validation');
			$this->form_validation->set_rules('cFName', 'First Name', 'trim|required');
	    	$this->form_validation->set_rules('cLName', 'Last Name', 'trim|required');
	    	$this->form_validation->set_rules('cEmail', 'Email', 'trim|is_unique[vClient.vclient_email]');
	    	$this->form_validation->set_rules('cPhone', 'Phone Number', 'trim|required|integer|max_length[10]|min_length[10]');
	    	if ($this->form_validation->run() === FALSE)
	    	{
	            $this->index();
		     }
		     else{
		     	$this->Client_model->register();
	            $this->index();
	     	

	     }
    	}
}


?>