<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url_helper');
        }



	public function index()
	{

		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}


	public function register_user()

	{
		 

    	$this->form_validation->set_rules('phone', 'Title', 'required|');
    	$this->form_validation->set_rules('text', 'Text', 'required');
    	$this->form_validation->set_rules('title', 'Title', 'required');
    	$this->form_validation->set_rules('text', 'Text', 'required');


    	if ($this->form_validation->run() === FALSE)
    	{
        	$this->load->view('templates/header', $data);
        	$this->load->view('news/create');
        	$this->load->view('templates/footer');


    //}
   // else
    //{
    $this->User_model->register();
        //$this->load->view('/success');
    //}

	}




}

?>