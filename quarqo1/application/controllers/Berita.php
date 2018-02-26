<?php
class Berita extends CI_Controller
{
	
	function index()
	{
		$this->load->view('user-public/header');
		$this->load->view('user-public/berita_view');
		$this->load->view('user-public/footer');
	}
	
}