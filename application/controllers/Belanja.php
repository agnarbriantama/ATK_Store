<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (empty($this->cart->contents())){
			redirect('dashboard');
		}
		$nav ['title']= "Daftar Belanja";
		$this->load->view('templates/header', $nav);
		$this->load->view('templates/sidebar');
		$this->load->view('belanja', );
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$redirect_page	=  $this->input->post('redirect_page');
		$data = array(
        'id'      => $this->input->post('id'),
        'qty'     => $this->input->post('qty'),
        'price'   => $this->input->post('price'),
        'name'    => $this->input->post('name'),
        
);

		$this->cart->insert($data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Barang dimasukkan keranjang </strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect($redirect_page, 'refresh');
	}

	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('belanja');
	}

	public function update()
	{
		$i = 1;
		foreach ($this->cart->contents() as $items){
			$data = array(
        'rowid' => $items['rowid'],
        'qty'   => $this->input->post($i.'[qty]'),
			);

			$this->cart->update($data);
			$i++;
		}
		redirect('belanja');
	}
}