<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GrafikController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_grafik');
	}

	function index()
	{
		$data['hasil'] = $this->model_grafik->Jum_user_perjk();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('chart', $data);
		$this->load->view('templates/footer');
	}
}
