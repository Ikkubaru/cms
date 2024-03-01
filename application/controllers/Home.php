<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('M_content');
	}
	public function index()
	{

		// memanggil semua konten dari model
		$this->load->model('M_content','content');
		// config
		$config['total_rows'] = $this->content->countAllContent();
		$config['per_page'] = 3;
 
		// inisialisasi config dari pagination
		$this->pagination->initialize($config);
 

		// menampilkan konfigurasi 	
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		// menampilkan kategori ke header
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		// menampilkan carousel ke beranda
		$this->db->from('carousel');
		$carousel = $this->db->get()->result_array();

		// menampilkan konten berdasarkan id
        $this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori','left');
        $this->db->join('user', 'user.username=konten.username','left');
        $this->db->order_by('tanggal','DESC');
        $data = array(
			'judul'  	=> 'Beranda',
			'konfig' 	=> $konfig,
			'kategori' 	=> $kategori,
			'carousel' 	=> $carousel,
		);
		// memanggil fungsi menampilkan konten yang sudah dibatasi
		$data['start'] = $this->uri->segment(3);
		$data['content'] = $this->content->getContent($config['per_page'],$data['start']);

		// post terbaru
		$this->load->model('M_post');
		$data['latest_post'] =$this->M_post->getLastPost();
		$this->load->view('beranda',$data);
 	}
	public function artikel($id){
		// menampilkan konfigurasi
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		// menampilkan kategori ke header
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		// menampilkan konten berdasarkan id ke detail
		$this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori','left');
        $this->db->join('user', 'user.username=konten.username','left');
        $this->db->where('slug',$id);
        $konten = $this->db->get()->result_array();
		$data = array(
			'judul'  	=> '$konten->judul',
			'konfig' 	=> $konfig,
			'kategori' 	=> $kategori,
			'konten'	=> $konten
		);
       $this->load->view('detail',$data);
	}
	public function kategori($id){
		// menampilkan konfigurasi 
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		// menampilkan carousel
		$this->db->from('carousel');
		$carousel = $this->db->get()->result_array();
		// menampilkan kategori ke header
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		// menampilkan konten berdasarkan id
		$this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori','left');
        $this->db->join('user', 'user.username=konten.username','left');
        $this->db->where('konten.id_kategori',$id);
        $konten = $this->db->get()->result_array();
		// menampilkan nama kategori berdasarkan id
		$this->db->from('kategori');
		$this->db->where('id_kategori',$id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;
		$data = array(
			'judul'  		=> $nama_kategori,
			'nama_kategori' =>$nama_kategori,
			'konfig' 		=> $konfig,
			'kategori' 		=> $kategori,
			'konten'		=> $konten,
		);
       $this->load->view('kategori',$data);
	}
	public function search() {
        $keyword = $this->input->post('keyword');
        $data['posts'] = $this->M_content->search_posts($keyword);
        $this->load->view('search', $data);
    }
}
