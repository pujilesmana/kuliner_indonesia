<?php
class M_kategori extends CI_Model{

	function get_all_kategori(){
		$hsl=$this->db->query("SELECT * from tbl_kategori");
		return $hsl;
	}
	function get_all_kategori_files(){
		$hsl=$this->db->query("SELECT tbl_kategori_files.* from tbl_kategori_files ORDER BY kategori_f_id DESC");
		return $hsl;
	}
	function simpan_kategori($kategori){
		$hsl=$this->db->query("INSERT into tbl_kategori(kategori_nama) values('$kategori')");
		return $hsl;
	}
	function update_kategori($kode,$kategori){
		$hsl=$this->db->query("UPDATE tbl_kategori set kategori_nama='$kategori' where kategori_id='$kode'");
		return $hsl;
	}
	function hapus_kategori($kode){
		$hsl=$this->db->query("DELETE from tbl_kategori where kategori_id='$kode'");
		return $hsl;
	}
	
	function get_kategori_byid($kategori_id){
		$hsl=$this->db->query("SELECT * from tbl_kategori where kategori_id='$kategori_id'");
		return $hsl;
	}

}