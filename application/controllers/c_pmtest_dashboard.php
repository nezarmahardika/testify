<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pmtest_dashboard extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
    $this->load->model('pmtest_model');
  }


	public function index()
	{

    $data['queue'] = $this->pmtest_model->count_queue();
    $data['approve'] = $this->pmtest_model->count_approve();
    $data['ongoing'] = $this->pmtest_model->count_ongoing();

    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('PMTEST/pmtest_dashboard',$data);
    $this->load->view('layout/footer');
	}

  function list()
	{
    $pmtest=$this->session->userdata('ses_id');
    $data=array(
			'data' => $this->pmtest_model->list_project($pmtest)
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('PMTEST/track_project',$data);
    $this->load->view('layout/footer');
	}

  public function show_queue()
  {
    $data=array(
			'data' => $this->pmtest_model->queue()
		);

    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('PMTEST/pmtest_queue',$data);
    $this->load->view('layout/footer');
  }

  public function show_approve()
  {
    $data=array(
			'data' => $this->pmtest_model->approve()
		);

    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('PMTEST/pmtest_approve',$data);
    $this->load->view('layout/footer');
  }

  function show_ongoing()
  {
    $data=array(
			'data' => $this->pmtest_model->ongoing()
		);

    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('PMTEST/pmtest_ongoing',$data);
    $this->load->view('layout/footer');
  }

  function do_approve(){
      $id =  $this->input->post('ProjectID');
      $data = array(
          'ProjectID'		=> $this->input->post('ProjectID'),
          'PMTest'	=> $this->input->post('PMTest'),
          'Deadline'	=> $this->input->post('Deadline'),
      );
      $flag = 2;
      $this->pmtest_model->do_approve($data,$flag,$id);
      $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
      redirect('c_pmtest_dashboard');
  }

  function edit_testorder(){
    $id =  $this->input->post('ProjectID');
    $data = array(
      'LeadPT'	=> $this->input->post('LeadPT'),
      'LeadSIT'	=> $this->input->post('LeadSIT'),
      'LeadUAT'	=> $this->input->post('LeadUAT'),
      'LeadSAT'	=> $this->input->post('LeadSAT'),
      'LeadPTR'	=> $this->input->post('LeadPTR')
    );
    $this->pmtest_model->edit_testorder($data,$id);
    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Test lead berhasil di-assign <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('c_pmtest_dashboard/show_ongoing');
  }

}
