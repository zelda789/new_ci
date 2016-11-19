<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nilai extends CI_Model {

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
	public function get_nilai()
	{
		$this->db->select('nilai.*, mapel.nama_mapel, siswa.nama');
		$this->db->from('nilai');
		$this->db->join('mapel', 'mapel.id_mapel = nilai.id_mapel', 'left');
		$this->db->join('siswa', 'siswa.id = nilai.id_siswa', 'left');


		$data = $this->db->get();
		return $data->result();

	}
	public function act_tambah($param)
	{
		$this->db->insert('nilai', $param);
		return $this->db->affected_rows();

	}
	public function getDetailnilai($id)
	{
		$this->db->where('id_nilai', $id);
		$data = $this->db->get('nilai');
		return $data->row();

	}
	public function act_edit($param)
	{
		$object= array (
			'total_nilai' => $param ['total_nilai'],
			'id_siswa' => $param ['id_siswa'],
			'id_mapel' => $param ['id_mapel'],
			);
		$this->db->where('id_nilai', $param['id_nilai']);
		$this->db->update('nilai', $object);
		return $this->db->affected_rows();


	}
	public function act_hapus($id)
	{
		$this->db->where('id_nilai', $id);
		$this->db->delete('nilai');
		return $this->db->affected_rows();


	}
}
