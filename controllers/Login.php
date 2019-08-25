<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url_helper');
    }


 // index function loads the login page view
	
	public function index()
	{

		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	//checks whether the user is valid or not

	public function user_check()
	{
//checks if the user is logged in or not
	$user_access = 1;
	$logged_in = $this->session->userdata('is_logged_in');
		if($logged_in!= TRUE);
	    {
	        $email  =   $this->input->post('emailL');
	        $pass  =   md5($this->input->post('passwordL'));
	        $return =   $this->User_model->login_check($email, $pass, $user_access); 
	        if(isset($return)){
	        	if($return->num_rows = 1){
	        		$return_row = $return->row();
	        		$userEmail = $return_row->vuser_email;
	        		$userFname = $return_row->vuser_fname;
	        			if ($userEmail!=NULL) {
							$_SESSION['is_logged_in'] = TRUE;
							$_SESSION['userEmail'] = $userEmail;
							$_SESSION['userFname'] = $userFname;
							return redirect('Dashboard');
	        			}
	        			else{
	        				redirect('Login');
	        			}
	    		}        		
			}
		}
	}
//on click logouts the user and redirects to the login page

	public function logout(){
		$unset_data = array('is_logged_in', 'userEmail', 'userFname');
		$this->session->unset_userdata($unset_data);
		$this->session->sess_destroy();
		redirect('Login');
	}


}

?>