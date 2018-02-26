<?php
class Iklan extends CI_Controller
{
	
	function index()
	{
		$this->load->view('user-company/header');
		$this->load->view('user-company/iklan_view');
		$this->load->view('user-company/footer');
	}
	
}