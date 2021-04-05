<?php
	class Event extends CI_model{
		public function get_events(){
			// db query
			return array("dance","kalagram");
		}

		public function getevents(){
			return array("ramukaka");
		}

		function Add_event($event){

			$SQL = "INSERT INTO `events`(`name`, `description`, `event_date`, `location_id`) VALUES ('".$event['name']."','".$event['description']."','".$event['event_date']."','".$event['location_id']."')";

		    $query = $this->db->query($SQL);
		    $last_id = $this->db->insert_id();
		    return $last_id;

		}

		function Select_event(){
			// $SQL = "SELECT
			//   e.event_id,
			//   e.name as event_name,
			//   e.description as event_des,
			//   e.event_date,
			//   e.location_id as location,
			//   l.location_id
			//   l.name as loc_name,
			//   l.location_des
			// FROM events e
			// JOIN location l on e.location = l.location_id";
			// var_dump($SQL);
			// die();


			$sql = "SELECT e.event_id, e.name as event_name, e.description as event_des, e.event_date, e.location_id as location, l.location_id, l.name as loc_name, l.location_des FROM events e JOIN location l on e.location_id = l.location_id";

			$query = $this->db->query($sql);
			// var_dump($query);
		    return $query->result_array();
		}
	}

?>