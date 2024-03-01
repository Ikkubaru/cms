<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_user');
        if($this->session->userdata('level') <> 'Admin'){
            redirect('auth');
        }
    }
	public function index()
	{
        $this->db->from('user');
        $this->db->order_by('nama','ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'user'          => $user
        );
		$this->template->load('template_admin','admin/user_index',$data);
	}
    public function simpan(){
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $query = $this->db->get()->result_array();
        if($query!=NULL){
            $this->session->set_flashdata('alert','
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Username Sudah Digunakan
            </div>
            ');
            redirect('admin/user');
        }
        $this->M_user->simpan();
        $this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Data Berhasil Disimpan
        </div>
        ');
        redirect('admin/user');
    }
    public function delete($id){
        $where = array(
            'id_user' => $id
        );
        $this->db->delete('user',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Data Berhasil Dihapus
        </div>
        ');
        redirect('admin/user');
    }
    public function update(){
        $this->M_user->update();
        $this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Data Berhasil Diperbarui
        </div>
        ');
        redirect('admin/user');
    }
}
