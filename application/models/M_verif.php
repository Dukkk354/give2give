<?php
class M_verif extends CI_Model

{
	public function getVerif($table)
	{
		$this->db->join('muser', 't_product.iduser = muser.iduser');
		return $this->db->get($table);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function verif_product($data, $table)
	{
		$this->db->where('id_product', $data['id_product']);
		$this->db->update($table, $data);
	}
	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	 public function upload($data = array()){
        // Insert Ke Database dengan Banyak Data Sekaligus
        return $this->db->insert_batch('gambar',$data);
    }
}