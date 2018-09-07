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
				'comments_ttp'  			=> $this->input->post('comments_ttp'), 
                'pm1'  						=> $this->input->post('pm1'), 
				'pm2' 						=> $this->input->post('pm2'),
				'comments_pm'				=> $this->input->post('comments_pm'),
				'fb1'						=> $this->input->post('fb1'),
				'fb2' 						=> $this->input->post('fb2'),
				'comments_fb' 				=> $this->input->post('comments_fb'),
				'comments_fbops' 			=> $this->input->post('comments_fbops'),
				'oi1'  						=> $this->input->post('oi1'), 
                'comments_oi'  				=> $this->input->post('comments_oi'), 
				'oi2' 						=> $this->input->post('oi2'),
				'comments_oi2'				=> $this->input->post('comments_oi2'),
				'comments_ft'				=> $this->input->post('comments_ft'),
				'comments_ft2' 				=> $this->input->post('comments_ft2')
            );
        $result=$this->db->insert('survey_client',$data);
        return $result;
    }
}

?>
