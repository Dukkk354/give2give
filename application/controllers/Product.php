<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_product');
	}
	public function index()
	{
		if ($this->session->userdata('iduser') == true) {	
			date_default_timezone_set('Asia/Jakarta');
			$data['title'] = 'Product';
			$iduser = $this->session->userdata('iduser');
			$data['product'] = $this->M_product->getProduct('t_product', $iduser)->result();
			$data['username'] = $this->db->get_where('muser', ['username' => $this->session->userdata('username')])->row_array();
			$data['kategori'] = $this->M_product->getKategori('kategori')->result();
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('product', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('login');
		}
		
	}

	public function add_product()
	{
		// $jumlahData = count($_FILES['gambar']['name']);
		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['encrypt_name']         = TRUE; //mengenkripsi nama file

		$this->load->library('upload', $config);
		 $upload_data = array();

		$gambar1 = count($_FILES['gambar1']['name']);
		$gambar2 = count($_FILES['gambar2']['name']);
		$gambar3 = count($_FILES['gambar3']['name']);
		$gambar4 = count($_FILES['gambar4']['name']);

		$jumlahData = count($gambar1 + $gambar2 + $gambar3 + $gambar4);
		// var_dump($jumlahData);
		for ($i=1; $i=$jumlahData; $i++) {
			$dangerousCharacters = array(" ", '"', "'", "&", "/", "\\", "?", "#", "-");
			$filename = $_FILES['gambar']['name'][$i];
			$safefilename = str_replace($dangerousCharacters, '_', $filename);
			$_FILES['gambar']['name']     = $safefilename;
			$iduser = $this->session->userdata('iduser');
	  'iduser'.$iduser.'_index'.$i.'_'.time(); // You can define your custom prefix here
			$this->upload->initialize($config);

			if(!$this->upload->do_upload('gambar'.$i)){ // Jika Berhasil Upload
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible show fade">
				<i class="bi bi-file-excel"></i> Gambar gagal Disimpan.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
	            redirect('product');
	        } else {
	        	$upload_data[$i] = $this->upload->data();
	        }
		}

		$nama_product = $this->input->post('nama_product');
		$harga = $this->input->post('harga');
		$keterangan = $this->input->post('keterangan');
		$spesifikasi = $this->input->post('spesifikasi');
		$kategori = $this->input->post('kategori');
		$kondisi = $this->input->post('kondisi');
		$iduser = $this->session->userdata('iduser');
		$verif = '0';
		$status = '0';
		$datetime = $this->input->post('datetime');
		$datetime_formatted = date('Y-m-d H:i', strtotime($datetime));


		if ($nama_product == '' || $harga == '' || $keterangan == '' || $spesifikasi == '' || $kategori == '' || $kondisi == '') {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible show fade">
					<i class="bi bi-file-excel"></i> Data tidak lengkap, Gagal Disimpan !!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('product');
		} else {
			// Menyimpan nama file ke database
            $this->M_product->insert_image($upload_data[1]['file_name'], $upload_data[2]['file_name'], $upload_data[3]['file_name'], $upload_data[4]['file_name'], $nama_product, $harga, $keterangan, $kategori, $kondisi, $iduser, $verif, $status, $spesifikasi, $datetime_formatted);
        

        // Success
        // $data = array(
        //     'upload_data' => $upload_data,
        //     'nama_product' => $nama_product,
        //     'harga' => $harga,
        //     'keterangan' => $keterangan,
        //     'kategori' => $kategori,
        //     'kondisi' => $kondisi,
        //     'iduser' => $iduser,
		// 	'verif' => $verif,
		// 	'status' => $status
        // );

			// $data = array(
			// 	'nama_product' => $this->input->post('nama_product'),
			// 	'harga' => $this->input->post('harga'),
			// 	'keterangan' => $this->input->post('keterangan'),
			// 	'kategori' => $this->input->post('kategori'),
			// 	'kondisi' => $this->input->post('kondisi'),
			// 	'iduser' => $this->session->userdata('iduser'),
			// 	'verif' => '0',
			// 	'status' => '0',
			// );
		// do_upload();
		// $this->M_product->insert_data($data,'t_product');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible show fade">
				<i class="bi bi-check-circle"></i> Data Berhasil Disimpan.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		redirect('product');
		}
	}

	public function edit_product($id_product)
	{
		// $jumlahData = count($_FILES);

		$nama_product = $this->input->post('nama_product');
		$harga = $this->input->post('harga');
		$keterangan = $this->input->post('keterangan');
		$spesifikasi = $this->input->post('spesifikasi');
		$kategori = $this->input->post('kategori');
		$kondisi = $this->input->post('kondisi');

		if ($nama_product == '' || $harga == '' || $keterangan == '' || $spesifikasi == '' || $kategori == '' || $kondisi == '') {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible show fade">
						<i class="bi bi-file-excel"></i> Data tidak lengkap, Gagal Disimpan !!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				redirect('product');
		} else {
				$data = array(
					'id_product' => $id_product,
					'nama_product' => $this->input->post('nama_product'),
					'harga' => $this->input->post('harga'),
					'keterangan' => $this->input->post('keterangan'),
					'spesifikasi' => $this->input->post('spesifikasi'),
					'kategori' => $this->input->post('kategori'),
					'kondisi' => $this->input->post('kondisi'),
				);
			$this->M_product->update_data($data, 't_product');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible show fade">
					<i class="bi bi-check-circle"></i> Data Berhasil Diubah.
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		redirect('product');
			}
	} 


	public function delete_product($id)
	{
		$where = array('id_product' => $id);
		$this->M_product->delete($where, 't_product');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible show fade">
				<i class="bi bi-check-circle"></i> Data Berhasil Dihapus.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		redirect('product');
	}


	public function do_upload()
{
    $config['upload_path']          = './assets/upload/';
    $config['allowed_types']    = 'gif|jpg|png';
    // $config['encrypt_name']     = TRUE; //mengenkripsi nama file

    $iduser = $this->session->userdata('iduser');
	$image_name = time().'_'.$_FILES["image"]['name'].'_iduser'.$iduser;
    $config['file_name']	= $image_name;

    $this->load->library('upload', $config);

    //Proses upload untuk file pertama
    if ($this->upload->do_upload('gambar1')) {
        $data1 = $this->upload->data();
        $file1_name = $data1['file_name'];
    } else {
        $file1_name = '';
    }

    //Proses upload untuk file kedua
    if ($this->upload->do_upload('gambar2')) {
        $data2 = $this->upload->data();
        $file2_name = $data2['file_name'];
    } else {
        $file2_name = '';
    }

    //Proses upload untuk file ketiga
    if ($this->upload->do_upload('gambar3')) {
        $data3 = $this->upload->data();
        $file3_name = $data3['file_name'];
    } else {
        $file3_name = '';
    }

    //Proses upload untuk file keempat
    if ($this->upload->do_upload('gambar4')) {
        $data4 = $this->upload->data();
        $file4_name = $data4['file_name'];
    } else {
        $file4_name = '';
    }

    // Ambil keterangan dari form
   		$nama_product = $this->input->post('nama_product');
		$harga = $this->input->post('harga');
		$keterangan = $this->input->post('keterangan');
		$spesifikasi = $this->input->post('spesifikasi');
		$kategori = $this->input->post('kategori');
		$kondisi = $this->input->post('kondisi');
		$iduser = $this->session->userdata('iduser');
		$verif = '0';
		$status = '0';
		$datetime = $this->input->post('datetime');
		$datetime_formatted = date('Y-m-d H:i', strtotime($datetime));

    // Simpan data ke database
    $this->load->database();
    $insert = $this->db->insert('t_product', array(
        'gambar0' => $file1_name,
        'gambar1' => $file2_name,
        'gambar2' => $file3_name,
        'gambar3' => $file4_name,
        'nama_product' => $nama_product,
            'harga' => $harga,
            'keterangan' => $keterangan,
            'spesifikasi' => $spesifikasi,
            'kategori' => $kategori,
            'kondisi' => $kondisi,	
            'iduser' => $iduser,
            'verif' => $verif,
            'status' => $status,
            'date_time' => $datetime_formatted,
    ));

   
}

	public function massage($status) {
		 if ($status == 1) {
    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible show fade">
				<i class="bi bi-check-circle"></i> Data Berhasil Disimpan.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		redirect('product');
    } else {
    	$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible show fade">
				<i class="bi bi-check-circle"></i> Data Gagal Disimpan.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		redirect('product');
    }
	}
}