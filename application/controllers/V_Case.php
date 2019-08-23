<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V_Case extends CI_Controller {


		public function __construct()
    	{
      		parent::__construct();
      		$this->load->model('Client_model');
       		$this->load->model('User_model');
       		$this->load->model('Case_model');
       		$user_status = $this->session->userdata('is_logged_in');
       		if ($user_status == FALSE) 
       		{
       			redirect('Login');
       		}
    	}

    	public function index()
    	{
	    	$clientView['query'] = $this->Client_model->getClient();
	    	$this->load->view('backend/backend_header_sidebar');
	    	$this->load->view('backend/addCase',$clientView);
	    	$this->load->view('backend/backend_footer');


    	}

    	public function addCase()
    	{
	    	$this->load->library('form_validation');
			$this->form_validation->set_rules('caDescription', 'Description', 'trim|required');
	    	$this->form_validation->set_rules('caSymptoms', 'Symptoms', 'trim');
	    	$this->form_validation->set_rules('caDiagnosis', 'Diagnosis', 'trim');
	    	$this->form_validation->set_rules('caPrescription', 'Prescription', 'trim');

	    	if ($this->form_validation->run() === FALSE)
	    	{
	            $this->index();
		     }
		     else{
		     	$this->Case_model->register();
	            $this->index();
	             }
    	}
}


?>