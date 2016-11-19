<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function getSiswa()
	{
		$this->db->select('siswa.*, kelas.nama_kelas');
		$this->db->from('siswa');
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left');

		$data = $this->db->get();
		return $data->result();

	}
	public function act_tambah($param)
	{
		$this->db->insert('siswa', $param);
		return $this->db->affected_rows();

	}
	public function getDetailSiswa($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('siswa');
		return $data->row();

	}
	public function act_edit($param)
	{
		$object= array (
			'nama' => $param ['nama'],
			'alamat' => $param ['alamat'],
			'id_kelas' => $param ['id_kelas'],
			);
		$this->db->where('id', $param['id']);
		$this->db->update('siswa', $object);
		return $this->db->affected_rows();


	}
	public function act_hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('siswa');
		return $this->db->affected_rows();


	}
}
