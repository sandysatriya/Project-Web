<?php
class Pengumuman extends CI_Controller
{
	
	function index()
	{
		$this->load->view('user-company/header');
		$this->load->view('user-company/pengumuman_view');
		$this->load->view('user-company/footer');
	}
	
}