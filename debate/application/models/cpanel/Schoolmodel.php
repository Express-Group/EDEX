<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schoolmodel extends CI_Model{
	
	private $tbl = 'school';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function insert($data){
		return $this->db->insert($this->tbl , $data);
	}
	
	public function update($data , $sid){
		$this->db->where('sid' , $sid);
		return $this->db->update($this->tbl , $data);
	}
	
	public function get_school($sid){
		return $this->db->select('*')->from($this->tbl)->where('sid' ,$sid)->get()->row_array();
	}
	
	public function get_count($search){
		return $this->db->query("SELECT s.sid FROM ".$this->tbl." as s INNER JOIN users as u ON s.created_by = u.uid WHERE ".$search."")->num_rows();
	}
	
	public function get_data($search , $perPage , $row ){
		return $this->db->query("SELECT s.sid , s.name , DATE_FORMAT(s.modified_on, '%D %M %Y %h:%i:%s %p') as modified_on , s.address , s.contact_details , s.status , u.username FROM ".$this->tbl." as s INNER JOIN users as u ON s.created_by = u.uid WHERE ".$search." ORDER BY s.sid DESC LIMIT ".$row." , ".$perPage."")->result();
	}
			
}

?>