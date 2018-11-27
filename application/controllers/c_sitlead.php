<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_sitlead extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
    $this->load->model('sitlead_model');
  }

	public function index()
	{
    $sitlead=$this->session->userdata('ses_id');
    $data=array(
			'data' => $this->sitlead_model->list_project($sitlead)
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('SITLEAD/sitlead_dashboard',$data);
    $this->load->view('layout/footer');
	}


function sit_upload(){
        $id =  $this->input->post('ProjectID');
        $config['upload_path']="./assets/doc";
        $config['allowed_types']='gif|jpg|png|doc|docx|pdf';
        // $config['encrypt_name'] = TRUE;

        $this->load->library('upload',$config);
        if($this->upload->do_upload("FileSIT")){
            $data = array('upload_data' => $this->upload->data());

            $judul= $this->input->post('NameFileSIT');
            $image= $data['upload_data']['file_name'];

            $this->sitlead_model->simpan_sit_upload($id,$judul,$image);
        }
          $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> File SIT Report berhasil di-Upload. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('c_sitlead');
     }

}
