<?php
 // write your name and student id here
class Event_model extends CI_model
{

	public function getAllEvent()
	{
    // $this->db->select("*");
 		// $this->db->from('mahasiswa');
 		// return $this->db->get();

    $query = $this->db->get('event');
    return $query;
	}

  public function createDataEvent($data)
{
  return $this->db->insert('event', $data);
}

}
