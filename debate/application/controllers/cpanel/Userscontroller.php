<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Userscontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('cpanel/usersmodel');
	}
	
	public function index(){		
		$this->load->library('pagination'); 
		$data['title'] = 'Users | ENPL';
		$data['template'] = 'users';
		$search = " uid!=''";
		$orderBy = " uid DESC";
		$perPage = 20;
		$suffix = '';
		if($this->input->get('uid')!=''){
			if(is_numeric($this->input->get('uid'))){
				$search .= " AND uid='".trim($this->input->get('uid'))."'";
			}else{
				$search .= " AND ( username LIKE '%".trim($this->input->get('uid'))."%' OR firstname LIKE '%".trim($this->input->get('uid'))."%' OR lastname LIKE '%".trim($this->input->get('uid'))."%')";
			}
			$suffix .= '&uid='.trim($this->input->get('uid'));
		}
		if($this->input->get('status')!=''){
			$search .= " AND status='".trim($this->input->get('status'))."'";
			$suffix .= '&status='.trim($this->input->get('status'));
		}
		$row = ($this->input->get('per_page')!='') ? $this->input->get('per_page') : 0;
		$data['total_rows'] = $this->usersmodel->get_count($search);
		$config = custom_pagination([base_url('admin/users') ,$data['total_rows'] , $perPage ,$suffix]);
		$this->pagination->initialize($config);
		$data['pager'] = str_replace('<a' ,'<a class="page-link" ',$this->pagination->create_links());
		$data['data'] = $this->usersmodel->get_data($search , $perPage , $row , $orderBy);
		$this->load->view('cpanel/common' , $data);
	}
	
	public function create(){
		$this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
		$this->form_validation->set_rules('username', 'User name', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('repassword', 'Re-Enter Password', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		$this->form_validation->set_rules('repassword', 'Re-Enter Password', 'callback_validate_password');
		$this->form_validation->set_message('validate_password','Password Mismatch');
		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Create User | ENPL';
			$data['template'] = 'create_user';
			$this->load->view('cpanel/common' , $data);
		}else{
			$data['username'] =  $this->input->post('username');
			$data['firstname'] =  $this->input->post('firstname');
			$data['lastname'] =  $this->input->post('lastname');
			$data['status'] =  $this->input->post('status');
			$data['password'] =  md5($this->input->post('password'));
			$data['created_by'] =  $data['modified_by'] = $this->session->userdata('uid');
			$data['modified_on'] =  date('Y-m-d H:i:s');
			$result = $this->usersmodel->insert_data($data);
			if($result==1){
				$this->session->set_flashdata('message' ,1);
				redirect('admin/users');
			}else{
				$this->session->set_flashdata('message' ,0);
				redirect('admin/users');
			}
		}
	}
	
	public function edit(){
		$this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
		$this->form_validation->set_rules('username', 'User name', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('repassword', 'Re-Enter Password', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		$this->form_validation->set_rules('repassword', 'Re-Enter Password', 'callback_validate_password');
		$this->form_validation->set_message('validate_password','Password Mismatch');
		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Edit User | ENPL';
			$data['template'] = 'create_user';
			$this->load->view('cpanel/common' , $data);
		}else{
			$data['username'] =  $this->input->post('username');
			$data['firstname'] =  $this->input->post('firstname');
			$data['lastname'] =  $this->input->post('lastname');
			$data['status'] =  $this->input->post('status');
			$data['password'] =  md5($this->input->post('password'));
			$data['created_by'] =  $data['modified_by'] = $this->session->userdata('uid');
			$data['modified_on'] =  date('Y-m-d H:i:s');
			// $result = $this->usersmodel->insert_data($data);
			// if($result==1){
				// $this->session->set_flashdata('message' ,1);
				// redirect('admin/users');
			// }else{
				// $this->session->set_flashdata('message' ,0);
				// redirect('admin/users');
			// }
		}
	}
	
	public function profile(){
		$uid = trim($this->input->get('id'));
		if($uid=='' || !is_numeric($uid)){
			redirect('admin/dashboard');
		}
		/* $this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
		$this->form_validation->set_rules('username', 'User name', 'required|trim'); */
		$data['title'] = 'Edit Profile | ENPL';
		$data['template'] = 'edit_profile';
		$data['details'] = $this->usersmodel->getDetails($uid);
		$this->load->view('cpanel/common' , $data);
	}
	
	public function validate_password($value){
		if(@$_POST['password']!=$value){
			return false;
		}else{
			return true;
		}
	}
}
?>