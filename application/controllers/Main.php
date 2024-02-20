<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
{

	public function __construct() {
		parent::__construct();
		$this->load->model('M_main');
	}		

	public function index()
		{
			$data['title'] = 'Main';
			$data['product'] = $this->M_main->getProduct('t_product', '1', '0')->result();
			$data['productNew'] = $this->M_main->getNewProduct('t_product', '0', '1', '1')->result();

			$this->load->view('main', $data);
		}
}