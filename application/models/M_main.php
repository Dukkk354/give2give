<?php
class M_main extends CI_Model
{
	public function getProduct($table, $verif, $status)
	{
		$this->db->where('verif', $verif);
		$this->db->where('status', $status);
		$this->db->join('muser', 't_product.iduser = muser.iduser');
		$this->db->order_by('t_product.date_time','desc');
		// $this->db->join('gambar', 't_product.iduser = gambar.iduser and t_product.id_product = gambar.id_product');
// 		$this->db->query('SELECT
// 	*,
// 	(
// 	SELECT
// 		judul
// 	FROM
// 		gambar
// 		JOIN `muser` ON `gambar`.`iduser` = `muser`.`iduser`
// 		JOIN `t_product` ON `t_product`.`iduser` = `gambar`.`iduser`
// 		AND `t_product`.`id_product` = `gambar`.`id_product`
// 	WHERE
// 		`t_product`.`verif` = 0
// 		AND `t_product`.`status` = 0
// 	) AS judul
// FROM
// 	`t_product`
// 	JOIN `muser` ON `t_product`.`iduser` = `muser`.`iduser` LIMIT 1');
		return $this->db->get($table);
	}

	public function getNewProduct($table, $status, $verif, $limit)
	{
		$this->db->where('verif', $verif);
		$this->db->where('status', $status);
		$this->db->join('muser', 't_product.iduser = muser.iduser');
		$this->db->order_by("t_product.id_product", "desc");
		$this->db->limit($limit);
		return $this->db->get($table);
	}
}