<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_content extends CI_Model {
    public function getAllContent(){
        return $this->db->get('konten')->result_array();
    }
    public function getContent($limit, $start){
        return $this->db->get('konten',$limit,$start)->result_array();
    }
    public function countAllContent(){
        return $this->db->get('konten')->num_rows();
    }
    public function search_post($keyword){
        $this->db->like('judul',$keyword);
        $this->db->or_like('keterangan',$keywordy);
        $query = $this->db->get('konten');
        return $query->result();
    }   
}
