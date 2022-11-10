 <?php

class List_pengumuman extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->load->model("m_info");		
        $this->load->library('form_validation');
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		
		}
	
 
	public function index(){
		$data["pengumuman"] = $this->m_info->getAll();
		$this->load->view("list_pengumuman", $data);
	}

	public function tambah(){
		$this->load->view("new/info");
	}

	public function add()
	{
		$info = $this->m_info;
		$info->save();
		echo "<script>alert('Data berhasil disimpan.')</script>";	
		redirect(base_url('list_pengumuman'));
	}

	public function edit($id){
		$where = array('id_pengumuman' => $id);
		$data['pengumuman'] = $this->m_info->edit_data($where,'pengumuman')->result();
		$this->load->view('edit/info_edit',$data);
	}

	public function update(){
		$id_pengumuman = $this->input->post('id_pengumuman');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$time = $this->input->post('time');

		$data = array(
			'judul' => $judul,
			'isi' => $isi,
			'time' => $time );

		$where = array('id_pengumuman' => $id_pengumuman  );

		$this->m_info->update_data($where, $data, 'pengumuman');
		redirect('list_pengumuman/index');
	}

	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->m_info->delete($id)) {
			redirect(site_url('list_pengumuman'));
		}
}
}