<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Training_model extends CI_Model
{
	
	public function getSeminar()
	{
		$sql=$this->db->query('SELECT * FROM seminar');
		return $sql;
	}

	public function getWorkshop()
	{
		$sql2=$this->db->query('SELECT * FROM workshop');
		return $sql2;
	}

	public function getPelatihan()
	{
		$sql3=$this->db->query('SELECT * FROM pelatihan');
		return $sql3;
	}


	public function getModalSeminar($id)
	{
		$modal=$this->db->query("SELECT * FROM seminar where id=$id");
		return $modal;
	}

	public function getModalWorkshop($id)
	{
		$modal=$this->db->query("SELECT * FROM workshop where id=$id");
		return $modal;
	}

	public function getModalPelatihan($id)
	{
		$modal=$this->db->query("SELECT * FROM pelatihan where id=$id");
		return $modal;
	}

}

?>