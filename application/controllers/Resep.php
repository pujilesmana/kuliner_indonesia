<?php
	class Resep extends CI_Controller{
		function __construct(){
			parent::__construct();
			// $this->load->model('m_galeri');
			$this->load->model('m_tulisan');
			// $this->load->model('m_pengunjung');
			// $this->load->model('m_tentang');
			// $this->m_pengunjung->count_visitor();
		}

		function index(){
			$jum=$this->m_tulisan->get_tulisan_by_kategori(4);
		    $page=$this->uri->segment(3);
		    if(!$page):
		        $offset = 0;
		    else:
		        $offset = $page;
		    endif;
		    $limit=3;
		    $config['base_url'] = base_url() . 'Resep/index';
		    $config['total_rows'] = $jum->num_rows();
		    $config['per_page'] = $limit;
		    $config['uri_segment'] = 3;
		    $config['full_tag_open'] = " <ul>";
			$config['full_tag_close'] = '</ul>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#" target="blank">';
			$config['cur_tag_close'] = '</a></li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['prev_link'] = 'Prev';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$this->pagination->initialize($config);
		    $x['page'] =$this->pagination->create_links();
			$x['data']=$this->m_tulisan->berita_perpage_by_kategori(4,$offset,$limit);
			$this->load->view('v_resep',$x);
			$this->load->view('v_footer');
		}

		function detail($slug){			
			$data=$this->m_tulisan->get_berita_by_slug($slug);
			$q=$data->row_array();
			$title=$q['tulisan_judul'];
			$x['deskripsi']=$this->m_tulisan->get_berita_by_slug($slug);
			// $x['gambar']=$this->m_galeri->get_galeri_by_album_id($kode);
			$x['news']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(4,9);
			$x['title'] = $title;
			// $z['footer'] = $this->m_tentang->get_tentang_by_kategori(4);
			$this->load->view('v_resep_detail',$x);
			$this->load->view('v_footer');
		}
	}
?>