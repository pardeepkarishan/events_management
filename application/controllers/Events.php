<?php
/**
 * 
 */

include 'Locations.php';

// class Add_event extends CI_controller
class Events extends Locations
{
	
	function index()
	{

		$this->load->model("Event");
		$response = $this->Event->Select_event();
		$data['response']=$response;
		$this->load->view("Event_details",$data);
		// $this->load->view("welcome_message");
	}

	function add_event(){
		$this->load->view("Save_event");
	}

	function save_event_data(){
		// $this->load->library('../controllers/Location'); 

		$location_data['name']= $this->input->post('loc_name');
		$location_data['description']= $this->input->post('loc_des');
		$this->get_data($location_data);
		// echo "save event";

		// $myVar = $this->session->flashdata('item');
		// $this->load->
		
		// $this->load->model('Get_event_data');
		// $location_data['name']= $this->input->post('loc_name');
		// $location_data['location_des'] = $this->input->post('loc_des');
		// $event_data['name'] = $this->input->post('e_name');
		// $event_data['description'] = $this->input->post('e_des');
		// $event_data['event_date'] = $this->input->post('e_date');
		// $this->Get_event_data->



		// var_dump($name);

	}

	function CreateEvent(){
		$location_data['name']= $this->input->post('loc_name');
		$location_data['description']= $this->input->post('loc_des');
		
		$location_id = $this->CreateLocation($location_data);

		$event_data['name'] = $this->input->post('e_name');
		$event_data['description'] = $this->input->post('e_des');
		$event_data['event_date'] = $this->input->post('e_date');
		$event_data['location_id'] = $location_id;

		$this->load->model("Event");
		$response = $this->Event->Add_event($event_data);

		$this->load->helper('url'); 
		
		$baseurl=base_url();
		// var_dump($baseurl);  //http://[::1]/codeint/
		$redirect = site_url('Events/index');//http://[::1]/codeint/index.php/Events/index
		// var_dump(FCPATH);//file path /var/www/html/codeint/



		redirect($redirect);

	}

}
?>