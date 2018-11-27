<?php
/**
 * 
 */
class M_tulisan extends CI_Model
{
	function get_all_tulisan(){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal,kategori_nama FROM tbl_tulisan join tbl_kategori on kategori_id=kategori_id ORDER BY tulisan_id DESC");
		return $hsl;
	}

	function simpan_tulisan($judul,$isi,$gambar,$slug,$kategori_id){
		$hsl=$this->db->query("INSERT INTO tbl_tulisan(tulisan_judul,tulisan_isi,tulisan_gambar,tulisan_slug, kategori_id) VALUES ('$judul','$isi','$gambar','$slug','$kategori_id')");
		return $hsl;
	}

	function update_tulisan($id,$judul,$isi,$gambar,$slug,$kategori_id){
		$hsl=$this->db->query("UPDATE tbl_tulisan set tulisan_judul='$judul',tulisan_isi='$isi',tulisan_gambar='$gambar',tulisan_slug='$slug',kategori_id='$kategori_id' where tulisan_id='$id'");
		return $hsl;
	}

	function update_tulisan_tnp_img($id,$judul,$isi,$slug,$kategori_id){
		$hsl=$this->db->query("UPDATE tbl_tulisan set tulisan_judul='$judul',tulisan_isi='$isi',tulisan_slug='$slug',kategori_id='$kategori_id' where tulisan_id='$id'");
		return $hsl;
	}

	function hapus_tulisan($kode){
		$hsl=$this->db->query("DELETE from tbl_tulisan where tulisan_id='$kode'");
		return $hsl;
	}

	function get_tulisan_by_kategori($kategori_id){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where kategori_id='$kategori_id' ORDER BY tulisan_id DESC" );
		return $hsl;
	}

	function get_tulisan_by_kategori_withlimit($kategori_id,$limit){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where kategori_id='$kategori_id' ORDER BY tulisan_id DESC limit $limit" );
		return $hsl;
	}
}
?>