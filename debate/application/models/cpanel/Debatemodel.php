<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debatemodel extends CI_Model{
	
	private $tbl = 'debate';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function insert_data($data){
		return $this->db->insert($this->tbl , $data);
	}
	
	public function insert_sessiondata($data){
		return $this->db->insert('sessions' , $data);
	}
	
	public function update_data($data , $id){
		$this->db->where('debate_id' ,$id);
		return $this->db->update($this->tbl , $data);
		
	}
	public function update_sessiondata($data , $id){
		$this->db->where('sid' ,$id);
		return $this->db->update('sessions' , $data);
		
	}
	public function get_count($search){
		return $this->db->query("SELECT debate.debate_id FROM ".$this->tbl." as debate INNER JOIN users as user ON debate.created_by = user.uid WHERE ".$search." AND debate.status = '1'")->num_rows();
	}
	
	public function get_sessionscount($search){
		return $this->db->query("SELECT session.sid FROM sessions as session INNER JOIN debate as debate ON debate.debate_id = session.debate_id INNER JOIN users as user ON session.modified_by = user.uid WHERE ".$search."")->num_rows();
	}
	
	public function get_data($search , $perPage , $row , $orderBy){
		return $this->db->query("SELECT debate.debate_id , debate.topic , DATE_FORMAT(debate.schedule_date, '%D %M %Y %h:%i:%s %p') as schedule_date , debate.category , debate.debate_image , DATE_FORMAT(debate.modified_on, '%D %M %Y %h:%i:%s %p') as modified_on , user.username FROM ".$this->tbl." as debate INNER JOIN users as user ON debate.modified_by = user.uid WHERE ".$search." AND debate.status = '1' ORDER BY ".$orderBy." LIMIT ".$row." , ".$perPage."")->result();
	}
	public function get_sessiondata($search , $perPage , $row , $orderBy){
		return $this->db->query("SELECT session.sid , session.debate_id , session.description , session.keywords, DATE_FORMAT(session.modified_on, '%D %M %Y %h:%i:%s %p') as modified_on , debate.topic  ,  DATE_FORMAT(debate.schedule_date, '%D %M %Y %h:%i:%s %p') as schedule_date , debate.category , user.username FROM sessions as session INNER JOIN debate as debate ON session.debate_id = debate.debate_id INNER JOIN users as user ON session.modified_by= user.uid WHERE ".$search." ORDER BY ".$orderBy." LIMIT ".$row." , ".$perPage."")->result();
	}
	
	public function getDebate($id){
		return $this->db->select('*')->from($this->tbl)->where('debate_id' , $id)->get()->row_array();
	}
	public function getSession($id){
		return $this->db->select('*')->from('sessions')->where('sid' , $id)->get()->row_array();
	}
	public function getAllDebate(){
		return $this->db->select('debate_id , topic')->from($this->tbl)->where('status' , 1)->get()->result();
	}
		
}

?>