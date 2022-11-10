<?php

class Mapel extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model("m_mapel");
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('new/mapel');
	}

	function add()
	{
		$info = $this->m_mapel;
		$info->save();
		echo "<script>alert('Data berhasil disimpan.')</script>";	
		redirect(base_url('Mapel'));
	}
}