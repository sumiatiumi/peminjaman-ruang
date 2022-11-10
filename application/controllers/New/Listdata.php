<?php

class Listdata extends CI_Controller{
 
	function __construct(){
		parent::__construct();			
		$this->load->model("m_listdata");	
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data["ruang"] = $this->m_listdata->getRuang();			
		$this->load->view('new/Listdata', $data);
	}

	function add()
	{
		$info = $this->m_listdata;
		$info->saveSantri();
		echo "<script>alert('Data berhasil disimpan.')</script>";	
		redirect(base_url('Listdata'));
	}
	
}