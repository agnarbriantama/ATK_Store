public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('medicine');
		$this->db->like('email', $keyword); 
		$this->db->or_like('password', $keyword);
		$this->db->or_like('nama', $keyword);
		$this->db->or_like('jenis', $keyword);
		$this->db->or_like('harga', $keyword);
		$this->db->or_like('deskripsi', $keyword);
		$this->db->or_like('penyimpanan', $keyword);
		$this->db->or_like('penyuplai', $keyword);
		$this->db->or_like('tanggal', $keyword);
		$this->db->or_like('foto', $keyword);
		return $this->db->get()->result();
	}