<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_gh extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
    $this->load->model('gh_model');
  }

  function list_new_project()
	{
    $data=array(
			'data' => $this->gh_model->new_project()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_new_all',$data);
    $this->load->view('layout/footer');
	}

  function list_new_queue()
	{
    $data=array(
			'data' => $this->gh_model->new_queue()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_new_queue',$data);
    $this->load->view('layout/footer');
	}

  function list_new_done()
	{
    $data=array(
			'data' => $this->gh_model->new_done()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_new_done',$data);
    $this->load->view('layout/footer');
	}

  function list_new_ongoing()
	{
    $data=array(
			'data' => $this->gh_model->new_ongoing()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_new_ongoing',$data);
    $this->load->view('layout/footer');
	}

  function list_new_delay()
	{
    $data=array(
			'data' => $this->gh_model->new_delay()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_new_delay',$data);
    $this->load->view('layout/footer');
	}

  function list_cr_project()
	{
    $data=array(
			'data' => $this->gh_model->cr_project()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_cr_all',$data);
    $this->load->view('layout/footer');
	}

  function list_cr_queue()
	{
    $data=array(
			'data' => $this->gh_model->cr_queue()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_cr_queue',$data);
    $this->load->view('layout/footer');
	}

  function list_cr_done()
	{
    $data=array(
			'data' => $this->gh_model->cr_done()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_cr_done',$data);
    $this->load->view('layout/footer');
	}

  function list_cr_ongoing()
	{
    $data=array(
			'data' => $this->gh_model->cr_ongoing()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_cr_ongoing',$data);
    $this->load->view('layout/footer');
	}

  function list_cr_delay()
	{
    $data=array(
			'data' => $this->gh_model->cr_delay()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_cr_delay',$data);
    $this->load->view('layout/footer');
	}

  function list_sr_project()
	{
    $data=array(
			'data' => $this->gh_model->sr_project()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_sr_all',$data);
    $this->load->view('layout/footer');
	}

  function list_sr_done()
	{
    $data=array(
			'data' => $this->gh_model->sr_done()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_sr_done',$data);
    $this->load->view('layout/footer');
	}

  function list_ir_project()
	{
    $data=array(
			'data' => $this->gh_model->ir_project()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_ir_all',$data);
    $this->load->view('layout/footer');
	}

  function list_ir_done()
	{
    $data=array(
			'data' => $this->gh_model->ir_done()
		);
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('GH/gh_ir_done',$data);
    $this->load->view('layout/footer');
	}

}
