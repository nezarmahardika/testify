<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_uatlead extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
    $this->load->model('uatlead_model');
  }

	public function index()
	{
    $uatlead=$this->session->userdata('ses_id');
    $data=array(
			'data' => $this->uatlead_model->list_project($uatlead)
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('UATLEAD/uatlead_dashboard',$data);
    $this->load->view('layout/footer');
	}


function uat_upload(){
        $id =  $this->input->post('ProjectID');
        $config['upload_path']="./assets/doc";
        $config['allowed_types']='gif|jpg|png|doc|docx|pdf';
        // $config['encrypt_name'] = TRUE;

        $this->load->library('upload',$config);
        if($this->upload->do_upload("FileUAT")){
            $data = array('upload_data' => $this->upload->data());

            $judul= $this->input->post('NameFileUAT');
            $image= $data['upload_data']['file_name'];

            $this->uatlead_model->simpan_uat_upload($id,$judul,$image);
        }
          $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> File PT Report berhasil di-Upload. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('c_uatlead');
     }

}
