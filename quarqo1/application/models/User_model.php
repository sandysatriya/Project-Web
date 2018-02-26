<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	
	var $table = "user";
	
	function __construct()
    {
        parent::__construct();
    }
	
	// cek info login di DB
	function get_user($email, $pwd)
	{
		$this->db->where('email', $email);
		$this->db->where('password', md5($pwd));
        $query = $this->db->get('user');
		return $query->result();
	}
	
	// get user / ambil info user
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
	
	// insert / tambah
	function insert_user($data)
    {
		return $this->db->insert('user', $data);
	}
	
	// Add Profile information from controller
	public function profile_add($data) {
		
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	
	public function profile_update($where, $data) {
		
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
}?>