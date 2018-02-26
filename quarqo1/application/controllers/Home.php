<?php
class Home extends CI_Controller
{
	
	function index()
	{
		$this->load->view('landing/header');
		$this->load->view('home_view');
		$this->load->view('landing/footer');
	}

}


