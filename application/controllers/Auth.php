<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function login()
	{
		$nav['title'] = "Login";
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates-admin/header', $nav);

			$this->load->view('login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			if ($user['is_active'] == 1) {
				if ($user['password']) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']

					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('home');
					} else {
						redirect('user_pensil');
					}
				} else {
					$this->session->set_flashdata('login', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Password Salah !</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button></div>');
					redirect('auth/login');
				}
			} else {
				$this->session->set_flashdata('login', '<div class="alert 
				alert-danger" role="alert">This email has not been activated!</div>');
				redirect('auth/login');
			}
		} else {
			$this->session->set_flashdata('login', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Email belum terdaftar</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>!</div>');
			redirect('auth/login');
		}
	}



	public function regis()
	{
		$nav['title'] = "Registrasi";
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
		$jenis_kelamin =  $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');
		$tgl_lahir =  $this->input->post('tgl_lahir');


		$this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password dont matches!',
			'min_length' => 'Password  too short'
		]);
		$this->form_validation->set_rules('password2', 'password', 'required|trim|min_length[3]|matches[password1]');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates-admin/header', $nav);
			$this->load->view('registrasi');
		} else {
			$data = [
				'username' => $username,
				'email' => $email,
				'password' => $password,
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time(),
				'jenis_kelamin' => $jenis_kelamin,
				'agama' => $agama,
				'tgl_lahir' => $tgl_lahir,

			];

			$this->db->insert('user', $data);
			redirect('auth/login/');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		redirect('auth/login');
	}
}
