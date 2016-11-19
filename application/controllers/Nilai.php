<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_nilai');
		$this->load->model('M_daftarmapel');
		$this->load->model('M_daftarsiswa');
		$this->load->model('M_namaguru');
		$this->load->model('M_daftarnilai');
	
		
	}
	public function index()
	{
		$data['judul'] = 'Menu nilai';
		$data['data_nilai'] = $this->M_nilai->get_nilai();

		$this->load_template('nilai/home', $data);
	}
	public function add_nilai()
	{
		$data['judul'] = 'Tambah nilai';
		$data['mapel'] =  $this->M_daftarmapel->get_mapel();
		$data['siswa'] =  $this->M_daftarsiswa->get_siswa();
		$data['guru'] =  $this->M_namaguru->get_guru();
		$data['mapel'] =  $this->M_daftarmapel->get_mapel();
		$data['nilai'] =  $this->M_daftarnilai->get_nilai();
		$this->load_template('nilai/form_tambah_nilai', $data);
	}

	public function act_tambah()
	{
		
		$this->form_validation->set_rules('id_siswa', 'nama siswa', 'required');
		$this->form_validation->set_rules('id_mapel', 'nama mapel', 'required');
		$this->form_validation->set_rules('total_nilai', 'total nilai', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('alert_msg', err_msg (validation_errors()));
				redirect('nilai/add_nilai');
		}else{

			$param = $this->input->post();

			$proses = $this->M_nilai->act_tambah($param);

			if ($proses >= 0){
			$this->session->set_flashdata('alert_msg', succ_msg('nilai berhasil dinputkan'));
			redirect('nilai');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('nilai gagal dinputkan'));
			redirect('nilai/add_nilai');
		}
			}
	}	


	public function edit($id)
	{
		$data['judul'] = 'Edit nilai';
		$data['siswa'] =  $this->M_daftarsiswa->get_siswa();
		$data['nilai'] =  $this->M_nilai->get_nilai();		
		$data['mapel'] =  $this->M_daftarmapel->get_mapel();
		$data['data_nilai'] = $this->M_nilai->getDetailnilai($id);
		

		$this->load_template('nilai/form_edit_nilai', $data);
	}
	public function act_edit()
	{

		$this->form_validation->set_rules('id_siswa', 'nama siswa', 'required');
		$this->form_validation->set_rules('id_mapel', 'nama mapel', 'required');
		$this->form_validation->set_rules('total_nilai', 'total nilai', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('alert_msg', err_msg (validation_errors()));
				redirect('nilai/add_nilai');
		}else{
		$param = $this->input->post();

		$proses = $this->M_nilai->act_edit($param);

		if ($proses >= 0){
			$this->session->set_flashdata('alert_msg', succ_msg('nilai berhasil diedit'));
			redirect('nilai');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('nilai gagal diedit'));
			redirect($_SERVER['HTTP_REFERER']);
		}
		}
	}	
	public function hapus($id='')
	{
	
		$proses = $this->M_nilai->act_hapus($id);

		if ($proses >= 0){
			$this->session->set_flashdata('alert_msg', succ_msg('nilai berhasil dihapus'));
			
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('nilai gagal dihapus'));
			
		}
		redirect('nilai');
	}

}