    <?php
/**
 * 
 */
class Listdata extends CI_Controller
{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('akses') <> 'admin')
		{
			redirect('dashboard');
		}

		$this->load->model("m_listdata");
		$this->load->model("m_ruang");
		$this->load->model("m_dinas");
		$this->load->library("form_validation");
		$this->load->library('session');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
//menampilkan listdata penyimpanan
	public function index(){

		$data["list"] = $this->m_listdata->index();
		$this->load->view('listdata', $data);

	}
//menampilkan form edit jadwal
	public function edit($id){
		$where = array('id_peminjaman' => $id);
		$data["dinas"]= $this->m_dinas->index();
		$data["list"] = $this->m_ruang->index();
		$data['jadwal'] = $this->m_listdata->edit_data($id);
		$this->load->view('edit/jadwal_edit',$data);
	}
// update jadwal
	public function update_jadwal()
	{
		//post array data dari form input	
		$id_peminjaman = $this->input->post('id_peminjaman');	
		$kode_ruang = $this->input->post('kode_ruang', TRUE);
		$date_start = date('Y-m-d', strtotime($this->input->post('date_start')));
		$id_dinas = $this->input->post('id_dinas',TRUE);
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$kegiatan = $this->input->post('kegiatan');

		$status = 0;

		date_default_timezone_set('Asia/Jakarta');
		$now = date('H:i:s'); 
 		 $dateNow = date('Y-m-d');

		//if (!($jam_selesai < $jam_mulai) && !($dateNow > $date_start)) {
			
		// cek data
		$cek = $this->m_listdata->cekData($kode_ruang, $date_start, $jam_mulai, $jam_selesai);
		//var_dump($cek);
		//proses validasi
		if ($cek->num_rows() == 0) {
			foreach($cek->result() as $d){
			$getStart= date('H:i', strtotime($d->jam_mulai));
			$getEnd = date('H:i', strtotime($d->jam_selesai));
			$getDate = date('Y-m-d', strtotime($d->date_start));
		}
			if(($date_start >= $dateNow) && ($jam_selesai > $jam_mulai) && 
				($jam_mulai > $now) && ($date_start != $getDate) && 
				($jam_selesai != $getEnd) && ($jam_mulai != $getStart))
			{

				$data  = array(
					'kode_ruang' => $kode_ruang ,
					'date_start' => $date_start,
					'jam_mulai' => $jam_mulai,
					'jam_selesai' => $jam_selesai,
					'kegiatan' => $kegiatan,
					'id_dinas' => $id_dinas,
					'status' => $status);

		
			$where = array('id_peminjaman' => $id_peminjaman);
			$this->m_listdata->update_data($where, $data,'tb_peminjaman');
			$this->session->set_flashdata('update','Data berhasil diupdate');

			redirect('listdata/index');
		}
			else
			{
			$this->session->set_flashdata('pesan', 'Tidak dapat mengubah, jadwal kadaluarsa');
				redirect(site_url('listdata/edit/'.$id_peminjaman));
			}

		}else{
			$this->session->set_flashdata('message', 'Ruangan sudah dipinjam, coba waktu lain');
				redirect(site_url('listdata/edit/'.$id_peminjaman));
		}			

	
}

//menampilkan view tambah jadwal
	public function tambah(){
		$data["list"] = $this->m_ruang->index();
		$data["dinas"]= $this->m_dinas->index();
		$this->load->view('tambah', $data);
	}

//method menyimpan data simpan
	public function tambah_aksi(){
		//post array data dari form input		
		$kode_ruang = $this->input->post('kode_ruang', TRUE);
		$date_start = date('Y-m-d', strtotime($this->input->post('date_start')));
		$id_dinas = $this->input->post('id_dinas',TRUE);
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$kegiatan = $this->input->post('kegiatan');
		$status = 0;

		date_default_timezone_set('Asia/Jakarta');
         $now = date('H:i');
         $dateNow = date('Y-m-d');

		//if (!($jam_selesai < $jam_mulai) && !($dateNow > $date_start)) {
			
		// cek data
		$cek = $this->m_listdata->cekData($kode_ruang, $date_start, $jam_mulai, $jam_selesai);
		//var_dump($cek);
		//proses validasi
		if ($cek->num_rows() == 0) {
			foreach($cek->result() as $d){
			$getStart= date('H:i', strtotime($d->jam_mulai));
			$getEnd = date('H:i', strtotime($d->jam_selesai));
			$getDate = date('Y-m-d', strtotime($d->date_start));
		}
			if(($date_start >= $dateNow) && ($jam_selesai > $jam_mulai) && 
				($jam_mulai > $now) && ($date_start != $getDate) && 
				($jam_selesai != $getEnd) && ($jam_mulai != $getStart))
			{

				$data  = array(
					'kode_ruang' => $kode_ruang ,
					'date_start' => $date_start,
					'jam_mulai' => $jam_mulai,
					'jam_selesai' => $jam_selesai,
					'kegiatan' => $kegiatan,
					'id_dinas' => $id_dinas,
					'status' => $status);

				$this->m_listdata->save($data,'tb_peminjaman');
			$this->session->set_flashdata('sukses','Data berhasil disimpan');

				redirect(site_url('listdata'));
			}
			else
			{
			$this->session->set_flashdata('message', 'pastikan data yang anda masukkan benar');
				redirect(site_url('listdata/tambah'));
			}

		}else{
			$this->session->set_flashdata('pinjam', 'Ruangan sudah dipinjam, pilih waktu lain');
				redirect(site_url('listdata/tambah'));
		}			

	
}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->m_listdata->delete($id)) {
			$this->session->set_flashdata('delete','Data berhasil dihapus');

			redirect(site_url('listdata'));
		}
	}
	public function search(){
			$keyword = $this->input->post('keyword');
			$data['list']=$this->m_listdata->get_keyword($keyword);
		    $this->load->view('listdata',$data);
		    $this->load->view('templates/head.php');
		    //$this->load->view('templates/navbar.php');
		    //$this->load->view('templates/sidebar.php');
		    $this->load->view('templates/footer.php');

		    }

}