<?php

class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model("m_user");
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('new/admin');
	}

	function add()
	{
		$info = $this->m_user;
		$info->saveAdmin();
		echo "<script>alert('Data berhasil disimpan.')</script>";	
		redirect(base_url('User'));
	}
}