<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
    {
       	parent::__construct();
       	$this->load->model('User_model');
       	$this->load->library('User_Handler');

    }

	
	public function index()
	{

		//var_dump()
		$this->load->helper('url');
		$this->load->view('backend/backend_header_sidebar');
		$this->load->view('backend/dashboard');
		$this->load->view('backend/backend_footer');
	}


}

?>