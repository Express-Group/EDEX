<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homemodel extends CI_Model{
	
	private $debatetbl = 'debate';
	private $participanttbl = 'participant';
	private $sessionstbl = 'sessions';
	private $votetbl = 'vote';
	private $schooltbl = 'school';
	
	public function __construct(){
		parent::__construct();
		$this->load->library("memcached_library");
	}
	
	public function get_alldebate($type=''){
		if($type!=''){
			$CacheID = "SELECT DEBATE".$type;
			if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){
				$result = $this->db->select('topic , debate_id , schedule_date , debate_image ,description')->from($this->debatetbl)->where(['status' => 1 , 'type' => $type])->get()->result();
				$this->memcached_library->add($CacheID,$result);
			}else{
				$result = $this->memcached_library->get($CacheID);
			}
			return $result;
		}else{
			$CacheID = "SELECT DEBATE";
			if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){
				$result = $this->db->select('topic , debate_id , schedule_date , debate_image ,description')->from($this->debatetbl)->where('status' ,1)->get()->result();
				$this->memcached_library->add($CacheID,$result);
			}else{
				$result = $this->memcached_library->get($CacheID);
			}
			return $result;
		}
		
	}
	
	public function get_school(){
		$CacheID = "SELECT SCHOOL";
		if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){
			$result = $this->db->select('sid , name')->from($this->schooltbl)->where('status' ,1)->get()->result();
			$this->memcached_library->add($CacheID,$result);
		}else{
			$result = $this->memcached_library->get($CacheID);
		}
		return $result;
	}
	
	public function verifyUser($data){ 
		return $this->db->select('otp_verified ,pid')->from($this->participanttbl)->where('phone_number' ,$data['phone_number'])->or_where('email' ,$data['email'])->get()->row_array();
	}
	
	public function insert_participant($data){
		$this->db->insert($this->participanttbl , $data);
		return $this->db->insert_id();
	}
	
	public function update_participant($data ,$pid){
		$this->db->where('pid' , $pid);
		return $this->db->update($this->participanttbl , $data);
	}
	
	public function participants($id){
		$CacheID = "SELECT SESSION participants".$id;
		if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){
			$result = $this->db->select('*')->from($this->participanttbl)->where(['otp_verified' => 1 , 'pid' => $id])->get();
			$this->memcached_library->add($CacheID,$result);
		}else{
			$result = $this->memcached_library->get($CacheID);
		}
		return $result;
	}
	
	public function get_debate($debate_id){
		$CacheID = "SELECT SESSION DEBATE12".$debate_id;
		if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){
			$result = $this->db->select('*')->from($this->debatetbl)->where(['status' => 1 , 'debate_id' => $debate_id])->get()->row_array();
			$this->memcached_library->add($CacheID,$result);
		}else{
			$result = $this->memcached_library->get($CacheID);
		}
		return $result;
	}
	
	public function get_sessions($debate_id){
		return $this->db->select('*')->from($this->sessionstbl)->where(['status' => 1 , 'debate_id' => $debate_id])->get()->result();
	}
	
	public function get_participants($debate_id){
		//return $this->db->select('*')->from($this->participanttbl)->where(['status' => 1 , 'debate_id' => $debate_id , 'otp_verified' => 1])->get()->result();
		$CacheID = "SELECT p.pid ,p.debate_id , p.name  , p.dob , p.age , p.gender , p.phone_number , p.email , p.school , p.class , p.about_me , p.user_image , s.name as school_name FROM ".$this->participanttbl." AS p INNER JOIN ".$this->schooltbl." AS s ON p.school = s.sid WHERE p.status=1 AND p.debate_id='".$debate_id."' AND p.otp_verified=1";
		if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){
			$result = $this->db->query("SELECT p.pid ,p.debate_id , p.name  , p.dob , p.age , p.gender , p.phone_number , p.email , p.school , p.class , p.about_me , p.user_image , s.name as school_name FROM ".$this->participanttbl." AS p INNER JOIN ".$this->schooltbl." AS s ON p.school = s.sid WHERE p.status=1 AND p.debate_id='".$debate_id."' AND p.otp_verified=1")->result();
			$this->memcached_library->add($CacheID,$result);
		}else{
			$result = $this->memcached_library->get($CacheID);
		}
		return $result;
	}
	
	public function set_vote($sid , $debate_id , $pid , $bestof , $count , $type){
		$voteDetails = $this->db->select('vid , vote')->from($this->votetbl)->where(['sid' => $sid , 'debate_id' => $debate_id , 'title' => $bestof , 'pid' => $pid , 'type' => $type])->limit(1)->get();
		if($voteDetails->num_rows()==0){
			return $this->db->insert($this->votetbl , ['sid' => $sid , 'debate_id' => $debate_id , 'pid' => $pid ,  'title' => $bestof , 'vote' => 1 ,'type'=> $type]);
		}else{
			$details = $voteDetails->row_array();
			$count = (int) $details['vote'] + 1;
			$this->db->where('vid' , $details['vid']);
			$this->db->update($this->votetbl , ['vote' => $count]);
			return $count;
		}
	}
	
	public function updateOtp($otp , $uid){
		$result = $this->db->select('pid')->from($this->participanttbl)->where(['pid' => $uid , 'otp' => $otp])->get();
		if($result->num_rows()==1){
			$this->db->where('pid' ,$uid);
			return $this->db->update($this->participanttbl , ['otp_verified' => 1]);
		}else{
			return 0;
		}
		
	}
}

?>