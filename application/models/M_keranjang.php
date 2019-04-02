<?php
class M_penjualan extends CI_Model{



	function min_chart(){
		$this->db->query("update tbl_barang set barang_stok=barang_stok-'$item[qty]' where barang_id='$item[id]'");
	}

	
}