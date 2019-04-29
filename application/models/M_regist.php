<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_regist extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function bikin()
	{
		return $this->db->insert('user', [
			'email' => $this->input->post('email'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'password' => $this->input->post('pass')
		]);
	}

	public function cek_akun(){
		return $datas = $this->db
			->select('id_user')
			->from('user')
			->where('email', $this->input->post('email'));
	}
}
