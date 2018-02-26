<?php
class Pemberitahuan extends CI_Controller
{

	function index()
	{
		$this->load->view('user-public/header');
		$this->load->view('user-public/pemberitahuan_view');
		$this->load->view('user-public/footer');
	}
	
}