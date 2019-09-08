<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {


		public function __construct()
    	{
      		parent::__construct();
      		$this->load->model('Message_model');
       		$this->load->model('User_model');
       		$this->load->library('form_validation');
       		
    	}

    	public function index()
    	{
    		$user_status = $this->session->userdata('is_logged_in');
       		if ($user_status != TRUE ) 
       		{
       			return redirect('Login');
       		}
       		else{
	    		$messageView['query'] = $this->Message_model->getMessage();
	    		$this->load->view('backend/backend_header_sidebar');
	    		$this->load->view('backend/messageView',$messageView);
	    		$this->load->view('backend/backend_footer');
	   		}


    	}

    	public function addMessage()
    	{
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
	    	$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
	    	$this->form_validation->set_rules('subject', 'Subject', 'trim');
	    	$this->form_validation->set_rules('message', 'Message', 'trim|required');

	    	if ($this->form_validation->run() === TRUE)
	    	{
	            $message = $this->Message_model->addMessage();
	            if ($message === TRUE) {
	            	$this->session->set_flashdata('contactUs','Your message has been successfully sent, Cheers !!!');
	            }
		    }
		    redirect('Front');

    	}

}


?>