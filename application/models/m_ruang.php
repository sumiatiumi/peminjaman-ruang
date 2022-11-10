<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_ruang extends CI_Model
{


	private $_table= "tb_ruangan";

	public $kode_ruang;
	public $nama_ruang;
    public $username;
    public $password;
    public $akses;

	public function rules()
    {
        return [
            ['field' => 'kode_ruang',
            'label' => 'kode_ruang',
            'rules' => 'numeric'],

            ['field' => 'nama_ruang',
            'label' => 'nama_ruang',
            'rules' => 'required'],

             ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],

             ['field' => 'password',
            'label' => 'password',
            'rules' => 'required'],

             ['field' => 'akses',
            'label' => 'akses',
            'rules' => 'required']

        ];
    }
//menampilkan data ruang
    public function index()
    {
    	$this->db->select("nama_ruang, username, password, kode_ruang");
    	$this->db->from("tb_ruangan");
        $this->db->where("akses", 'user');
    	$query = $this->db->get();
      return $query->result();
    }
//menyimpan data
    public function save()
    {
        $post = $this->input->post();
        
        $this->nama_ruang=$post["nama_ruang"];
        $this->username=$post["username"];
        $this->password=$post["password"];
        $this->akses=$post["akses"];

       $this->db->insert($this->_table,$this);
        
    }
    public function getById($username)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d'); 
        $timeNow = date('H:i:s');
        $this->db->select('a.*, b.*, c.*');
        $this->db->from('tb_peminjaman a');
        $this->db->join('tb_ruangan b','a.kode_ruang=b.kode_ruang');
        $this->db->join('tb_dinas c', 'a.id_dinas=c.id_dinas');
        $this->db->where('b.username', $username);
        $this->db->where('a.date_start >=', $now);
        $this->db->where('a.jam_selesai >=', $timeNow);

        

        $query = $this->db->get();
        return $query->result();
    }

    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);

    }

    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    
    public function namaruang($username)
    {
        # code...
        $this->db->select("*");
        $this->db->from("tb_ruangan");
        $this->db->where("username", $username);
        $query = $this->db->get();
        return $query->result();
    }
}