<?php
class Login extends CI_Controller{

 function __construct(){
  parent::__construct();
  $this->load->model('data_login');

 }

 function index(){
  $this->load->view('admin/login-admin');
 }

 function cek_login(){
  $username = $this->input->post('username');
  $password = $this->input->post('password');
  $where = array(
   'username' => $username,
   'password' => md5($password)
   );
  $cek = $this->data_login->cek_login("admin",$where)->num_rows();
  if($cek > 0){

   $data_session = array(
    'nama' => $username,
    'status' => "login"
    );

   $this->session->set_userdata($data_session);

   redirect(base_url("admin"));

  } else {
  	$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Username atau Password Salah !</div>');
    redirect(base_url('login'));
  }
 }

 function logout(){
  $this->session->sess_destroy();
  redirect(base_url('home'));
 }
}
?>