<?php 

/**
 * summary
 */
class Mahasiswa_model extends CI_Model{
	public function getAllMahasiswa()
{
		// //menggunakan cara pertama
		// $query = $this->db->get('mahasiswa');
		// return &query->result_array();
		// menggunakan cara cepat methode chaining // pemanggilan database
	return $this->db->get('mahasiswa')->result_array();

	}

	public function ubahDataMahasiswa()
	{
		$data = [
			"kode" => $this->input->post('kode', true),
			"matakuliah" => $this->input->post('matakuliah', true),
			"sks" => $this->input->post('sks', true),
			"semester" => $this->input->post('semester', true),
			"jurusan" => $this->input->post('jurusan', true),
		];
		$this->db->where('id', $this->imput->post('id'));
		$this->db->update('mahasiswa', $data);
	}

}

?>