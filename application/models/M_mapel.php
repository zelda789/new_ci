<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mapel extends CI_Model {

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
	public function get_mapel()
	{
		$this->db->select('mapel.*, guru.nama_guru');
		$this->db->from('mapel');
		$this->db->join('guru', 'guru.id_guru = mapel.id_guru', 'left');

		$data = $this->db->get();
		return $data->result();

	}
	public function act_tambah($param)
	{
		$this->db->insert('mapel', $param);
		return $this->db->affected_rows();

	}
	public function getDetailmapel($id)
	{
		$this->db->where('id_mapel', $id);
		$data = $this->db->get('mapel');
		return $data->row();

	}
	public function act_edit($param)
	{
		$object= array (
			'nama_mapel' => $param ['nama_mapel'],
			'id_mapel' => $param ['id_mapel'],
			'id_guru' => $param ['id_guru'],
			);
		$this->db->where('id_mapel', $param['id_mapel']);
		$this->db->update('mapel', $object);
		return $this->db->affected_rows();


	}
	public function act_hapus($id)
	{
		$this->db->where('id_mapel', $id);
		$this->db->delete('mapel');
		return $this->db->affected_rows();


	}
}
