<?php

class Tambah extends CI_Controller{
 
	function __construct(){
		parent::__construct();			
		$this->load->model("m_listdata");
		$this->load->model("m_ruang");
		$this->load->library('form_validation');

	}
	public function index(){
		$data["list"] = $this->m_ruang->index();
		$this->load->view('tambah', $data);
	}
	public function tambah_aksi(){
		//post array data dari form input
		$kode_ruang = $this->input->post('kode_ruang', TRUE);
		$tgl_mulai = date('Y-m-d', strtotime($this->input->post('date_start')));
		$tgl_selesai = date('Y-m-d', strtotime($this->input->post('date_end')));
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$date_start = $tgl_mulai." ".$jam_mulai;
		$date_end = $tgl_selesai." ".$jam_selesai;
		$status = 0;

		// parameter select data sql
		$where = array(
			'kode_ruang' => $kode_ruang,
			'date_start' => $date_start,
			'status' => $status);

		// cek data
		$cek = $this->m_listdata->cekData("tb_peminjaman", $where)->num_rows();

		//proses validasi
		if ($cek == 0) {
			# code...
			$data  = array(
				'kode_ruang' => $kode_ruang ,
				'date_start' => $date_start,
				'date_end' => $date_end,
				'status' => $status);
			$this->m_listdata->save($data,'tb_peminjaman');
			redirect('listdata');
		}else{
			echo "<script> alert('Ruangan sudah dipinjam') </script>";
			redirect($_SERVER['HTTP_REFERER']);
		}
	

	
}
}
?>