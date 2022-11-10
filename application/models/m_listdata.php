   <?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_listdata extends CI_Model
{

    private $_table = "tb_peminjaman";

    public $id_peminjaman;
    public $nama_ruang;
    public $kode_ruang;
    public $tanggal;
    public $jam_mulai;
    public $jam_selesai;

    public function rules()
    {
        return [
            ['field' => 'id_peminjaman',
            'label' => 'id_peminjaman',
            'rules' => 'numeric'],

             ['field' => 'kode_ruang',
            'label' => 'kode_ruang',
            'rules' => 'numeric'],

            ['field' => 'nama_ruang',
            'label' => 'nama_ruang',
            'rules' => 'numeric'],

            ['field' => 'tanggal',
            'label' => 'tanggal',
            'rules' => 'required'],
            
            ['field' => 'jam_mulai',
            'label' => 'jam_mulai',
            'rules' => 'required'],

            ['field' => 'jam_selesai',
            'label' => 'jam_selesai',
            'rules' => 'required']
        ];
    }

    
    public function index(){
        $this->db->select('tb_peminjaman.*, tb_ruangan.nama_ruang AS nama_ruang, tb_dinas.*');
      $this->db->join('tb_ruangan', 'tb_peminjaman.kode_ruang = tb_ruangan.kode_ruang');
      $this->db->join('tb_dinas', 'tb_peminjaman.id_dinas = tb_dinas.id_dinas');
      $this->db->from('tb_peminjaman');
      $this->db->order_by('date_start', 'desc');
      $this->db->order_by('jam_mulai', 'desc');

      $query = $this->db->get();
      return $query->result();
    }
    
    public function save($data, $table){
        $this->db->insert($table,$data);
    }

    public function getData(){
        $this->db->select("*");
        $this->db->from("tb_peminjaman");
        $query = $this->db->get();
        return $query->result();
    }

    public function cekData($kode_ruang, $date_start, $jam_mulai, $jam_selesai){
  
       // $this->db->where('kode_ruang', );
       // $this->db->where('date_start=', $date_start);
        $this->db->where('kode_ruang = "'.$kode_ruang.'" AND date_start= "'.$date_start.'" AND 
        	((jam_mulai<"'.$jam_selesai.'" and jam_selesai > "'.$jam_selesai.'") 
        	OR (jam_mulai<"'.$jam_mulai.'" and jam_selesai >"'.$jam_mulai.'") 
        	OR (jam_mulai>="'.$jam_mulai.'" and jam_selesai <="'.$jam_selesai.'")
        	OR (jam_mulai="'.$jam_mulai.'" and jam_selesai ="'.$jam_mulai.'"))');
       
        return $this->db->get('tb_peminjaman');
       
    
    }

    public function edit_data($id)
    {
        $this->db->select('a.*, b.*, c.*');
        $this->db->from('tb_peminjaman a');
        $this->db->join('tb_ruangan b','a.kode_ruang=b.kode_ruang');
        $this->db->join('tb_dinas c', 'a.id_dinas=c.id_dinas');
        $this->db->where('a.id_peminjaman', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function update_data($where, $data, $table )
    {
        # code...
         $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete('tb_peminjaman', array("id_peminjaman" => $id));
    }

    public function get_keyword($keyword){
        $this->db->select("a.*,b.*,c.*");
        $this->db->from("tb_peminjaman a");
        $this->db->join("tb_ruangan b", "a.kode_ruang=b.kode_ruang");
        $this->db->join("tb_dinas c", "a.id_dinas=c.id_dinas");
        $this->db->like('b.nama_ruang',$keyword);
        $this->db->or_like('a.jam_mulai',$keyword);
        $this->db->or_like('a.jam_selesai',$keyword);
        $this->db->or_like('a.kegiatan',$keyword);
        $this->db->or_like('a.date_start',$keyword);
        $this->db->or_like('c.nama_dinas',$keyword);
       return $this->db->get()->result();

    }
    }