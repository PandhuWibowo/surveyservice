<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('Authadminmodel','aam');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('security');
		if($this->session->userdata('admin_id')>0)
        {
            redirect('dashboard/admin', 'refresh');
        }
	}

	public function index(){
		$data['title'] 	= "Sign In Administrator";
		$this->load->view('admin/main/index', $data);
	}

	public function mm_check_login(){
		$response=array();
		
		//Pokoknya harus pakai ini kalau pakai form validation
		$this->form_validation->set_rules('username','User Name','trim|required|max_length[30]');
		$this->form_validation->set_rules('password','Password','trim|required|max_length[30]');

		if($this->form_validation->run('login')!==false){
			$result	= $this->aam->m_check_login();

			if($result){
				$response['status']	='success';
				$data['admin_id']	= $result->id;
				$data['nama']		= $result->nama;
				$data['username']	= $result->username;
				$this->session->set_userdata($data);	
			}
			else{
				$response['status']		='error';
				$response['message']	='Oops, Invalid username or password';
			}
		}else {
			$response['status']		='error';
			$response['message']	= '<pre>'.print_r($_POST, true).'</pre>';
		}
		echo json_encode($response);
	}
}


?>
