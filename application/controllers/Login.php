<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
  function __construct(){
    parent::__construct();

    $this->load->model("m_login");
  }

  public function index(){
    $this->load->view('login');
    
  }

 public function login()
{
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $cek = $this->m_login->cek_user($username, $password);
    if($cek->num_rows() == 1)
    {
      foreach($cek->result() as $data){
        $sess_data['kode_ruang'] = $data->kode_ruang;
        $sess_data['username'] = $data->username;
        $sess_data['akses'] = $data->akses;
        $this->session->set_userdata($sess_data);
      }

      if($this->session->userdata('akses') == 'user')
        {
        $data_session = array (
          
          'username'=>$username,
          'status' =>"login"
        );
        $this->session->set_userdata($data_session);
 
        redirect(site_url('ruang/index/'.$username));
        }
     elseif($this->session->userdata('akses') == 'admin')
      {
        $data_session = array (

          'username'=>$username,
          'status' =>"login"
        );
        $this->session->set_userdata($data_session);
 
        redirect('listdata');
      }
      
     
     
    } 
    else{
      $this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
      redirect('login/index');
    }
}
  function keluar()
  {
    $this->session->sess_destroy();
    redirect('Login');
  }
}