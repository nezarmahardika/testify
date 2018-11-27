<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_ptlead extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
    $this->load->model('ptlead_model');
  }

	public function index()
	{
    $ptlead=$this->session->userdata('ses_id');
    $data=array(
			'data' => $this->ptlead_model->list_project($ptlead)
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('PTLEAD/ptlead_dashboard',$data);
    $this->load->view('layout/footer');
	}


function pt_upload(){
        $id =  $this->input->post('ProjectID');
        $config['upload_path']="./assets/doc";
        $config['allowed_types']='gif|jpg|png|doc|docx|pdf';
        // $config['encrypt_name'] = TRUE;

        $this->load->library('upload',$config);
        if($this->upload->do_upload("FilePT")){
            $data = array('upload_data' => $this->upload->data());

            $judul= $this->input->post('NameFilePT');
            $image= $data['upload_data']['file_name'];

            $this->ptlead_model->simpan_pt_upload($id,$judul,$image);
        }
          $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> File PT Report berhasil di-Upload. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('c_ptlead');
     }

}
