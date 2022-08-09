<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participantmodel extends CI_Model{
	
	private $tbl = 'participant';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function update_data($data , $id){
		$this->db->where('pid' ,$id);
		return $this->db->update($this->tbl , $data);
		
	}
	
	public function get_debate($search=''){
		return $this->db->query("SELECT debate_id , DATE_FORMAT(schedule_date, '%D %M %Y %h:%i:%s %p') as schedule_date , category , participant_limit , topic FROM debate WHERE status=1 ".$search."")->result();
	}
	
	public function get_details($debate_id , $type){
		
		switch($type){
			case 2:
				return $this->db->select('pid')->from($this->tbl)->where(['debate_id' => $debate_id , 'otp_verified' => 1 ,'status'=> 1])->get()->num_rows();
			break;
			case 3:
				return $this->db->select('pid')->from($this->tbl)->where(['debate_id' => $debate_id , 'otp_verified' => 1 ,'status'=> 2])->get()->num_rows();
			break;
			case 4:
				return $this->db->select('pid')->from($this->tbl)->where(['debate_id' => $debate_id , 'otp_verified' => 1 ,'status'=> 0])->get()->num_rows();
			break;
			default:
				return $this->db->select('pid')->from($this->tbl)->where(['debate_id' => $debate_id , 'otp_verified' => 1 ])->get()->num_rows();
			break;
		}
		
	}
	
	public function get_participant($debate_id , $search=''){
		$data['participant'] = $this->db->query("SELECT pid , name , age , gender , phone_number , email , status , DATE_FORMAT(created_on, '%D %M %Y %h:%i:%s %p') as created_on FROM ".$this->tbl." WHERE status=0 AND debate_id='".$debate_id."' ".$search." ORDER BY created_by DESC")->result();
		$data['debate'] = $this->db->select("topic, debate_id , DATE_FORMAT(schedule_date, '%D %M %Y %h:%i:%s %p') as schedule_date , category , participant_limit , topic")->from('debate')->where(['status' => 1 , 'debate_id' => $debate_id])->get()->row_array();
		return $data;
	}
	public function get_participants($pid='' , $search=''){
		if($pid==''){
			return $this->db->query("SELECT p.pid ,p.debate_id , p.name , p.dob , p.gender , p.phone_number , p.email , p.school , p.class , p.about_me ,p.user_image , p.id_image , p.status , d.topic , d.schedule_date , s.name as school_name FROM participant as p LEFT JOIN debate as d ON p.debate_id=d.debate_id INNER JOIN school as s ON p.school = s.sid  ".$search." ORDER BY p.status ASC")->result();
		}else{
			return $this->db->query("SELECT p.pid ,p.debate_id , p.name , p.dob , p.gender , p.phone_number , p.email , p.school , p.class , p.about_me ,p.user_image , p.id_image , p.status , d.topic , d.schedule_date , d.description , d.category , d.presenter , d.debate_image , s.name as school_name FROM participant as p LEFT JOIN debate as d ON p.debate_id=d.debate_id INNER JOIN school as s ON p.school = s.sid WHERE p.pid='".$pid."'")->row_array(); 
		}
	}
	
	public function get_school(){
		return $this->db->select('sid , name')->from('school')->where('status' , 1)->get()->result();
	}
		
}

?>