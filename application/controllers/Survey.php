<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('surveymodel','sm');
	}

	public function index()
	{
		// $this->load->view('survey/index');
		echo "Url ini kosong, silahkan copy paste url custom di bawah ini<br>";
		echo "http://localhost/Kerjaan/pbtaxand/survey/nama_client/nama_servis";
	}

	public function pbtaxand_survey($param1, $param2){
		$data['name_of_client'] 	= $param1;
		$data['name_of_service'] 	= $param2;
		$this->load->view('survey/index',$data); 
	}

	function mm_store(){
        $data=$this->sm->mm_survey_store();
        echo json_encode($data);
    }
}
