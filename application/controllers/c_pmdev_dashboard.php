<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pmdev_dashboard extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
    $this->load->model('pmdev_model');
  }

	public function index()
	{
    $pmdev=$this->session->userdata('ses_id');
    $data=array(
			'data' => $this->pmdev_model->show_project($pmdev)
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('PMDEV/pmdev_dashboard',$data);
    $this->load->view('layout/footer');
	}

  function list()
	{
    $pmdev=$this->session->userdata('ses_id');
    $data=array(
			'data' => $this->pmdev_model->list_project($pmdev)
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('PMDEV/track_project',$data);
    $this->load->view('layout/footer');
	}

function project(){
    $pmdev=$this->session->userdata('ses_id');
    $data = array(
        'ProjectID'		=> $this->input->post('ProjectID'),
        'ProjectName'	=> $this->input->post('ProjectName'),
        'ProjectTypeID'	=> $this->input->post('ProjectTypeID'),
        'PMDev'		=> $this->input->post('PMDev'),
        'ProjectDescription'	=> $this->input->post('ProjectDescription'),
        'ProjectEstimation'	=> $this->input->post('ProjectEstimation'),
        'ProjectIn'	=> $this->input->post('ProjectIn')
    );
    $this->pmdev_model->add_project($data);
    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('c_pmdev_dashboard');
}

function edit_project(){
  $id =  $this->input->post('ProjectID');
  $data = array(
    'ProjectID'		=> $this->input->post('ProjectID'),
    'ProjectName'	=> $this->input->post('ProjectName'),
    'ProjectTypeID'	=> $this->input->post('ProjectTypeID'),
    //'PMDev'		=> $this->input->post('PMDev'),
    'ProjectDescription'	=> $this->input->post('ProjectDescription'),
    'ProjectEstimation'	=> $this->input->post('ProjectEstimation'),
    //'ProjectIn'	=> $this->input->post('ProjectIn')
  );
  $this->pmdev_model->edit_project($data,$id);
  $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
  redirect('c_pmdev_dashboard');
}

function brd_upload(){
        $id =  $this->input->post('ProjectID');
        $config['upload_path']="./assets/doc";
        $config['allowed_types']='gif|jpg|png|doc|docx|pdf';
        // $config['encrypt_name'] = TRUE;

        $this->load->library('upload',$config);
        if($this->upload->do_upload("BRD")){
            $data = array('upload_data' => $this->upload->data());

            $judul= $this->input->post('NameBRD');
            $image= $data['upload_data']['file_name'];

            $this->pmdev_model->simpan_brd_upload($id,$judul,$image);
        }
          $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> File BRD berhasil di-Upload. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('c_pmdev_dashboard');
     }

     function fsd_upload(){
             $id =  $this->input->post('ProjectID');
             $config['upload_path']="./assets/doc";
             $config['allowed_types']='gif|jpg|png|doc|docx|pdf';
             // $config['encrypt_name'] = TRUE;

             $this->load->library('upload',$config);
             if($this->upload->do_upload("FSD")){
                 $data = array('upload_data' => $this->upload->data());

                 $judul= $this->input->post('NameFSD');
                 $image= $data['upload_data']['file_name'];

                 $this->pmdev_model->simpan_fsd_upload($id,$judul,$image);
             }
               $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> File FSD berhasil di-Upload. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
             redirect('c_pmdev_dashboard');
          }

          function tsd_upload(){
                  $id =  $this->input->post('ProjectID');
                  $config['upload_path']="./assets/doc";
                  $config['allowed_types']='gif|jpg|png|doc|docx|pdf';
                  // $config['encrypt_name'] = TRUE;

                  $this->load->library('upload',$config);
                  if($this->upload->do_upload("TSD")){
                      $data = array('upload_data' => $this->upload->data());

                      $judul= $this->input->post('NameTSD');
                      $image= $data['upload_data']['file_name'];
                      $flag = 1;

                      $this->pmdev_model->simpan_tsd_upload($id,$judul,$image, $flag);
                  }
                    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> File TSD berhasil di-Upload. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                  redirect('c_pmdev_dashboard');
               }

}
