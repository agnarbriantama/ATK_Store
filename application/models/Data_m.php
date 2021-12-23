<?php

/**
 * 
 */
class Data_m extends CI_Model
{
	public function allData()
	{
		return $this->db->get('alat_tulis')->result();
	}

	public function allBuku()
	{
		return $this->db->get('buku')->result();
	}

	public function allPensil()
	{
		return $this->db->get('pensil')->result();
	}

	public function allBolpoin()
	{
		return $this->db->get('bolpoin')->result();
	}

	public function allPewarna()
	{
		return $this->db->get('pewarna')->result();
	}

	public function allUser()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('user_role', 'user_role.role_id = user.role_id', 'left');
		$this->db->order_by('id_login', 'desc');
		return $this->db->get()->result();
	}

	public function keyword_bolpoin($keyword){
		$this->db->select('*');
		$this->db->from('bolpoin');
		$this->db->like('nama_barang', $keyword);
		$this->db->or_like('deskripsi_barang', $keyword); 
		$this->db->or_like('harga_barang', $keyword);
		return $this->db->get()->result();
	}

	public function keyword_buku($keyword){
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->like('nama_barang', $keyword);
		$this->db->or_like('deskripsi_barang', $keyword); 
		$this->db->or_like('harga_barang', $keyword);
		return $this->db->get()->result();
	}

	public function keyword_pewarna($keyword){
		$this->db->select('*');
		$this->db->from('pewarna');
		$this->db->like('nama_barang', $keyword);
		$this->db->or_like('deskripsi_barang', $keyword); 
		$this->db->or_like('harga_barang', $keyword);
		return $this->db->get()->result();
	}

	public function keyword_pensil($keyword){
		$this->db->select('*');
		$this->db->from('pensil');
		$this->db->like('nama_barang', $keyword);
		$this->db->or_like('deskripsi_barang', $keyword); 
		$this->db->or_like('harga_barang', $keyword);
		return $this->db->get()->result();
	}
}
