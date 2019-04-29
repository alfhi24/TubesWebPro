<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function mau_login()
	{
		return $datas = $this->db
			->select('id_user')
			->from('user')
			->where('email', $this->input->post('email'))
			->where('password', $this->input->post('pass'));
	}
}
