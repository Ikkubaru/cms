<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_post extends CI_Model {
    public function getLastPost($limit = 3){
        $this->db->from('konten');
        $this->db->order_by('tanggal','DESC');
        $this->db->limit($limit);

        $query = $this->db->get();
        return $query->result_array();
    }
}
