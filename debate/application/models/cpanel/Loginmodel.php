<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model{
	
	private $tbl = 'users';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function validate_user($data){
		return $this->db->query("SELECT uid , status , username , firstname , lastname , last_login FROM ".$this->tbl." WHERE username='".$data['username']."' AND password='".$data['password']."'")->row_array();
	}
	
	public function updateLogin($id){
		$this->db->where('uid' , $id);
		return $this->db->update($this->tbl , ['last_login' => date('Y-m-d H:i:s')]);
	}
		
}

?>