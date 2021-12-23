<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pensil extends CI_Controller
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
        $nav['title'] = "Pensil";
        $data['pensil'] = $this->Data_m->allPensil();
        $this->load->view('templates-admin/header', $nav);
        $this->load->view('templates-admin/sidebar');
        $this->load->view('h_pensil', $data);
        $this->load->view('templates-admin/footer');
    }
    //menamabah data
    public function tambah()
    {
        $nav['title'] = "Tambah Data";
        $this->load->view('templates-admin/header', $nav);
        $this->load->view('templates-admin/sidebar');
        $this->load->view('input_pensil');
        $this->load->view('templates-admin/footer');
    }



    public function upload()
    {
        $nama_barang = $this->input->post('nama_barang');
        $deskripsi_barang = $this->input->post('deskripsi_barang');
        $harga_barang = $this->input->post('harga_barang');
        $data['gambar'] = '';
        $gambar = $_FILES['gambar']['name'];
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            echo "Gambar gagal diupload";
        } else {
            $gambar = $this->upload->data('file_name');
            $data = array(
                'nama_barang' => $nama_barang,
                'deskripsi_barang' => $deskripsi_barang,
                'harga_barang' => $harga_barang,
                'gambar' => $gambar,
            );
        }
        $this->db->insert('pensil', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Ditambahkan</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
        redirect('pensil');
    }




    //mengupdate data
    public function update($id)
    {

        $nav['title'] = "Edit Barang";
        $data['item'] =  $this->db->get_where('pensil', ['id_barang' => $id])->row();
        $this->load->view('templates-admin/header', $nav);
        $this->load->view('templates-admin/sidebar');
        $this->load->view('update_pensil', $data);
        $this->load->view('templates-admin/footer');
    }

    public function edit_data($id)
    {
        $kondisi = array('id_barang' => $id);
        $nama_barang = $this->input->post('nama_barang');
        $deskripsi_barang = $this->input->post('deskripsi_barang');
        $harga_barang = $this->input->post('harga_barang');
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $data = array(
                'nama_barang' => $nama_barang,
                'deskripsi_barang' => $deskripsi_barang,
                'harga_barang' => $harga_barang,

            );

            $this->db->where($kondisi);
            $this->db->update('pensil', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Diubah</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
            redirect('pensil');
        } else {
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
            $data = array(
                'nama_barang' => $nama_barang,
                'deskripsi_barang' => $deskripsi_barang,
                'harga_barang' => $harga_barang,
                'gambar' => $gambar,
            );

            $this->db->where($kondisi);
            $this->db->update('pensil', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Diubah</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
            redirect('pensil');
        }
    }


    public function delete($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('pensil');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Dihapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
        redirect('pensil');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['bolpoin'] = $this->Data_m->keyword_pensil($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('h_pensil', $data);
        $this->load->view('templates/footer');
    }
}
