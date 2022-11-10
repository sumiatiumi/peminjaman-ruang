<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_info extends CI_Model
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
        $this->db->select("*");
        $this->db->from("pengumuman");
        $query= $this->db->get();
        return $query->result();
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pengumuman" => $id])->row();
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
        $this->time = date("Y-m-d H:i:s");
        $this->db->insert($this->_table, $this);
    }
     public function edit_data($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

}