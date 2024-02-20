<?php
class M_user extends CI_Model

{
	public function getUser($table)
	{
		return $this->db->get($table);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function update_data($data, $table)
	{
		$this->db->where('iduser', $data['iduser']);
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