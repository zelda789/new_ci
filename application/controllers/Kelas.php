<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_menukelas');
		
		
	}
	public function index()
	{
		$data['judul'] = 'Menu kelas';
		$data['data_kelas'] = $this->M_menukelas->get_kelas();

		$this->load_template('kelas/home', $data);
	}

	public function add_kelas()
	{
		$data['judul'] = 'Tambah kelas';
		
		$this->load_template('kelas/form_tambah_kelas', $data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama', 'required');
	

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('alert_msg', err_msg (validation_errors()));
				redirect('kelas/add_kelas');
		}else{

			$param = $this->input->post();

			$proses = $this->M_menukelas->act_tambah($param);

			if ($proses >= 0){
			$this->session->set_flashdata('alert_msg', succ_msg('kelas berhasil dinputkan'));
			redirect('kelas');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('kelas gagal dinputkan'));
			redirect('kelas/add_kelas');
		}
			}
	}	


	public function edit($id)
	{
		$data['judul'] = 'Edit kelas';
		$data['data_kelas'] = $this->M_menukelas->getDetailkelas($id);

		$this->load_template('kelas/form_edit_kelas', $data);
	}
	public function act_edit()
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama', 'required');
		

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('alert_msg', err_msg (validation_errors()));
				redirect('kelas/add_kelas');
		}else{
		$param = $this->input->post();

		$proses = $this->M_menukelas->act_edit($param);

		if ($proses >= 0){
			$this->session->set_flashdata('alert_msg', succ_msg('kelas berhasil diedit'));
			redirect('kelas');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('kelas gagal diedit'));
			redirect($_SERVER['HTTP_REFERER']);
		}
		}
	}	
	public function hapus($id='')
	{
	
		$proses = $this->M_menukelas->act_hapus($id);

		if ($proses >= 0){
			$this->session->set_flashdata('alert_msg', succ_msg('kelas berhasil dihapus'));
			
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('kelas gagal dihapus'));
			
		}
		redirect('kelas');
	}
}

?>