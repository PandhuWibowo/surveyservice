<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authadminmodel extends CI_Model{
	public function m_check_login(){
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		return $this->db->where('username',$username)->where('password',$password)->get('administrator')->row();
	}
}
