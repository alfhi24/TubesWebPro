<?php
 // write your name and student id here
class Create_event_model extends CI_model
{
  public function createDataEvent()
	{
		$data = [
			"title" => $this->input->post('title', true),
			"location" => $this->input->post('location', true),
			"start" => $this->input->post('start', true),
			"end" => $this->input->post('end', true),
      "image" => $this->input->post('image', true),
      "deskripsi" => $this->input->post('deskripsi', true),
      "tiket" => $this->input->post('tiket', true),
      "tipe" => $this->input->post('tipe', true),
      "topic" => $this->input->post('topic', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		return $this->db->insert('event', $data);
	}
}
