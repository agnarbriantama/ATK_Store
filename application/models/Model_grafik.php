<?php

class Model_grafik extends CI_Model
{
	function Jum_user_perjk()
    {
        $this->db->group_by('jenis_kelamin');
        $this->db->select('jenis_kelamin');
        $this->db->select("count(*) as total");
        return $this->db->from('user')
          ->get()
          ->result();
    }
}
?>