<?php
/**
 * 
 */
class List_ruang extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();

		$this->load->model("m_ruang");
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index(){
	$data["list"] = $this->m_ruang->index();

	$this->load->view('data_ruang', $data);
	
	}

	public function edit($id){
		$where = array('kode_ruang' => $id);
		$data['ruang'] = $this->m_ruang->edit_data($where,'tb_ruangan')->result();
		$this->load->view('edit/ruang_edit',$data);
	}
	 
	public function update(){
		$kode_ruang = $this->input->post('kode_ruang');
		$nama_ruang =$this->input->post('nama_ruang');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$akses = $this->input->post('akses');

		$data = array(
			'nama_ruang' => $nama_ruang,
			'username' => $username,
			'password' => $password,
			'akses' => $akses );

		$where = array('kode_ruang' => $kode_ruang );

		$this->m_ruang->update_data($where, $data, 'tb_ruangan');
		redirect('list_ruang/index');
	}
	
	
	

}