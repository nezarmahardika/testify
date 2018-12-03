<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
    $this->load->model('pmdev_model');
    $this->load->model('pmtest_model');
    $this->load->model('ptlead_model');
    $this->load->model('ptrlead_model');
    $this->load->model('satlead_model');
    $this->load->model('sitlead_model');
    $this->load->model('uatlead_model');
    $this->load->model('gh_model');
  }

  function index(){
    if ($this->session->userdata('akses')=='2') {
      $data['semua'] = $this->gh_model->count_new_project();
      $data['ongoing'] = $this->gh_model->count_new_ongoing();
      $data['queue'] = $this->gh_model->count_new_queue();
      $data['done'] = $this->gh_model->count_new_done();
      $data['delay'] = $this->gh_model->count_new_delay();
      $data['semua_cr'] = $this->gh_model->count_cr_project();
      $data['ongoing_cr'] = $this->gh_model->count_cr_ongoing();
      $data['queue_cr'] = $this->gh_model->count_cr_queue();
      $data['done_cr'] = $this->gh_model->count_cr_done();
      $data['delay_cr'] = $this->gh_model->count_cr_delay();
      $data['done_sr'] = $this->gh_model->count_sr_done();
      $data['semua_sr'] = $this->gh_model->count_sr_project();
      $data['done_ir'] = $this->gh_model->count_ir_done();
      $data['semua_ir'] = $this->gh_model->count_ir_project();
      $this->load->view('layout/header');
      $this->load->view('layout/sidebar');
      $this->load->view('GH/gh_dashboard', $data);
      $this->load->view('layout/footer');
    }

    if ($this->session->userdata('akses')=='1') {
      $this->load->view('v_dashboard');
    }

    if ($this->session->userdata('akses')=='3') {
      $data['queue'] = $this->pmtest_model->count_queue();
      $data['approve'] = $this->pmtest_model->count_approve();
      $data['ongoing'] = $this->pmtest_model->count_ongoing();
      $this->load->view('layout/header');
      $this->load->view('layout/sidebar');
      $this->load->view('PMTEST/pmtest_dashboard', $data);
      $this->load->view('layout/footer');
    }

    if ($this->session->userdata('akses')=='4') {
      $pmdev=$this->session->userdata('ses_id');
      $data=array(
        'data' => $this->pmdev_model->show_project($pmdev)
      );
      $this->load->view('layout/header');
      $this->load->view('layout/sidebar');
      $this->load->view('PMDEV/pmdev_dashboard',$data);
      $this->load->view('layout/footer');
    }

    if ($this->session->userdata('akses')=='5') {
      $ptlead=$this->session->userdata('ses_id');
      $data=array(
  			'data' => $this->ptlead_model->list_project($ptlead)
  		);
      $this->load->view('layout/header');
      $this->load->view('layout/sidebar');
      $this->load->view('PTLEAD/ptlead_dashboard',$data);
      $this->load->view('layout/footer');
    }

    if ($this->session->userdata('akses')=='6') {
      $sitlead=$this->session->userdata('ses_id');
      $data=array(
  			'data' => $this->sitlead_model->list_project($sitlead)
  		);
      $this->load->view('layout/header');
      $this->load->view('layout/sidebar');
      $this->load->view('SITLEAD/sitlead_dashboard',$data);
      $this->load->view('layout/footer');
    }

    if ($this->session->userdata('akses')=='7') {
        $uatlead=$this->session->userdata('ses_id');
      $data=array(
  			'data' => $this->uatlead_model->list_project($uatlead)
  		);
      $this->load->view('layout/header');
      $this->load->view('layout/sidebar');
      $this->load->view('UATLEAD/uatlead_dashboard',$data);
      $this->load->view('layout/footer');
    }

    if ($this->session->userdata('akses')=='8') {
      $satlead=$this->session->userdata('ses_id');
      $data=array(
  			'data' => $this->satlead_model->list_project($satlead)
  		);
      $this->load->view('layout/header');
      $this->load->view('layout/sidebar');
      $this->load->view('SATLEAD/satlead_dashboard',$data);
      $this->load->view('layout/footer');
    }

    if ($this->session->userdata('akses')=='9') {
      $ptrlead=$this->session->userdata('ses_id');
      $data=array(
  			'data' => $this->ptrlead_model->list_project($ptrlead)
  		);
      $this->load->view('layout/header');
      $this->load->view('layout/sidebar');
      $this->load->view('PTRLEAD/ptrlead_dashboard',$data);
      $this->load->view('layout/footer');
    }

    if ($this->session->userdata('akses')=='10') {

      $this->load->view('tester_screen');
    }
  }

  function data_mahasiswa(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('v_mahasiswa');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }

  }

  function input_nilai(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('v_input_nilai');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function krs(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      $this->load->view('v_krs');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  function lhs(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      $this->load->view('v_lhs');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
