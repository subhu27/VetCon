<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farm extends CI_Controller {


	public function __construct()
    {
       	parent::__construct();
       	$this->load->model('Farm_model');
       	$this->load->model('User_model');
       	$user_status = $this->session->userdata('is_logged_in');
       	if ($user_status == FALSE) {
       		redirect('Login');
       	}
    }


    public function index()
    {
    	$this->load->view('backend/backend_header_sidebar');
	    $this->load->view('backend/addFarm');
	    $this->load->view('backend/backend_footer');
    }


    public function addFarm()
    {
    	$this->load->library('form_validation');
			$this->form_validation->set_rules('faName', 'Farm Name', 'trim|required');
	    	$this->form_validation->set_rules('faAddress', 'Farm Address', 'trim|required');
	    	$this->form_validation->set_rules('faTole', 'Farm Tole', 'trim|required');
	    	$this->form_validation->set_rules('faEst', 'Estd. Date', 'trim|required|Date');

	    	if ($this->form_validation->run() === FALSE)
	    	{
	            $this->index();
		     }
		     else{
		     	$this->Farm_model->register();
	            $this->index();
	             }

    }




    public function selectFarm()
    {
    	$data = $this->Farm_model->getFarm();
    	return $data;

    }

    public function dropdownFarm()
    {
    	$farmView = $this->selectFarm();
    	$this->load->view('backend/backend_header_sidebar');
    	$this->load->view('backend/addClient',$farmView);
    	$this->load->view('backend/backend_footer');
    }

}

?>