<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

// restrecting the user from direct access to the admin panel controller

	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }




	public function index()
	{

		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

// validates and registers the user
	public function register_user()

	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstName', 'First Name', 'trim|required');
    	$this->form_validation->set_rules('lastName', 'Last Name', 'trim|required');
    	$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[vuser.vuser_email]');
    	$this->form_validation->set_rules('phoneNumber', 'Phone Number', 'trim|required|integer|max_length[10]|min_length[10]');
    	$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[conf_password]');
    	$this->form_validation->set_rules('conf_password', 'Confirm Password', 'trim|required');
    	if ($this->form_validation->run() === FALSE)
    	{
            $this->load->view('header');
	        $this->load->view('register');
	        $this->load->view('footer');
	     }
	    else{
	     	$this->User_model->register();
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
	    }
       
	}




}

?>