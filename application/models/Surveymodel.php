<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveymodel extends CI_Model {
	
	//Save from survey form
	function mm_survey_store(){
        $data = array(
                'client_company'  			=> $this->input->post('client_company'), 
                'client_contact'  			=> $this->input->post('client_contact'), 
				'nature_of_work' 			=> $this->input->post('nature_of_work'),
				'taxand_countries_involved'	=> $this->input->post('taxand_countries_involved'),
				'ttp1'						=> $this->input->post('ttp1'),
				'ttp2' 						=> $this->input->post('ttp2'),
				'ttp3' 						=> $this->input->post('ttp3'),
            );
        $result=$this->db->insert('survey_client',$data);
        return $result;
    }
}

?>
