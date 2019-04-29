<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    // $this->load->model('create_event_model');
    $this->load->library('form_validation');
    $this->load->helper('url');
    $this->load->model('event_model');
  }
  public function index() {
    $data['event'] = $this->event_model->getAllEvent()->result();
    $this->load->view('v_home', $data);
  }


  public function create_event() {

    $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size'] = '100';
                $config['max_width'] = '1024';
                $config['max_height'] = '1024';
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('userfile'))
                {
                  $error = array('error' => $this->upload->display_errors());
                  $this->load->view('v_create_event', $error);
                }
                $file_info = $this->upload->data();
                $img = $file_info['file_name'];
                $data = [
                     "title" => $this->input->post('title', true),
                     "location" => $this->input->post('location', true),
                     "start" => $this->input->post('start', true),
                     "end" => $this->input->post('end', true),
                     "image" => $img,
                     "deskripsi" => $this->input->post('deskripsi', true),
                     "tiket" => $this->input->post('inlineDefaultRadiosExample', true),
                     "tipe" => $this->input->post('tipe', true),
                     "topic" => $this->input->post('topik', true),
                   ];

    $this->form_validation->set_rules('title', 'title', 'required');
    $this->form_validation->set_rules('location', 'location', 'required');
    $this->form_validation->set_rules('start', 'start', 'required');
    $this->form_validation->set_rules('end', 'end', 'required');
    $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
    $this->form_validation->set_rules('start', 'start', 'required');

    if ($this->form_validation->run() == FALSE)
							 {
											 $this->load->view('v_create_event');
							 }
							 else
							 {
											 $this->event_model->createDataEvent($data);
											 // $this->session->set_flashdata('alert',
			                 //     'added success');
                             redirect('event');
               }

  }

  public function overview(){
    $this->load->view('v_overview');
  }

  public function manage(){
    $this->load->view('v_manage');
  }

  public function support(){
        $this->load->view('v_help');
  }

  public function pricing(){
    $this->load->view('v_pricing');
  }

}
