<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('reportmodel','rm');
		$this->load->helper('string'); 
	}

	//Dashboard welcome page
	public function index(){
		$data['title']		= "Dashboard Administrator";
		$this->load->view('admin/dashboard/index', $data);
	}

	//Report page
	public function mm_report_page(){
		$data['title']		= "Report Survey";
		// $data['looping'] = $this->rm->mm_get_all();
		$this->load->view('admin/main/report_survey', $data);
	}

	public function mm_report_page2(){
		$data['title'] = "Report Survey 2";
		$this->load->view('admin/main/report_survey2', $data);
	}

	//Result survey
	public function mm_result_show(){
		$data = $this->rm->mm_get_all();
		// $this->load->view('admin/main/report_survey', $data);
		echo json_encode($data);
	}

	public function mm_result_show2(){
		$data = $this->rm->get_all_value();
		echo json_encode($data);
	}

	

	 

}
