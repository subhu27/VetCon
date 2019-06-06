<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {


		public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url_helper');
        }

	
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

	    $this->db->insert('vuser', $data);
	    if ($this->db->affected_rows()==1) {
	    	return redirect('Login');
	    }
	}

	public function login_check($email, $pass)
	{
	    $this->db->where('vuser_email', $email);
	    $this->db->where('vuser_password', $pass);
	    $query = $this->db->get('vuser');
	    return $query;
	    /*
	    if($query->num_rows = 1)
	    {
	        return $query->row();
	    }
	    return $query=;
		*/
	}


}

?>