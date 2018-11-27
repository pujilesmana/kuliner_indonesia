<?php 
/**
 * 
 */
class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('Login');
            redirect($url);
        };
		$this->load->modeL('m_tulisan');
		$this->load->modeL('m_kategori');
		$this->load->library('upload');
		// $this->load->model('m_pengguna');
	}


	function index(){
		$x['data']=$this->m_tulisan->get_all_tulisan();
		$x['kat']=$this->m_kategori->get_all_kategori();
		$y['title']='Tulisan';
		$this->load->view('Admin/v_header_admin',$y);
		$this->load->view('Admin/v_home',$x);
	}

	function simpan_data(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	            $config['max_size'] = 0; //type yang dapat diakses bisa anda sesuaikan
	            // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        // //Compress Image
	                        // $config['image_library']='gd2';
	                        // $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        // $config['create_thumb']= FALSE;
	                        // $config['maintain_ratio']= FALSE;
	                        // $config['quality']= '100%';
	                        // // $config['width']= 710;
	                        // // $config['height']= 320;
	                        // $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        // $this->load->library('image_lib', $config);
	                        // $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$judul=strip_tags($this->input->post('xjudul'));
							$filter=str_replace("?", "", $judul);
							$filter2=str_replace("$", "", $filter);
							$filter3=str_replace("(", "", $filter2);
							$filter4=str_replace(")", "", $filter3);
							$filter5=str_replace(",", "", $filter4);
							$filter6=str_replace(":", "", $filter5);
							$kategori_id=strip_tags($this->input->post('xkategori'));
							$slug=strtolower(str_replace(" ", "-", $filter6));
							$isi=$this->input->post('xisi'); 
							$this->m_tulisan->simpan_tulisan($judul,$isi,$gambar,$slug,$kategori_id);
							echo $this->session->set_flashdata('msg','success');
							redirect('Admin/Home');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('Admin/Home');
	                }
	                 
	            }else{
					redirect('Admin/Home');
				}
			}

	function update_data(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	            $config['max_size'] = 0; //type yang dapat diakses bisa anda sesuaikan
	            // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        // //Compress Image
	                        // $config['image_library']='gd2';
	                        // $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        // $config['create_thumb']= FALSE;
	                        // $config['maintain_ratio']= FALSE;
	                        // $config['quality']= '100%';
	                        // // $config['width']= 710;
	                        // // $config['height']= 320;
	                        // $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        // $this->load->library('image_lib', $config);
	                        // $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$judul=strip_tags($this->input->post('xjudul'));							
	                        $id=$this->input->post('kode');
							$filter=str_replace("?", "", $judul);
							$filter2=str_replace("$", "", $filter);
							$filter3=str_replace("(", "", $filter2);
							$filter4=str_replace(")", "", $filter3);
							$filter5=str_replace(",", "", $filter4);
							$filter6=str_replace(":", "", $filter5);
							$kategori_id=strip_tags($this->input->post('xkategori'));
							$slug=strtolower(str_replace(" ", "-", $filter6));
							$isi=$this->input->post('xisi');
							$images=$this->input->post('gambar');
							$path='./assets/images/'.$images;
							unlink($path); 
							$this->m_tulisan->update_tulisan($id,$judul,$isi,$gambar,$slug,$kategori_id);
							echo $this->session->set_flashdata('msg','success');
							redirect('Admin/Home');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('Admin/Home');
	                }
	                 
	            }
	            else
	            {
	            	$judul=strip_tags($this->input->post('xjudul'));							
	                $id=$this->input->post('kode');
					$filter=str_replace("?", "", $judul);
					$filter2=str_replace("$", "", $filter);
					$filter3=str_replace("(", "", $filter2);
					$filter4=str_replace(")", "", $filter3);
					$filter5=str_replace(",", "", $filter4);
					$filter6=str_replace(":", "", $filter5);
					$kategori_id=strip_tags($this->input->post('xkategori'));
					$slug=strtolower(str_replace(" ", "-", $filter6));
					$isi=$this->input->post('xisi');
					$this->m_tulisan->update_tulisan_tnp_img($id,$judul,$isi,$slug,$kategori_id);
					echo $this->session->set_flashdata('msg','success');
					redirect('Admin/Home');
				}
	}

	function hapus_tulisan(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_tulisan->hapus_tulisan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('Admin/Home');
	}
}

?>
