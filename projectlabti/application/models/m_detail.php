<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_detail extends CI_model
{
	
	public function getData()
	{
		$sql=$this->db->query("SELECT * FROM food");
		return $sql;
	}

	public function edit($id) {
		$this->db->where('id',$id);
		return $this->db->get('food');
	}

}