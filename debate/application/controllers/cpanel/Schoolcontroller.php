<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Schoolcontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('cpanel/schoolmodel');
	}
	
	public function index(){
		$this->load->library('pagination'); 
		$data['title'] = 'School | ENPL';
		$data['template'] = 'school';
		$search=" s.sid!=''";
		$suffix = '';
		$perPage = 20;
		if($this->input->get('id')!=''){
			if(is_numeric($this->input->get('id'))){
				$search .=' AND s.sid="'.trim($this->input->get('id')).'"';
			}else{
				$search .=' AND s.name LIKE "%'.trim($this->input->get('id')).'%"';
			}
			$suffix .= '&id='.trim($this->input->get('id'));
		}
		if($this->input->get('status')!=''){
			$search .=' AND s.status="'.trim($this->input->get('status')).'"';
			$suffix .= '&status='.trim($this->input->get('status'));
		}
		$row = ($this->input->get('per_page')!='') ? $this->input->get('per_page') : 0;
		$data['total_rows'] = $this->schoolmodel->get_count($search); 
		$config = custom_pagination([base_url('admin/school') ,$data['total_rows'] , $perPage ,$suffix]);
		$this->pagination->initialize($config);
		$data['pager'] = str_replace('<a' ,'<a class="page-link" ',$this->pagination->create_links());
		$data['data'] = $this->schoolmodel->get_data($search , $perPage , $row);
		$this->load->view('cpanel/common' , $data);
	}
	
	public function add(){
		$this->form_validation->set_rules('schoolname', 'School Name', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Add School | ENPL';
			$data['template'] = 'add_school';
			$this->load->view('cpanel/common' , $data);
		}else{
			$data['name'] =  $this->input->post('schoolname');
			$data['address'] =  trim($this->input->post('address'));
			$data['contact_details'] =  trim($this->input->post('contact'));
			$data['status'] =  $this->input->post('status');
			$data['created_by'] = $data['modified_by'] = $this->session->userdata('uid');
			$data['modified_on'] =  date('Y-m-d H:i:s');
			$result = $this->schoolmodel->insert($data);
			if($result==1){
				$this->session->set_flashdata('message' ,1);
				redirect('admin/school');
			}else{
				$this->session->set_flashdata('message' ,0);
				redirect('admin/school');
			}
		}
	}
	
	public function edit(){
		$sid = $this->input->get('sid');
		if($sid!='' && !is_numeric($sid)){
			redirect('admin/school');
			exit;
		}
		$data['data'] = $this->schoolmodel->get_school($sid);
		if(count($data['data'])==0){
			redirect('admin/school');
			exit;
		}
		$this->form_validation->set_rules('schoolname', 'School Name', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Edit School | ENPL';
			$data['template'] = 'add_school';
			$this->load->view('cpanel/common' , $data);
		}else{
			$data1['name'] =  $this->input->post('schoolname');
			$data1['address'] =  trim($this->input->post('address'));
			$data1['contact_details'] =  trim($this->input->post('contact'));
			$data1['status'] =  $this->input->post('status');
			$data1['modified_by'] = $this->session->userdata('uid');
			$data1['modified_on'] =  date('Y-m-d H:i:s');
			$result = $this->schoolmodel->update($data1 , $sid);
			if($result==1){
				$this->session->set_flashdata('message' ,2);
				redirect('admin/school');
			}else{
				$this->session->set_flashdata('message' ,0);
				redirect('admin/school');
			}
		}	
	}
}
?>