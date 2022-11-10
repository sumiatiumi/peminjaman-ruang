 <?php 



/**
 * 
 */
class List_carousel extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('m_carousel');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}


	public function index(){
		$data['car'] = $this->m_carousel->index();
		$data['caro'] = $this->m_carousel->getGambar();
		$this->load->view('list_carousel', $data);
	}

	public function gambar(){
		
		$this->load->view('list_carousel', $data);
}

	public function edit($id)
	{
		$where = array('id_carousel' =>$id);
		$data['car'] = $this->m_carousel->edit_data($where, 'tb_carousel')->result();
		$this->load->view('edit/carousel_edit', $data);
	}

	public function update_data()
	{
		$id_carousel = $this->input->post('id_carousel');
		$config['upload_path'] = './assets/foto' ;
    	$config['allowed_types'] = 'jpg|png' ;
        
    	$this->load->library('upload', $config);

    	if (!$this->upload->do_upload('gambar')) {
    		$error = array('error' =>$this->upload->display_errors());
    		$this->load->view('carousel', $error);
    	}else{
    		$file= $this->upload->data();
    		$data= ['gambar' => $file ['file_name'],
    				'nama_carousel' => set_value('nama_carousel')
    	]; }
    		$where = array('id_carousel' => $id_carousel);
    		$this->m_carousel->update_data($where, $data, 'tb_carousel');
            $this->session->set_flashdata('sukses','Gambar berhasil diubah');

    		redirect('list_carousel');
	}
	public function delete($id=null){
		if (!isset($id)) show_404();
		
		if ($this->m_carousel->delete($id)) {
            $this->session->set_flashdata('hapus','Gambar berhasil dihapus');
			
			redirect(site_url('list_carousel'));
		}
	}
}
 ?>