<?php

class Locations extends CI_controller{
	function index(){
		
		// $data['response'] = $response;
		// $this->load->view("Portal",$data);
		$this->load->view("Portal");
	}

	function get_data($location){

		// $this->load->model("Events");
		// var_dump($location);
		// echo "location";
		$this->load->model("Events");
		$response = $this->Events->getevents();

		// $data['response'] = $response;
		// $this->load->view("Portal",$data);
		var_dump($response);
	}

	function update(){
		// echo "location update";
		$this->load->model("Location");
		$response = $this->Location->getevents();
	}

	function delete(){

	}

	function CreateLocation($location){

		$this->load->model("Location");
		$response = $this->Location->Add_location($location);
		return $response;
	}
}


?>



