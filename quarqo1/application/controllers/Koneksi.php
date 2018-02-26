<?php
class Koneksi extends CI_Controller
{
	
	function index()
	{
		$this->load->view('user-public/header');
		$this->load->view('user-public/koneksi_view');
		$this->load->view('user-public/footer');
	}
	
}