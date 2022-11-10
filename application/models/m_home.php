 <?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model
{
    private $_table = "pengumuman";

    public $id_pengumuman;
    public $judul;
    public $isi;
    public $time;   

    public function rules()
    {
        return [
            ['field' => 'judul',
            'label' => 'Judul',
            'rules' => 'required'],

            ['field' => 'isi',
            'label' => 'Isi',
            'rules' => 'required'],

            ['field' => 'time',
            'label' => 'Waktu',
            'rules' => 'required']
        ];
    }


    public function index(){
        $this->db->select("pengumuman.*, tb_ruangan.*");
        $this->db->from("pengumuman");
        $this->db->join("tb_ruangan", "pengumuman.kode_ruang=tb_ruangan.kode_ruang");
        $query= $this->db->get();
        return $query->result();
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($username)
    {
         $this->db->select("pengumuman.*, tb_ruangan.*");
        $this->db->from("pengumuman");
        $this->db->join("tb_ruangan", "pengumuman.kode_ruang=tb_ruangan.kode_ruang");
        $this->db->where('username', $username);
        $query= $this->db->get();
        return $query->result();
    }

     public function delete($id)
    {
        return $this->db->delete('pengumuman', array("id_pengumuman" => $id));
    }
    public function save()
    {
        $post = $this->input->post();
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
        date_default_timezone_set('Asia/Jakarta'); 
        $this->time = date("Y-m-d H:i");
        $this->kode_ruang = $post["kode_ruang"];
        $this->db->insert($this->_table, $this);
    }
     public function edit_data($id)
    {
        $this->db->select("pengumuman.*, tb_ruangan.*");
        $this->db->from("pengumuman");
        $this->db->join("tb_ruangan", "pengumuman.kode_ruang=tb_ruangan.kode_ruang");
        $this->db->where('id_pengumuman', $id);
        $query= $this->db->get();
        return $query->result();
    }

    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function get_keyword($keyword){
       $this->db->select("a.*,b.*");
        $this->db->from("pengumuman a");
      $this->db->join("tb_ruangan b", "a.kode_ruang=b.kode_ruang");
     $this->db->like('a.judul',$keyword);
        $this->db->or_like('a.isi',$keyword);
        $this->db->or_like('a.time',$keyword);
       $this->db->or_like('b.nama_ruang',$keyword);
       return $this->db->get()->result();

    }

}