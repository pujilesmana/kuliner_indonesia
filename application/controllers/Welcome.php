<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('Login');
            redirect($url);
        };
		$this->load->model('m_tulisan');
		$this->load->model('m_kategori');
		$this->load->library('upload');
		// $this->load->model('m_pengguna');
	}

	public function index()

	{
		$y['title']='Kuliner Indonesia';
		$x['header_home']=$this->m_tulisan->get_tulisan_by_kategori(1);
		$x['Konten_makanan_terbaru']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(4,3);
		$x['Jawa']=$this->m_tulisan->get_tulisan_by_kategori(5);
		$x['sumatera']=$this->m_tulisan->get_tulisan_by_kategori(6);
		$x['sulawesi']=$this->m_tulisan->get_tulisan_by_kategori(7);
		$x['caption']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(3,1);
		$this->load->view('v_header',$y);
		$this->load->view('welcome_message',$x);
		$this->load->view('v_footer');
	}
}
