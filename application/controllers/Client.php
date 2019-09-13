<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {


		public function __construct()
    	{
      		parent::__construct();
      		$this->load->model('Farm_model');
      		$this->load->model('Client_model');
       		$this->load->model('User_model');
       		$userCheck = $this->user_handler->isSuperAdmin();
        if ($userCheck === FALSE ) {
          $this->user_handler->index();
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
	    	$this->form_validation->set_rules('cFarm', 'Farm Name', 'trim|required');

	    	if ($this->form_validation->run() === FALSE)
	    	{
	            $this->index();
		     }
		     else{
		     	$this->Client_model->register();
	            $this->index();
	             }
    	}


    	public function displayClients()
    	{
	    	$clientView['query'] = $this->Client_model->getClientDetails();
	    	$this->load->view('backend/backend_header_sidebar');
	    	$this->load->view('backend/client',$clientView);
	    	$this->load->view('backend/backend_footer');

    	}

    	public function editClient($client_id)
    	{
    		$clientView['result'] = $this->Client_model->findClient($client_id);
    		$farmViews['farmView'] = $this->Farm_model->getFarm();
    		$data = array_merge($clientView+$farmViews);
	    	$this->load->view('backend/backend_header_sidebar');
	    	$this->load->view('backend/editClient',$data);
	    	$this->load->view('backend/backend_footer');

    	}


    	public function updateClient($client_id)
    	{
    		$result = $this->Client_model->updateClient($client_id);
    		if ($result===TRUE) {
    			return redirect('Client/displayClients');
    	}
    		else{
    			$this->editClient($client_id);

    	 
    	}
    	}
}


?>