<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	//protected $logged_in;

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->helper('url_helper');
        //$this->load->library('User_Handler');
        $this->load->library('form_validation');
        //$logged_in = $this->session->userdata('is_logged_in');
    }


 // index function loads the login page view
	
	public function index()
	{
		$logged_in = $this->session->userdata('is_logged_in');
		if ($logged_in!=TRUE) {
		
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
		}
		else{
			$this->user_handler->index();
		}
	}

	//checks whether the user is valid or not
	public function validateLogin(){
		$this->form_validation->set_rules('emailL', 'Email', 'trim|required');

		//calls the function selfValidateLogin (callback_selfValidateLogin) for validating wrong username, password
    	$this->form_validation->set_rules('passwordL', 'Password', 'callback_selfValidateLogin|trim|required'
        );

    	if ($this->form_validation->run()===TRUE) {
    		$this->user_check();
    	}
    	else{
    		$this->index();
    	}
	}


	public function selfValidateLogin(){
		//validates the user inputs checking the database (Also for handling exception)
		$check = $this->User_model->validateLoginM();
		if ($check=== TRUE) {
			return TRUE;
		}
		else{
			$this->form_validation->set_message('selfValidateLogin','The Username or Password is not correct. Please, try again or contact the administrator for access.');
			return FALSE;
		}
	}



	public function user_check(){
//checks if the user is logged in or not

		$logged_in = $this->session->userdata('is_logged_in');

		//checks if the session already exists

		if($logged_in!= TRUE)
	    {
	        $email  =   $this->input->post('emailL');
	        $pass  =   md5($this->input->post('passwordL'));
	        $return =   $this->User_model->login_check($email, $pass); 

	        //checks if the variable is set by the value from the database

	        if(isset($return)){

	        	// checks if the value we get is returned with only one row

	        	if($return->num_rows = 1){
	        		$return_row = $return->row();
	        		//checks if the row with the key is set or not
	        		if (isset($return_row->vuser_email)) {
	        		$userEmail = $return_row->vuser_email;
	        		$userFname = $return_row->vuser_fname;
	        		$userPost = $return_row->vuser_post;
	        		//checks if the userEmail is null or not
	        			if ($userEmail!=NULL) {
							$_SESSION['is_logged_in'] = TRUE;
							$_SESSION['userEmail'] = $userEmail;
							$_SESSION['userFname'] = $userFname;
							$_SESSION['userPost'] = $userPost;
							$this->user_handler->index();
							}
					}
					else{
	        				return redirect('Login');
	        			}
	        	}
	        			
	    	}        		
		}
		else{
			$this->user_handler->index();
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