<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_pensil extends CI_Controller
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
		$nav['title'] = "Dashboard";
		$data['pensil'] = $this->Data_m->allBolpoin();
		$this->load->view('templates/header', $nav);
		$this->load->view('templates/sidebar');
		$this->load->view('u_pensil', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{
		$data['item'] =  $this->db->get_where('pensil', ['id_barang' => $id])->row();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
	}
	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['pensil'] = $this->Data_m->keyword_pensil($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('u_pensil', $data);
		$this->load->view('templates/footer');
	}
}
