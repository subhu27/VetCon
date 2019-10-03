<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farm extends CI_Controller {


	public function __construct()
    {
       	parent::__construct();
       	$this->load->model('Farm_model');
       	$userCheck = $this->user_handler->isSuperAdmin();
        if ($userCheck === FALSE ) {
          $this->user_handler->index();
        }
    }


    public function index()
    {
    	$this->load->view('backend/backend_header_sidebar');
	    $this->load->view('backend/addFarm');
	    $this->load->view('backend/backend_footer');
    }


    public function addFarm()
    {
    	$this->load->library('form_validation');
			$this->form_validation->set_rules('faName', 'Farm Name', 'trim|required');
	    	$this->form_validation->set_rules('faAddress', 'Farm Address', 'trim|required');
	    	$this->form_validation->set_rules('faTole', 'Farm Tole', 'trim|required');
	    	$this->form_validation->set_rules('faEst', 'Estd. Date', 'trim|required|Date');

	    	if ($this->form_validation->run() === FALSE)
	    	{
	            $this->index();
		     }
		     else{
		     	$this->Farm_model->register();
	            $this->index();
	             }

    }




    public function selectFarm()
    {
    	$data = $this->Farm_model->getFarm();
    	return $data;

    }

    public function dropdownFarm()
    {
    	$farmView = $this->selectFarm();
    	$this->load->view('backend/backend_header_sidebar');
    	$this->load->view('backend/addClient',$farmView);
    	$this->load->view('backend/backend_footer');
    }

    public function searchFarm()
        //return "<p> Hello Mother Fucker !! </p> ";
        {
         $output = '';
         $query = '';
         if($this->input->post('query'))
         {
          $query = $this->input->post('query');
         }
         $data = $this->Farm_model->searchFarm($query);
         $output .= '
         <div class="table-responsive">
            <table class="table table-bordered table-striped">
             <tr>
              <th>Customer Name</th>
              <th>Address</th>
              <th>City</th>
              <th>Postal Code</th>
              <th>Country</th>
             </tr>
         ';
         if($data->num_rows() > 0)
         {
          foreach($data->result() as $row)
          {
           $output .= '
             <tr>
              <td>'.$row->vfarm_id.'</td>
              <td>'.$row->vfarm_name.'</td>
              <td>'.$row->vfarm_address.'</td>
              <td>'.$row->vfarm_tole.'</td>
              <td>'.$row->vfarm_estd.'</td>
             </tr>
           ';
          }
         }
         else
         {
          $output .= '<tr>
              <td colspan="5">No Data Found</td>
             </tr>';
         }
         $output .= '</table>';
         echo $this->input->post('query');
         //return "<p> Hello Mother Fucker !! </p> ";
         var_dump($output);

         return $output;
        }
        
}            
?>   