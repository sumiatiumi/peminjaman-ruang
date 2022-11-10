<?php

class User extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model("m_user");
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data["santri"] = $this->m_user->getSantri();
		$this->load->view('new/user', $data);
	}

	function add()
	{
		$info = $this->m_user;
		$info->saveUser();
		echo "<script>alert('Data berhasil disimpan.')</script>";	
		redirect(base_url('User'));
	}

}