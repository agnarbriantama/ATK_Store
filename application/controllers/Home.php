<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$nav ['title']= "Admin";
		$data['alat_tulis'] = $this->Data_m->allData();
		$this->load->view('templates-admin/header', $nav);
		$this->load->view('templates-admin/sidebar');
		$this->load->view('home', $data);
		$this->load->view('templates-admin/footer');
	}
//menamabah data
	public function tambah()
	{
		$nav ['title']= "Tambah Data";
		$this->load->view('templates-admin/header',$nav);
		$this->load->view('templates-admin/sidebar');
		$this->load->view('input_data');
		$this->load->view('templates-admin/footer');
	 	
	}

	public function upload()
	{
		$nama_barang = $this->input->post('nama_barang');
        $deskripsi_barang = $this->input->post('deskripsi_barang');
        $harga_barang = $this->input->post('harga_barang');
		$data['gambar'] = '';
		$gambar = $_FILES['gambar']['name'];
		$config['upload_path'] ='./uploads';
		$config['allowed_types'] = 'jpg|jpeg|png';

		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('gambar'))
		{
			echo "Gambar gagal diupload";
		} else {
			$gambar =$this->upload->data('file_name');
			$data = array(
	             'nama_barang' => $nama_barang,
                 'deskripsi_barang' => $deskripsi_barang,
                 'harga_barang' => $harga_barang,
              	 'gambar' => $gambar,
	            );
			
		}
		$this->db->insert('alat_tulis',$data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Ditambahkan</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('home');

	}

//mengupdate data
	public function update($id){
		
		$nav ['title']= "Edit Barang";
		$data['item'] =  $this->db->get_where('alat_tulis',['id_barang'=>$id])->row();
		$this->load->view('templates-admin/header',$nav);
		$this->load->view('templates-admin/sidebar');
		$this->load->view('update', $data);
		$this->load->view('templates-admin/footer');
		
	}

	public function edit_data($id)
	{	$kondisi = array('id_barang' => $id );
		$nama_barang = $this->input->post('nama_barang');
        $deskripsi_barang = $this->input->post('deskripsi_barang');
        $harga_barang = $this->input->post('harga_barang');
		$config['upload_path'] ='./uploads';
		$config['allowed_types'] = 'jpg|jpeg|png';

		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('gambar'))
		{
			$data = array(
	             'nama_barang' => $nama_barang,
                 'deskripsi_barang' => $deskripsi_barang,
                 'harga_barang' => $harga_barang,
              	 
	            );

		$this->db->where($kondisi);
		$this->db->update('alat_tulis',$data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Diubah</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('home');

		} else {
			$upload_data =$this->upload->data();
			$gambar=$upload_data['file_name'];
			$data = array(
	             'nama_barang' => $nama_barang,
                 'deskripsi_barang' => $deskripsi_barang,
                 'harga_barang' => $harga_barang,
              	 'gambar' => $gambar,
	            );

		$this->db->where($kondisi);
		$this->db->update('alat_tulis',$data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Diubah</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('home');
			
		}
		

	}


	public function delete($id){
		$this->db->where('id_barang',$id);
		$this->db->delete('alat_tulis');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Dihapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('home');
	}
	
	
}
