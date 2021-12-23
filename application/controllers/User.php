<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email')) {
			redirect('auth/login');
		}
	}

	
	public function index()
	{
		$nav ['title']= "Data User";
		$data['user'] = $this->Data_m->allUser();
		$this->load->view('templates-admin/header', $nav);
		$this->load->view('templates-admin/sidebar');
		$this->load->view('user', $data);
		$this->load->view('templates-admin/footer');
	}

	public function update($id)
	{
		$nav ['title']= "Data User";
		$data['item'] =  $this->db->get_where('user',['id_login'=>$id])->row();
		$this->load->view('templates-admin/header', $nav);
		$this->load->view('templates-admin/sidebar');
		$this->load->view('update_regis', $data);
		$this->load->view('templates-admin/footer');
	}

	public function edit_regis($id)
	{
		if($this->input->Server('REQUEST_METHOD') === 'POST'){

		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
		$jenis_kelamin =  $this->input->post('jenis_kelamin');
		$role_id = $this->input->post('role_id');
		$agama = $this->input->post('agama');
		$tgl_lahir =  $this->input->post('tgl_lahir');

		$data = [
			'username' => $username,
			'email' => $email,
			'password' => $password,
			'role_id' => $role_id,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'tgl_lahir' => $tgl_lahir,

		];

			$this->db->where('id_login', $id);
			$this->db->update('user',$data);
			redirect('user');
		}else{
			echo "gagal";
		}
	}

	public function delete($id){
		$this->db->where('id_login',$id);
		$this->db->delete('user');
		redirect('user');
	}
	public function print()
	{
		$data['user'] = $this->Data_m->allUser();
		$this->load->view('print', $data);
		
	}
}

