<?php

class Home extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		
		$this->load->model("m_home");
		$this->load->model("m_ruang");

        $this->load->library('form_validation');

        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		}
	
 
	public function index(){
		$data["pengumuman"] = $this->m_home->index();
		$this->load->view("home", $data);
	}

	public function tambah(){
		$data["ruang"] = $this->m_ruang->index();

		$this->load->view("new/info", $data);
	}

	public function add()
	{
		$info = $this->m_home;
		$info->save();
		echo "<script>alert('Data berhasil disimpan.')</script>";	
		redirect(base_url('Home'));
	}

	public function edit($id){

		$where = array('id_pengumuman' => $id);
		$data['ruang'] = $this->m_ruang->index();
		$data['pengumuman'] = $this->m_home->edit_data($id);
		$this->load->view('edit/info_edit',$data);
	}

	public function update(){
		$id_pengumuman = $this->input->post('id_pengumuman');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$time = $this->input->post('time');
		$kode_ruang = $this->input->post('kode_ruang');

		$data = array(
			'judul' => $judul,
			'isi' => $isi,
			'time' => $time,
			'kode_ruang' => $kode_ruang );

		$where = array('id_pengumuman' => $id_pengumuman  );

		$this->m_home->update_data($where, $data, 'pengumuman');
		redirect('home/index');
	}

	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->m_home->delete($id)) {
			redirect(site_url('home'));
		}
}

public function search(){
			$keyword = $this->input->post('keyword');
			$data['pengumuman']=$this->m_home->get_keyword($keyword);
		    $this->load->view('home',$data);
		    $this->load->view('templates/head.php');
		    //$this->load->view('templates/navbar.php');
		    //$this->load->view('templates/sidebar.php');
		    $this->load->view('templates/footer.php');

		    }
}