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
	    //$user_access = 1;
	    $this->db->where('vuser_email', $email);
	    $this->db->where('vuser_password', $pass);
	    //$this->db->where('vuser_access', $user_access);      
	    //to restrict unauthorised user
	    $query = $this->db->get('vuser');
	    return $query;
	}


//function to select the list of the users

	public function display_users(){
		$query = $this->db->get('vuser');
		return $query->result();
	}

//function to retrieve user details for editing
	public function find_user($vuser_email){
		$data=$this->db->where ('vuser_email',$vuser_email)
        ->get('vuser');
        return $data->row();
	}

	public function update_user_data($email)
	{
		//$pwd = md5($_POST['password']);
	    $data = array(
	        'vuser_fname' => $this->input->post('firstName'),
	        'vuser_lname' => $this->input->post('lastName'),
	        'vuser_post' => $this->input->post('post'),
	        'vuser_access' => $this->input->post('access'),
	        'vuser_description' => $this->input->post('desc'),
	        'vsuer_tole' => $this->input->post('tole'),
	        'vuser_address' => $this->input->post('address')
	    );
	    var_dump($data);

	    $this->db->where('vuser_email',$email);
	    $this->db->update('vuser',$data);
	    if ($this->db->affected_rows()==1) {
	    	return TRUE;
	    }
	    else{
	    	return FALSE;
	    }
	}


	public function delete_user($email)
	{
		$this->db->where('vuser_email',$email);
		$this->db->delete('vuser');
		return redirect('Users');
	}



}

?>