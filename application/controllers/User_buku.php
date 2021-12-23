<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_buku extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email')) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$nav['title'] = "Buku";
		$data['buku'] = $this->Data_m->allBuku();
		$this->load->view('templates/header', $nav);
		$this->load->view('templates/sidebar');
		$this->load->view('u_buku', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{
		$data['item'] =  $this->db->get_where('buku', ['id_barang' => $id])->row();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
	}
	public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['buku'] = $this->Data_m->keyword_buku($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('u_buku', $data);
        $this->load->view('templates/footer');
    }
}
