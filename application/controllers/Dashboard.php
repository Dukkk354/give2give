<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('M_dashboard');
			}
	public function index()
		{
			if ($this->session->userdata('iduser') == true) {
				$data['title'] = 'Dashboard';
				$where_jml = array('iduser' => $this->session->userdata('iduser'),);
				$where_blm_verif = array('verif' => 0,'iduser' => $this->session->userdata('iduser'),);
				$where_terjual = array('status' => 1, 'iduser' => $this->session->userdata('iduser'),);
				$where_blm_terjual = array('status' => 0, 'iduser' => $this->session->userdata('iduser'),);
				if ($this->session->userdata('iduser') == '1') {
					$data['jml_barang'] = $this->M_dashboard->count_product('t_product');
					$data['blm_verif'] = $this->M_dashboard->count_product_where('t_product', 'verif', '0');
					$data['terjual'] = $this->M_dashboard->count_product_where('t_product', 'status', '1');
					$data['blm_terjual'] = $this->M_dashboard->count_product_where('t_product', 'status', '0');
				} else {
					$data['jml_barang'] = $this->M_dashboard->product_where('t_product', $where_jml);
					$data['blm_verif'] = $this->M_dashboard->product_where('t_product', $where_blm_verif);
					$data['terjual'] = $this->M_dashboard->product_where('t_product', $where_terjual);
					$data['blm_terjual'] = $this->M_dashboard->product_where('t_product', $where_blm_terjual);
				}
				$data['username'] = $this->db->get_where('muser', ['username' => $this->session->userdata('username')])->row_array();
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('dashboard', $data);
				$this->load->view('templates/footer', $data);
			} else {
				$this->load->view('login');
			}
			
		}
}