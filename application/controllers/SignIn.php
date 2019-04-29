<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('m_regist');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('v_signin');
	}

	public function doLogin(){
		
		if (empty($this->m_regist->cek_akun()->get()->row())) {
			$this->session->set_flashdata('email', $this->input->post('email'));
			redirect(site_url('login/register'));
		} else {
			$this->session->set_flashdata('email', $this->input->post('email'));
			redirect(site_url('login'));
		}
	}
}
