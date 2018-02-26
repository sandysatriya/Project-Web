<?php
class Profilecompany extends CI_Controller
{
	
	function index()
	{
		$details = $this->User_model->get_user_by_id($this->session->userdata('uid'));
		$data['uname'] = $details[0]->fname . " " . $details[0]->lname;
		$data['uemail'] = $details[0]->email;
		$data['biografi'] = $details[0]->biografi;
		$this->load->view('user-company/header');
		$this->load->view('user-company/profile_company_view', $data);
		$this->load->view('user-company/footer');
	}
	
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('logincompany');
	}
}
