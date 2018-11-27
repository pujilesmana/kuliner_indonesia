<?php
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->modeL('m_login');
	}

	function index()
	{
		
		$this->load->view('v_login');
	}

	function auth()
	{
		$u = str_replace("'","",$this->input->post('username'));
		$p = str_replace("'","",$this->input->post('password'));
		$cadmin = $this->m_login->cekadmin($u,$p);
		if($cadmin->num_rows()>0){
			 $this->session->set_userdata('masuk',true);
	         $this->session->set_userdata('user',$u);
	         $xcadmin=$cadmin->row_array();
             $idadmin=$xcadmin['user_id'];
             $user_nama=$xcadmin['user_nama'];
             $this->session->set_userdata('idadmin',$idadmin);
             $this->session->set_userdata('nama',$user_nama);        
		}

		if($this->session->userdata('masuk') == true){
            redirect('Admin/Home');
        }else{
            redirect('Login/gagallogin');
        }
	}

	function gagallogin(){
            $url=base_url('Login');
            echo $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Username Atau Password Salah</div>');
            redirect($url);
        }

        function logout(){
            $this->session->sess_destroy();
            $url=base_url('Login');
            redirect($url);
        }
}
?>