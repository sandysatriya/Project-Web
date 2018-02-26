<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct(){

		parent::__construct();
		$this->load->model('m_detail');
	}

	public function index()
	{
		$data['sql']=$this->m_detail->getData();
		
		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}


}
