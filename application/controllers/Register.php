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
		 
    	$this->User_model->register();
       
	}




}

?>