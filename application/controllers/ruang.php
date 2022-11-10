   <?php
/**
 * 
 */
class Ruang extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		/*if($this->session->userdata('akses') <> 'user')
		{
			redirect('login');
		}*/
	

		$this->load->model("m_carousel");
		$this->load->model("m_home");
		$this->load->model("m_ruang");
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}



public function index($username){
	 $data["car"] = $this->m_carousel->getGambar();
	 

	 $where = array('username' => $username);
	 $data["info"] = $this->m_home->getById($username);
	 $data['list'] = $this->m_ruang->getById($username);
	 $data['ruang'] = $this->m_ruang->namaruang($username);
        $this->load->view("ruang", $data);
	}

public function filter_ruang($id){
	 $where = array('kode_ruang' => $id);
	 $data['ruang'] = $this->m_ruang->getById($id);
	 $this->load->view("filter_ruang", $data);
}

public function ruang()
{
	# code...
	 $data['ruang'] = $this->m_ruang->index();
	 $this->load->view("filter_ruang", $data);
}
}
