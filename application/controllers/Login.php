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

	public function login(){
		if($this->validateLogin()===TRUE){
			$this->user_check();
		}
		else{
			$this->index();
		}
	}


	public function forgetPasswordView(){
		$this->load->view('header');
		$this->load->view('forgetPassword');
		$this->load->view('footer');
	}

	//checks whether the user is valid or not
	private function validateLogin(){
		$this->form_validation->set_rules('emailL', 'Email', 'trim|required');

		//calls the function selfValidateLogin (callback_selfValidateLogin) for validating wrong username, password
    	$this->form_validation->set_rules('passwordL', 'Password', 'callback_selfValidateLogin|trim|required'
        );

    	if ($this->form_validation->run()===TRUE) {
    		return TRUE;
    		//$this->user_check();
    	}
    	else{
    		return FALSE;
    		//$this->index();
    	}
	}

	private function emailConfiguration(){
		$config = Array(
  		'protocol' => 'smtp',
  		'smtp_host' => 'smtp.googlemail.com',
  		'smtp_port' => 25,
  		'smtp_user'=>'nvetcon@gmail.com',
		'smtp_pass'=>'12@V98009',
  		'mailtype' => 'html',
  		'charset' => 'iso-8859-1',
  		'newline'=>'\r\n',
  		'wordwrap' => TRUE
		);
		//$this->email->initialize($config);
		//var_dump($config);
		return $config;

	}

	public function sendEmail(){
		$config = $this->emailConfiguration();
		$this->load->library('email',$config);
		//var_dump($config);
		$this->email->initialize($config);
		//$to      = 'nobody@example.com';

		/*
		$subject = 'the subject';
		$message = 'hello';
		$headers = 'From: nvetcon@gmail.com' . "\r\n" .
    	'Reply-To: nvetcon@gmail.com' . "\r\n" .
    	'X-Mailer: PHP/' . phpversion();
    	$email = $this->input->post('email');

		mail($email, $subject, $message, $headers);
		
		*/

		$email = $this->input->post('email');
		$this->email->from('nvetcon@gmail.com', 'VetCon');
		$this->email->to($email);
		$this->email->subject('Reset Password');
		$this->email->message('Testing the email class.');
		if($this->email->send()){
			echo "Success";
		}
		else{
			show_error($this->email->print_debugger());
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
			$forgetPassword = site_url('Login/forgetPasswordView');
			$this->session->set_flashdata('forgetPassword','<a href="'.$forgetPassword.'">Forget Password ?</a>');
			return FALSE;
		}
	}



	private function user_check(){
//checks if the user is logged in or not

		$logged_in = $this->session->userdata('is_logged_in');

		//checks if the session already exists
		if($logged_in!= TRUE){
	        $email  =   $this->input->post('emailL');
	        $pass  =   md5($this->input->post('passwordL'));
	        $return =   $this->User_model->login_check($email, $pass); 

	        //checks if the variable is set by the value from the database

	        if(isset($return)){

	        	// checks if the value we get is returned with only one row
	        	echo "I am here at user_check Login 1";

	        	if($return->num_rows =1){
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