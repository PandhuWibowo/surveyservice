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
		$this->load->view('admin/main/report_survey', $data);
	}

	 

}
