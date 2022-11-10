  
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_carousel extends CI_Model
{
    private $_table = "tb_carousel";

   
    public $nama_carousel;
    public $gambar;  

    public function rules()
    {
        return [
            ['field' => 'nama_carousel',
            'label' => 'nama_carousel',
            'rules' => 'required'],

            ['field' => 'gambar',
            'label' => 'gambar',
            'rules' => 'required'],

        ];
    }

  public function index(){
    $this->db->select("*");
    $this->db->from("tb_carousel");
    $query =$this->db->get();
    return $query->result();

   }

  public function input($data){
   		try{
        $this->db->insert('tb_carousel',$data);
        return true;
    }catch(Exception $e){}

	}
	
  public function getGambar(){
    $query = "SELECT * FROM tb_carousel";
    return $this->db->query($query)->result_array();
  }

  public function edit_data($where,$table)
  {
    return $this->db->get_where($table,$where);
  }

  public function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
public function delete($id)
    {
        return $this->db->delete('tb_carousel', array("id_carousel" => $id));
    }
}