<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportmodel extends CI_Model {
	
	// Charts (Start)

	//select all
	public function mm_get_all(){
		return $this->db->get('survey_client')->result();
	}

	// Charts (End)
	
}

?>
