<?php

class Home extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->load->model("m_home");		
        $this->load->library('form_validation');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	public function index(){
		$data["pengumuman"] = $this->m_home->getAll();
		$this->load->view("home", $data);
	}
	function ubah()
	{
		$info = $this->m_home;
		$info->update();
		echo "<script>alert('Data berhasil disimpan.')</script>";	
		redirect(base_url('Home'));
	}
}