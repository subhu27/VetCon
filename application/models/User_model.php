<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	
	public function index()
	{

		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function register()
	{
		$pwd = md5($_POST['password']);
	    $data = array(
	        'vuser_phone' => $this->input->post('phoneNumber'),
	        'vuser_fname' => $this->input->post('firstName'),
	        'vuser_lname' => $this->input->post('lastName'),
	        'vuser_email' => $this->input->post('email'),
	        'vuser_password' => $pwd
	    );

	    return $this->db->insert('vuser', $data);

}


}

?>