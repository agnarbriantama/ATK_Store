<?php
/**
 * 
 */
class Kategori_m extends CI_Model
{
	public function allData()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->order_by('id_kategori', 'desc');
		return $this->db->get()->result();
	}





}