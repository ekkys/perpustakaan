<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

// WWW.MALASNGODING.COM | Author : Diki Alfarabi Hadi
//STUDENT : EKKY SUKMAWATI
// Model yang terstruktur. agar bisa digunakan berulang kali untuk membuat operasi CRUD.
// Sehingga proses pembuatan CRUD menjadi lebih cepat dan efisien.

	//FUNGSI CRUD

	//fungsi untuk mengambil data dari database
	public function get_data($table)
	{
		return $this->db->get($table);
	}

	//fungsi untuk menginput data ke database
	public function insert_data($data, $table)
	{
		return $this->db->insert($data, $table);
	}

	//fungsi untuk mengedit data
	//menampilkan data berdasarkan id
	public function edit_data($where, $table)
	{
		return $this->get_where($where, $tab);
	}

	//fungsi untuk mengupdate atau mengubah data di database
	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	//fungsi untuk menghapus data dari database
	public function delete($where, $table)
	{
		$this->db->delete($table, $where);
	}

//		INI BELUM BERAKHIR

}

/* End of file M_data.php */
/* Location: ./application/models/M_data.php */ ?>