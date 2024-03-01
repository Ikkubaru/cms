<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caraousel extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }
	public function index()
	{
        $this->db->from('carousel');
        $caraousel = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Halaman Caraousel',
            'caraousel'      => $caraousel,
        );
		$this->template->load('template_admin','admin/caraousel_index',$data); 
	}
    public function simpan()
    {
        $namafoto                       = date('YmdHis').'.png';
        $config['upload_path']          = 'assets/upload/carousel/';
        $config['max_size']             = 1024 * 1024;
        $config['file_name']            = $namafoto;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 1024 * 1024){
            $this->session->set_flashdata('alert', '
            <div class="alert    alert-danger alert-dismissible fade show" role="alert">
                <strong>Ukuran foto terlalu besar</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>',);
            redirect('admin/caraousel');
        } elseif ( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        $data = array(
            'judul'         => $this->input->post('judul'),
            'foto'          => $namafoto
        );
        $this->db->insert('carousel',$data);
        $this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Berhasil Menambahkan Caraousel
        </div>
        ');
        redirect('admin/caraousel');
    }
    public function delete($id){
        $filename = FCPATH.'/assets/carousel/konten/'.$id;
        if(file_exists($filename)){
            unlink("./assets/upload/carousel/".$id);
        }
        $where = array(
            'foto' => $id
        );
        $this->db->delete('carousel',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Caraousel Berhasil Dihapus
        </div>
        ');
        redirect('admin/caraousel');
    }
}
