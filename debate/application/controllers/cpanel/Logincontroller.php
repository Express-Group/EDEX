<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logincontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('cpanel/login');
	}
	
	public function login(){
		$this->load->model('cpanel/loginmodel');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|alpha');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if($this->form_validation->run() == FALSE){
			$this->load->view('cpanel/login');
		}else{
			$data['username'] = $this->input->post('username' , true);
			$data['password'] = md5($this->input->post('password' , true));
			$result = $this->loginmodel->validate_user($data);
			if(is_array($result) && count($result) > 0){
				if($result['status']==0){
					$this->session->set_flashdata('message' ,2);
					redirect('admin');
					exit;
				}
				$this->loginmodel->updateLogin($result['uid']);
				$this->session->set_userdata('uid' , $result['uid']);
				$this->session->set_userdata('username' , $data['username']);
				$this->session->set_userdata('firstname' , $result['firstname']);
				$this->session->set_userdata('lastname' , $result['lastname']);
				$this->session->set_userdata('last_login' , $result['last_login']);
				$this->session->set_userdata('userdata' , $result);
				redirect('admin/dashboard');
			}else{
				$this->session->set_flashdata('message' ,1);
				redirect('admin');
			}
		}
	}
	
	public function logout(){
		$this->session->userdata = array();
		$this->session->sess_destroy();
		redirect('admin');
	}
}
?>