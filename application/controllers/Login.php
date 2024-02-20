<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function __construct() {
		parent::__construct();
	}		

	public function index()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('muser', ['username' => $username])->row_array();

		if ($user) {
			if ($password == $user['password']) {
				$data = [
					'username' => $user['username'],
					'nama' => $user['nama'],
					'oto' => $user['oto'],
					'iduser' => $user['iduser'],
					'alamat' => $user['alamat'],
					'sektor' => $user['sektor'],
					'no_telp' => $user['no_telp'],
				];
				$this->session->set_userdata($data);
				redirect('dashboard', $data);
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Pastikan anda memasukan password dengan benar!</strong> Silahkan cek kembali.
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  			</div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Pastikan anda memasukan akun dengan benar!</strong> Silahkan cek kembali.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		 		 </div>');
			redirect('login');
		}
	}

	public function logout()
	{
		$array_items = array('username', 'nama', 'oto', 'iduser', 'alamat', 'sektor', 'no_telp');
		$this->session->unset_userdata($array_items);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Anda Berhasil Keluar</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		 		 </div>');
		redirect('main');
	}
}