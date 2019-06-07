<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {


		public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url_helper');
        }

//default function to load at the first when the controller is called

	public function index()
	{

		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

//function to register the users (takes input from the register form)

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

//checks whether the user is valid or not, is called from Login/user_check with the parameters -- email and password of the users 

	public function login_check($email, $pass)
	{
	    $user_access = 1;
	    $this->db->where('vuser_email', $email);
	    $this->db->where('vuser_password', $pass);
	    //$this->db->where('vuser_access',$user_access) // user access not working
	    $query = $this->db->get('vuser');
	    return $query;
	}


}

?>