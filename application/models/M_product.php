<?php
class M_product extends CI_Model

{
	public function getProduct($table, $where)
	{
		if ($where != '1') {
			$this->db->where('t_product.iduser', $where);
		}
		$this->db->join('muser', 't_product.iduser = muser.iduser');
		return $this->db->get($table);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function update_data($data, $table)
	{
		$this->db->where('id_product', $data['id_product']);
		$this->db->update($table, $data);
	}
	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function upload($data){
        // Insert Ke Database dengan Banyak Data Sekaligus
        $this->db->where('id_product',$data['id_product']);
        $this->db->where('iduser',$data['iduser']);
        return $this->db->update('t_product',$data);
    }

    public function ambil_data_berdasarkan_id($iduser) {
    	$this->db->where('id', $iduser);
    	$query = $this->db->get('muser');
    	return $query->row(); // Mengembalikan hanya satu baris data
	}

	public function insert_image($file_name1, $file_name2, $file_name3, $file_name4, $nama_product, $harga, $keterangan, $kategori, $kondisi, $iduser, $verif, $status, $spesifikasi, $datetime_formatted) {
        $data = array(
            'gambar0' => $file_name1,
            'gambar1' => $file_name2,
            'gambar2' => $file_name3,
            'gambar3' => $file_name4,
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
        );

        $this->db->insert('t_product', $data);
    }

    public function getKategori($table)
	{
		return $this->db->get($table);
	}
}