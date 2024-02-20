<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index()
	{
		if ($this->session->userdata('iduser') == true) {	
			$data['title'] = 'User';
			$data['user'] = $this->M_user->getUser('muser')->result();
			$data['username'] = $this->db->get_where('muser', ['username' => $this->session->userdata('username')])->row_array();
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('user', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('login');
		}
	}

	public function add_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_user = $this->input->post('nama_user');
		$alamat = $this->input->post('alamat');
		$sektor = $this->input->post('sektor');
		$no_telp = $this->input->post('no_telp');

		if ($username == '' || $password == '' || $nama_user == '' || $alamat == '' || $sektor == '' || $no_telp == '') {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible show fade">
					<i class="bi bi-file-excel"></i> Data tidak lengkap, Gagal Disimpan !!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('user');
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'oto' => '2',
				'nama' => $this->input->post('nama_user'),
				'alamat' => $this->input->post('alamat'),
				'sektor' => $this->input->post('sektor'),
				'no_telp' => $this->input->post('no_telp'),
			);
		// do_upload();
		$this->M_user->insert_data($data,'muser');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible show fade">
				<i class="bi bi-check-circle"></i> Data Berhasil Disimpan.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		redirect('user');
		}
	}

	public function edit_user($iduser)
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_user = $this->input->post('nama_user');
		$alamat = $this->input->post('alamat');
		$sektor = $this->input->post('sektor');
		$no_telp = $this->input->post('no_telp');
		
		if ($username == '' || $password == '' || $nama_user == '' || $alamat == '' || $sektor == '' || $no_telp == '') {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible show fade">
					<i class="bi bi-file-excel"></i> Data tidak lengkap, Gagal Diupdate !!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('user');
		} else {
			$data = array(
				'iduser'  => $iduser,
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'nama' => $this->input->post('nama_user'),
				'alamat' => $this->input->post('alamat'),
				'sektor' => $this->input->post('sektor'),
				'no_telp' => $this->input->post('no_telp'),
			);
		// do_upload();
		$this->M_user->update_data($data,'muser');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible show fade">
				<i class="bi bi-check-circle"></i> Data Berhasil Diupdate.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		redirect('user');
		}
	}

	public function delete_user($id)
	{
		$where = array('iduser' => $id);
		$this->M_user->delete($where, 'muser');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible show fade">
				<i class="bi bi-check-circle"></i> Data Berhasil Dihapus.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		redirect('user');
	}


}