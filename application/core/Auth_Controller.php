<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->user_login = $this->session->userdata('user_session');
		if(count($this->user_login) == 0){
			$this->session->set_flashdata('alert_msg', err_msg('silahkan login terlenih dahulu'));
			redirect('login');
		}
	}
	public function load_template($view, $data)
	{
		$data['content']	= $this->load->view($view, $data);
		$this->load->view('template/base_template', $data);
		
	}
	public function index()
	{
		
	}
}
