<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

		public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Message_model');
    }

	
	public function index()
	{
		$result_rows['query']= $this->User_model->display_doctors();
		$this->load->view('header');
		$this->load->view('body',$result_rows);
		$this->load->view('footer');
	}


	public function addMessage()
    	{
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
	    	$this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric');
	    	$this->form_validation->set_rules('subject', 'Subject', 'trim');
	    	$this->form_validation->set_rules('message', 'Message', 'trim|required');

	    	if ($this->form_validation->run() === TRUE)
	    	{
	            $message = $this->Message_model->addMessage();
	            if ($message === TRUE) {
	            	$this->session->set_flashdata('contactUs','Your message has been successfully sent, Cheers !!!');
	            }
		    }
		    $this->index();

    	}


}

?>
