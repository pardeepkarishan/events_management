<?php
	class Location extends CI_model{
		public function get_events(){
			// db query
			return array("dance","kalagram");
		}

		public function getevents(){
			return array("ramukaka");
		}

		function Add_location($location){

		    $SQL = "INSERT INTO `location`(`name`, `location_des`) VALUES ('".$location['name']."','".$location['description']."')";
		    $query = $this->db->query($SQL);
		    $last_id = $this->db->insert_id();
		    return $last_id;

		}

		function Select_location(){

			$SQL="Select * from location where 1";   
		    $query = $this->db->query($SQL);
		    // return $query->result_array();


		}

		function Delete_location(){

		}

		function Update_location(){

		}
	}
?>