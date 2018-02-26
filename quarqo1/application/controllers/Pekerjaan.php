<?php
class Pekerjaan extends CI_Controller
{
	
	function index()
	{
		$this->load->view('user-public/header');
		$this->load->view('user-public/pekerjaan_view');
		$this->load->view('user-public/footer');
	}
	
}