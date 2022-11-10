<?php

class Info extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model("m_home");
	
		
	}
 
	function index(){
		$this->load->view('new/info');
	}

	function add()
	{
		$info = $this->m_home;
		$info->save();
		echo "<script>alert('Data berhasil disimpan.')</script>";	
		redirect(base_url('Home'));
	}

}