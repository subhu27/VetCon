<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {


	public function __construct()
    {
       	parent::__construct();
       	$this->load->model('User_model');
       	$this->load->helper('date');
       	$userCheck = $this->user_handler->isAdmin();
       	if ($userCheck === FALSE ) {
       		$this->user_handler->index();
       	}

    }

	
	public function index()
	{
		//$this->db->from('vsession');
		//$this->db->select('ip_address','data');
		//$this->db->get('*');
		/*$newData = $this->db->get();
		echo "<br>";
		var_dump($newData);
		echo "<br>";
		echo "<br>";
		echo "<br>";
		$datestring = 'Day: %d Month: %m  Year: %Y';
		//$time = time();
		$time = now('Asia/Kathmandu');
		//$date = date(format)
		echo mdate(DATE_COOKIE, $time);
		//echo $time;
		echo '<br> Human Nepali date';
		$humanTime = unix_to_human($time,FALSE, 'us');
		//$newTime = gmt_to_local($humanTime, FALSE, 'UP575');
		echo "<br> new local nepali time".$humanTime;

		*/


		//$data['time']=$timeNepal+$timeAus;
		$this->load->helper('url');
		$this->load->view('backend/admin/adminDashboardHeaderSidebar');
		$this->load->view('backend/admin/adminDashboard');
		$this->load->view('backend/admin/adminFooter');
	}


}

?>