<?php
class M_dashboard extends CI_Model

{
	public function count_product($table)
	{
		$this->db->select('COUNT(id_product) as jumlah_product');
        $query = $this->db->get($table);
        $result = $query->row();

        return $result->jumlah_product;
	}

	public function count_product_where($table, $coloumn, $where)
	{
		$this->db->select('COUNT(id_product) as jumlah_product');
		$this->db->where($coloumn, $where);
        $query = $this->db->get($table);
        $result = $query->row();

        return $result->jumlah_product;
	}

	public function product_where($table, $where)
	{
		$this->db->select('COUNT(id_product) as jumlah_product');

		$this->db->where($where);
        $query = $this->db->get($table);
        $result = $query->row();

        return $result->jumlah_product;
	}


}