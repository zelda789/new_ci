<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model {

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
	public function get_guru()
	{

		$data = $this->db->get('guru');
		return $data->result();
	}

	public function act_tambah($param)
	{
		$this->db->insert('guru', $param);
		return $this->db->affected_rows();

	}
	public function getDetailGuru($id)
	{
		$this->db->where('id_guru', $id);
		$data = $this->db->get('guru');
		return $data->row();

	}
	public function act_edit($param)
	{
		$object= array (
			'nama_guru' => $param ['nama_guru'],

			);
		$this->db->where('id_guru', $param['id_guru']);
		$this->db->update('guru', $object);
		return $this->db->affected_rows();


	}
	public function act_hapus($id)
	{
		$this->db->where('id_guru', $id);
		$this->db->delete('guru');
		return $this->db->affected_rows();


	}

}
