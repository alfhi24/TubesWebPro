<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_event extends CI_Controller {
  public function __construct()
{
  parent::__construct();
  $this->load->database();
  // $this->load->model('create_event_model');
  $this->load->library('form_validation');
  $this->load->helper('url');
}
public function index()
{

  $data['judul'] = 'Create Event';

  //from library form_validation, set rules for nama, nim, email = required
  $this->form_validation->set_rules('title', 'title', 'required');
  $this->form_validation->set_rules('location', 'location', 'required');
  $this->form_validation->set_rules('start', 'start', 'required');
  $this->form_validation->set_rules('end', 'end', 'required');
  $this->form_validation->set_rules('image', 'image', 'required');
  $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
  $this->form_validation->set_rules('tiket', 'tiket', 'required');
  $this->form_validation->set_rules('tipe', 'tipe', 'required');
  $this->form_validation->set_rules('topic', 'topic', 'required');
  // $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
  //conditon in form_validation, if user input form = false, then load page "tambah" again
  if ($this->form_validation->run() == FALSE)
             {
                     $this->load->view('v_create_event');
             }
             else
             {
                     $this->createDataEvent();
                     $this->session->set_flashdata('alert',
                         'create success');
             }

  $this->load->view('v_create_event');

  //else, when successed {
  //call method "tambahDataMahasiswa" in Mahasiswa_model
  //use flashdata to to show alert "added success"
  //back to controller mahasiswa }
  }
}
