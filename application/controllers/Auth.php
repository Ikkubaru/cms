<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
       $this->load->view('login');
	}
    public function login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $query = $this->db->get()->row();
        if($query==NULL){
            $this->session->set_flashdata('alert','
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Username Tidak Ada
            </div>
            ');
            redirect('auth');
        }else if($password==$query->password){
            $data = array(
                'id_user'   =>$query->id_user,
                'nama'      =>$query->nama,
                'username'  =>$query->username,
                'level'     =>$query->level,
            );
            $this->session->set_userdata($data);
        }else{
            $this->session->set_flashdata('alert','
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Password Salah
            </div>
            ');
        }
        redirect('admin/home');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
