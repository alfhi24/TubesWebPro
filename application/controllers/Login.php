<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('m_regist');
		$this->load->model('m_login');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('v_login', [
			'title' => 'Ini Judul',
			'email' => $this->session->flashdata('email')
		]);
	}

	public function register()
	{
		$this->load->view('v_regist', [
			'email' => $this->session->flashdata('email')
		]);
	}

	public function create(){
		$this->m_regist->bikin();
		$this->session->set_flashdata('email', $this->input->post('email'));
		redirect(site_url('Login'));
	}

	public function coba_login(){

		if (empty($this->m_login->mau_login()->get()->row())) {
			redirect('localhost/webpro/index.php/signin/index');
		} else{
			redirect('localhost/webpro/index.php/event/index');
		}
	}
}
