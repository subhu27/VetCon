<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {


		public function __construct()
    	{
      		parent::__construct();
      		$this->load->model('Message_model');
       		$this->load->model('User_model');
       		$user_status = $this->session->userdata('is_logged_in');
       		if ($user_status == FALSE) 
       		{
       			redirect('Login');
       		}
    	}

    	public function index()
    	{
	    	$messageView['query'] = $this->Message_model->getMessage();
	    	$this->load->view('backend/backend_header_sidebar');
	    	$this->load->view('backend/messageView',$messageView);
	    	$this->load->view('backend/backend_footer');

    	}

    	public function addMessage()
    	{
	    	$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
	    	$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
	    	$this->form_validation->set_rules('subject', 'Email', 'trim');
	    	$this->form_validation->set_rules('message', 'Message', 'trim');

	    	if ($this->form_validation->run() === FALSE)
	    	{
	            $this->index();
		     }
		     else{
		     	$this->Message_model->addMessage();
	            $this->index();
	             }
    	}

}


?>