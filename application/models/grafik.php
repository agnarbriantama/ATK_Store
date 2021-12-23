<?php

class Grafik extends CI_Model
{

	public function index()
	{
		$query = "SELECT jenis_kelamin, COUNT(*) AS 'total' FROM grafik
                    GROUP BY jenis_kelamin";
		$result = $this->db->query($query)->result();
		return $result;
	}
}

