<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	
	public function __construct(){

		parent::__construct();
		$this->load->model('m_detail');
	}

	public function index()
	{
		$data['sql']=$this->m_detail->getData();
		
		$this->load->view('templates/header');
		$this->load->view('food', $data);
		$this->load->view('templates/footer');

	}

	public function detail_food($id)
	{
		$data['pil']='edit';
		$data['sql']=$this->m_detail->edit($id);
		
		$this->load->view('templates/header');
		$this->load->view('detail_food', $data);
		$this->load->view('templates/footer');

	}

	
}
