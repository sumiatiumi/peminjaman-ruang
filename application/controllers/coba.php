<?php
/**
 * 
 */
class Coba extends CI_Controller
{
	
	function __construct(argument)
	{
		# code...
	}

	public function FunctionName($value='')
	{

		date_default_timezone_set('Asia/Jakarta');
 		$now = date('H:i:s'); 
 		$tgl= date('Y-m-d');
		if (!($date_start<$tgl)) {
	
			if (!($jam_selesai < $jam_mulai) && !($now > $jam_mulai)) {
				
			}
		} else {
			# code...
		}
		
	}


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
 		$now = date('H:i:s'); 

		if (!($jam_selesai < $jam_mulai) && !($now > $jam_mulai)) {
			//parameter select data sql
		$where = array(
			'kode_ruang' => $kode_ruang,
			'jam_mulai' => $jam_mulai,
			'jam_selesai' => $jam_selesai,
			'status' => $status);

		// cek data
		$cek = $this->m_listdata->cekData("tb_peminjaman", $where)->num_rows();
		//proses validasi
		if ($cek == 0) {
			# code...
			$data  = array(
				'kode_ruang' => $kode_ruang ,
				'date_start' => $date_start,
				'jam_mulai' => $jam_mulai,
				'jam_selesai' => $jam_selesai,
				'kegiatan' => $kegiatan,
				'id_dinas' => $id_dinas,
				'status' => $status);

			$this->m_listdata->save($data,'tb_peminjaman');
			redirect('listdata');
		}else{
			echo "<script> alert('Ruangan sudah dipinjam') </script>";
			redirect($_SERVER['HTTP_REFERER']);
		}
		}else{
		$this->session->set_flashdata('message', 'Masukkan tanggal dan jam dengan benar');
		redirect('listdata/tambah');
		}
		
	
}
}
