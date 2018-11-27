<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('layout/header');
		$this->load->view('v_login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_dosen=$this->login_model->validate($username,$password);

        if($cek_dosen->num_rows() > 0){ //jika login sebagai dosen
						$data=$cek_dosen->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['RoleID']=='R01'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['UserID']);
		            $this->session->set_userdata('ses_nama',$data['UserName']);
		            redirect('page');

		         }elseif ($data['RoleID']=='R02'){ //akses GH
		            $this->session->set_userdata('akses','2');
								$this->session->set_userdata('ses_id',$data['UserID']);
		            $this->session->set_userdata('ses_nama',$data['UserName']);
		            redirect('page');
		         }elseif ($data['RoleID']=='R03'){ //akses PMTest
		            $this->session->set_userdata('akses','3');
								$this->session->set_userdata('ses_id',$data['UserID']);
		            $this->session->set_userdata('ses_nama',$data['UserName']);
		            redirect('page');
		         }elseif ($data['RoleID']=='R04'){ //akses PMDev
		            $this->session->set_userdata('akses','4');
								$this->session->set_userdata('ses_id',$data['UserID']);
		            $this->session->set_userdata('ses_nama',$data['UserName']);
		            redirect('page');
		         }elseif ($data['RoleID']=='R05'){ //akses PTLead
		            $this->session->set_userdata('akses','5');
								$this->session->set_userdata('ses_id',$data['UserID']);
		            $this->session->set_userdata('ses_nama',$data['UserName']);
		            redirect('page');
		         }elseif ($data['RoleID']=='R06'){ //akses SIT Lead
		            $this->session->set_userdata('akses','6');
								$this->session->set_userdata('ses_id',$data['UserID']);
		            $this->session->set_userdata('ses_nama',$data['UserName']);
		            redirect('page');
		         }elseif ($data['RoleID']=='R07'){ //akses UAT Lead
		            $this->session->set_userdata('akses','7');
								$this->session->set_userdata('ses_id',$data['UserID']);
		            $this->session->set_userdata('ses_nama',$data['UserName']);
		            redirect('page');
		         }elseif ($data['RoleID']=='R08'){ //akses SAT Lead
		            $this->session->set_userdata('akses','8');
								$this->session->set_userdata('ses_id',$data['UserID']);
		            $this->session->set_userdata('ses_nama',$data['UserName']);
		            redirect('page');
		         }elseif ($data['RoleID']=='R09'){ //akses PMDev
		            $this->session->set_userdata('akses','9');
								$this->session->set_userdata('ses_id',$data['UserID']);
		            $this->session->set_userdata('ses_nama',$data['UserName']);
		            redirect('page');
		         }

        }else{  // jika username dan password tidak ditemukan atau salah
						$url=base_url();
						echo $this->session->set_flashdata('msg','Username Atau Password Salah');
						redirect($url);
				}
    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

}
