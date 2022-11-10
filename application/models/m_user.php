<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model
{

	private $_table = "user";

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}

	public function getSantri()
	{
		$this->db->select('*');
		$this->db->from('siswa');		
		$this->db->order_by('NO_INDUK', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function getKelas()
	{
		$this->db->select('*');
		$this->db->from('kelas');
		$query = $this->db->get();
		return $query->result();
	}


	public function saveAdmin()
	{
		$post = $this->input->post();
		$this->username = $post["username"];
		$this->password = $post["password"];
		$this->akses = "admin";
		$this->db->insert($this->_table, $this);
	}

	public function saveUser()
	{
		$post = $this->input->post();
		$username = $post["username"];
		$santri = $username.'@siswa';
		$wali = $username.'@wali';
		$pass_santri = $post["ps"];
		$pass_wali = $post["pot"];
		$akses_santri = "siswa";
		$akses_wali = "ortu";
		$data_santri = array('username' => $santri, 'password' => $pass_santri, 'akses' => $akses_santri);
		$data_wali = array('username' => $wali, 'password' => $pass_wali, 'akses' => $akses_wali);
		$query1 = $this->db->insert($this->_table, $data_santri);		
		$iduser = $this->db->insert_id($query1);
		$query2 = $this->db->insert($this->_table, $data_wali);
		$idwali = $this->db->insert_id($query2);

		$this->db->set('id_user', $iduser);
		$this->db->where('no_induk', $username);
		$update_santri = $this->db->update('siswa');

		$this->db->select('orang_tua.id_ortu as getid');
		$this->db->from('siswa');
		$this->db->join('orang_tua', 'orang_tua.ID_ORTU = siswa.ID_ORTU');
		$this->db->where('no_induk', $username);
		$id_wali = $this->db->get()->row()->getid;
		//$id = $id_wali->result();

		$this->db->set('user_ortu', $idwali);
		$this->db->where('id_ortu', $id_wali);
		$update_wali = $this->db->update('orang_tua');				
	}

	public function delete($id)
	{
		return $this->db->delete('user', array("id_user" => $id));
	}

}