<?php
	class EventsList extends CI_controller{
		public function list_events(){
			$this->load->model('Events_list');
			// $data = $this->Events_list->get_events();
			// var_dump($data);
		}
	}
?>