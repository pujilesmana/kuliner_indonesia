<?php
class M_login extends CI_Model
{
    function cekadmin($username,$password){
        $hasil=$this->db->query("SELECT * FROM user WHERE user_nama='$username' AND user_password='$password' ");
        return $hasil;
    }
  
}?>
