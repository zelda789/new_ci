<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menukelas extends CI_Model {

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
	public function get_kelas()
	{

		$data = $this->db->get('kelas');
		return $data->result();
	}

	public function act_tambah($param)
	{
		$this->db->insert('kelas', $param);
		return $this->db->affected_rows();

	}
	public function getDetailkelas($id)
	{
		$this->db->where('id_kelas', $id);
		$data = $this->db->get('kelas');
		return $data->row();

	}
	public function act_edit($param)
	{
		$object= array (
			'nama_kelas' => $param ['nama_kelas'],

			);
		$this->db->where('id_kelas', $param['id_kelas']);
		$this->db->update('kelas', $object);
		return $this->db->affected_rows();


	}
	public function act_hapus($id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->delete('kelas');
		return $this->db->affected_rows();


	}

}
