<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usersmodel extends CI_Model{
	
	private $tbl = 'users';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function insert_data($data){
		return $this->db->insert($this->tbl , $data);
	}
	
	public function update_data($data , $id){
		$this->db->where('debate_id' ,$id);
		return $this->db->update($this->tbl , $data);
		
	}
	
	public function get_count($search){
		return $this->db->query("SELECT uid FROM ".$this->tbl." WHERE ".$search."")->num_rows();
	}
	
	public function get_data($search , $perPage , $row , $orderBy){
		return $this->db->query("SELECT uid , username , firstname , lastname , status , DATE_FORMAT(modified_on, '%D %M %Y %h:%i:%s %p') as modified_on FROM ".$this->tbl." WHERE ".$search." ORDER BY ".$orderBy." LIMIT ".$row." , ".$perPage."")->result();
	}
	
	public function getDebate($id){
		return $this->db->select('*')->from($this->tbl)->where('debate_id' , $id)->get()->row_array();
	}
	
	public function getDetails($id){
		return $this->db->select('*')->from($this->tbl)->where('uid' , $id)->get()->row_array();
	}
		
}

?>