<?php
class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('user_model');
    }

    function index()
    {
        $this->load->view('layout/header');
        $this->load->view('v_user_registration');
    }

    function register()
    {
            $data = array(
              'UserID' => $this->input->post('UserID'),
              'UserFullName' => $this->input->post('UserFullName'),
              'UserName' => $this->input->post('UserName'),
              'Password' => $this->input->post('Password'),
              'UserEmail' => $this->input->post('UserEmail'),
              'UserPhone' => $this->input->post('UserPhone'),
              'UserDepartment' => $this->input->post('UserDepartment'),
              'UserGroup' => $this->input->post('UserGroup'),
              'RoleID' => $this->input->post('RoleID')
            );

            $this->user_model->insertUser($data);
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered!</div>');
            redirect('user/index');
        }
    }
?>
