<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

		public function __construct()
    {
        parent::__construct();
        //$this->load->model('User_model');
    }

	
	public function index()
	{
		$result_rows['query']= $this->User_model->display_doctors();
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('body',$result_rows);
		$this->load->view('footer');
	}



}

?>
