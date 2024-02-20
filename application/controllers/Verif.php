<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Verif extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_verif');
	}
	public function index()
	{

		if ($this->session->userdata('iduser') == true) {	
			$data['title'] = 'Verifikasi';
			$data['product'] = $this->M_verif->getverif('t_product')->result();
			$data['username'] = $this->db->get_where('muser', ['username' => $this->session->userdata('username')])->row_array();
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('verif', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('login');
		}
	}

	public function verif_product($id)
	{
		$where = array(
			'id_product' => $id,
			'verif' => '1',
		);
		$this->M_verif->verif_product($where, 't_product');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible show fade">
				<i class="bi bi-check-circle"></i> Data Berhasil Diverifikasi.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		redirect('verif');
	}

	public function btl_verif_product($id)
	{
		$where = array(
			'id_product' => $id,
			'verif' => '0',
		);
		$this->M_verif->verif_product($where, 't_product');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible show fade">
				<i class="bi bi-check-circle"></i> Data Batal Diverifikasi.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		redirect('verif');
	}

}