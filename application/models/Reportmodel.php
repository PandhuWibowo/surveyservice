<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportmodel extends CI_Model {
	
	// Charts (Start)

	//select all
	public function mm_get_all(){
		$start_of_date 	= $this->input->post('start_of_date',true);
		$end_of_date 	= $this->input->post('end_of_date',true);
		
		// return $this->db->query("select * from survey_client where (created_at between '$start_of_date' and '$end_of_date')")->result();
		// return $this->db->where('created_at',$start_of_date)->where('created_at',$end_of_date)->get('survey_client')->result();
		return $this->db->get('survey_client')->result();
	}

	// Charts (End)
	
}

?>
