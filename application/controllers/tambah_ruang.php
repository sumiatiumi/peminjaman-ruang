<?php
class Tambah_ruang extends CI_Controller{
 
	function __construct(){
		parent::__construct();			
		$this->load->model("m_ruang");
		$this->load->library('form_validation');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index(){
		
	$this->load->view('tambah_ruang');
	}

	//menambahkan data dengan form validation
	public function add()
	{
		$ruang = $this->m_ruang;
		$validation = $this->form_validation;
		$validation -> set_rules($ruang->rules());

		if ($validation->run()){
			$ruang->save();
			$this->session->set_flashdata('success','Data berhasil Disimpan');
		redirect('list_ruang');
		} 
		else{
			$this->load->view('tambah_ruang');
			echo "<script>alert('Masukan data dengan benar');</script>";
			
		}

	}
}
?>