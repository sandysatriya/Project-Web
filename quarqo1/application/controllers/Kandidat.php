<?php
class Kandidat extends CI_Controller
{
	
	function index()
	{
		$this->load->view('user-company/header');
		$this->load->view('user-company/kandidat_view');
		$this->load->view('user-company/footer');
	}
	
}