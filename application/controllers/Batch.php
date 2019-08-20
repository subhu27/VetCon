<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batch extends CI_Controller {


		public function __construct()
    	{
      		parent::__construct();
      		$this->load->model('Batch_model');
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
	    	$this->load->view('backend/addBatch',$farmView);
	    	$this->load->view('backend/backend_footer');

    	}


      public function addBatch()
      {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('bSDate', 'Batch Start Date', 'trim|required|Date');
        $this->form_validation->set_rules('bEDate', 'Batch End Date', 'trim|Date');
        $this->form_validation->set_rules('bType', 'Batch Type', 'trim|required');
        $this->form_validation->set_rules('bFSize', 'Batch Flock Size', 'trim|required');
        $this->form_validation->set_rules('bFlock', 'Flocks', 'trim|required');
        $this->form_validation->set_rules('bHeads', 'Head Counts', 'trim|required');
        $this->form_validation->set_rules('bFarm', 'Batch Farm', 'trim|required');

        if ($this->form_validation->run() === FALSE)
        {
              $this->index();
         }
         else{
          $this->Batch_model->register();
              $this->index();
               }

    }
      }


?>