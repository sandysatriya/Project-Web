<?php
class Profile extends CI_Controller
{
	
	function index()
	{
		$details = $this->User_model->get_user_by_id($this->session->userdata('uid'));
		$data['uname'] = $details[0]->fname . " " . $details[0]->lname;
		$data['uemail'] = $details[0]->email;
		$data['biografi'] = $details[0]->biografi;
		$this->load->view('user-public/header');
		$this->load->view('user-public/profile_view', $data);
		$this->load->view('user-public/footer');
		$this->load->view('user-public/profile_modal');
	}
	
	// Add Profile informartion from view
	public function create() {
		$data = array(
			'biografi' => $this->input->post('biografi_textarea'),
			);
		$insert = $this->User_model->insert_user($data);
		echo json_encode(array("status" => TRUE));
	}
	
	public function update() {
		$data = array(
			'biografi' => $this->input->post('biografi_textarea'),
			);
		$this->User_model->profile_update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}
	
	public function read($id) {
		$data = $this->User_model->get_user_by_id($id);
		echo json_encode($data);
	}
	
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('login');
	}
}