<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Debatecontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('cpanel/debatemodel');
	}
	
	public function index(){
		$this->load->library('pagination'); 
		$data['title'] = 'Debate | ENPL';
		$data['template'] = 'debate';
		$search = " debate.debate_id!=''";
		$orderBy = " debate.debate_id DESC";
		$perPage = 20;
		$suffix = '';
		if($this->input->get('debate_id')!=''){
			if(is_numeric($this->input->get('debate_id'))){
				$search .= " AND debate.debate_id='".trim($this->input->get('debate_id'))."'";
			}else{
				$search .= " AND debate.topic LIKE '%".trim($this->input->get('debate_id'))."%'";
			}
			$suffix .= '&debate_id='.trim($this->input->get('debate_id'));
		}
		if($this->input->get('category')!=''){
			$search .= " AND debate.category='".trim($this->input->get('category'))."'";
			$suffix .= '&category='.trim($this->input->get('category'));
		}
		$row = ($this->input->get('per_page')!='') ? $this->input->get('per_page') : 0;
		$data['total_rows'] = $this->debatemodel->get_count($search);
		$config = custom_pagination([base_url('admin/debate') ,$data['total_rows'] , $perPage ,$suffix]);
		$this->pagination->initialize($config);
		$data['pager'] = str_replace('<a' ,'<a class="page-link" ',$this->pagination->create_links());
		$data['data'] = $this->debatemodel->get_data($search , $perPage , $row , $orderBy);
		$this->load->view('cpanel/common' , $data);
	}
	
	public function create(){
		$this->form_validation->set_rules('topic', 'Topic', 'required|trim');
		$this->form_validation->set_rules('description', 'Description', 'required|trim');
		$this->form_validation->set_rules('schedule_date', 'Schedule Date & Time', 'required|trim');
		$this->form_validation->set_rules('category', 'Category', 'required|trim');
		$this->form_validation->set_rules('limit', 'Participant Limit', 'required|trim');
		$this->form_validation->set_rules('presenter', 'Presenter', 'required|trim');
		$this->form_validation->set_rules('debate_image', 'Debate Image', 'required|trim');
		$this->form_validation->set_rules('voting_status', 'Voting Status', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		if(isset($_FILES['debate_image']['name']) && $_FILES['debate_image']['name']!=''){
			$this->form_validation->set_rules('debate_image', 'Debate Image', 'callback_validate_image');
		}
		$this->form_validation->set_message('validate_image','Supports only jpg|jpeg');
		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Create Debate | ENPL';
			$data['template'] = 'create_debate';
			$this->load->view('cpanel/common' , $data);
		}else{
			if(isset($_FILES['debate_image']['name']) && $_FILES['debate_image']['name']!=''){
				$this->load->library('upload');
				$config['upload_path'] = ASSETS_BASE_PATH.DEBATE_IMG_PATH;
				$config['allowed_types'] = '*';
				$this->upload->initialize($config);
				if($this->upload->do_upload('debate_image')){
					$imageresult = $this->upload->data();
					$data['debate_image'] = $imageresult['file_name'];
				}
			}
			$data['topic'] =  $this->input->post('topic');
			$data['description'] =  $this->input->post('description');
			$data['schedule_date'] =  date('Y-m-d H:i:s',strtotime($this->input->post('schedule_date')));
			$data['category'] =  $this->input->post('category');
			$data['participant_limit'] =  $this->input->post('limit');
			$data['voting_status'] =  $this->input->post('voting_status');
			$data['presenter'] =  $this->input->post('presenter');
			$data['type'] =  $this->input->post('type');
			$data['created_by'] =  $data['modified_by'] = $this->session->userdata('uid');
			$data['modified_on'] =  date('Y-m-d H:i:s');
			$result = $this->debatemodel->insert_data($data);
			if($result==1){
				$this->session->set_flashdata('message' ,1);
				redirect('admin/debate');
			}else{
				$this->session->set_flashdata('message' ,0);
				redirect('admin/debate');
			}
		}
	}
	
	public function edit(){
		$debateId = $this->input->get('id');
		if(!is_numeric($debateId) || $debateId==''){
			redirect('admin/debate');
			exit;
		}
		$this->form_validation->set_rules('topic', 'Topic', 'required|trim');
		$this->form_validation->set_rules('description', 'Description', 'required|trim');
		$this->form_validation->set_rules('schedule_date', 'Schedule Date & Time', 'required|trim');
		$this->form_validation->set_rules('category', 'Category', 'required|trim');
		$this->form_validation->set_rules('limit', 'Participant Limit', 'required|trim');
		$this->form_validation->set_rules('presenter', 'Presenter', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		$this->form_validation->set_rules('voting_status', 'Voting Status', 'required|trim');
		if(isset($_FILES['debate_image']['name']) && $_FILES['debate_image']['name']!=''){
			$this->form_validation->set_rules('debate_image', 'Debate Image', 'callback_validate_image');
		}
		$this->form_validation->set_message('validate_image','Supports only jpg|jpeg');
		if($this->form_validation->run() == FALSE){
			$data['data'] = $this->debatemodel->getDebate($debateId);
			$data['title'] = 'Edit Debate | ENPL';
			$data['template'] = 'edit_debate';
			$this->load->view('cpanel/common' , $data);
		}else{
			if(isset($_FILES['debate_image']['name']) && $_FILES['debate_image']['name']!=''){
				$this->load->library('upload');
				$config['upload_path'] = ASSETS_BASE_PATH.DEBATE_IMG_PATH;
				$config['allowed_types'] = '*';
				$this->upload->initialize($config);
				if($this->upload->do_upload('debate_image')){
					$imageresult = $this->upload->data();
					$data['debate_image'] = $imageresult['file_name'];
					unlink(ASSETS_BASE_PATH.DEBATE_IMG_PATH.$this->input->post('temp_image'));
				}
			}
			$data['topic'] =  $this->input->post('topic');
			$data['description'] =  $this->input->post('description');
			$data['schedule_date'] =  date('Y-m-d H:i:s',strtotime($this->input->post('schedule_date')));
			$data['category'] =  $this->input->post('category');
			$data['participant_limit'] =  $this->input->post('limit');
			$data['voting_status'] =  $this->input->post('voting_status');
			$data['presenter'] =  $this->input->post('presenter');
			$data['type'] =  $this->input->post('type');
			$data['modified_by'] = $this->session->userdata('uid');
			$data['modified_on'] =  date('Y-m-d H:i:s');
			$result = $this->debatemodel->update_data($data , $debateId);
			if($result==1){
				$this->session->set_flashdata('message' ,2);
				redirect('admin/debate');
			}else{
				$this->session->set_flashdata('message' ,0);
				redirect('admin/debate');
			}
		}
	}
	
	public function validate_image($value){
		$allowed = array("image/jpeg", "image/jpg");
		if(!in_array($_FILES['debate_image']['type'], $allowed)){
			return false;
		}else{
			return true;
		}
	}
	
	public function sessions(){
		$this->load->library('pagination'); 
		$data['title'] = 'Sessions | ENPL';
		$data['template'] = 'sessions';
		$search = " session.sid!=''";
		$orderBy = " session.sid DESC";
		$perPage = 20;
		$suffix = '';
		if($this->input->get('sid')!=''){
			if(is_numeric($this->input->get('sid'))){
				$search .= " AND session.sid='".trim($this->input->get('sid'))."'";
			}else{
				$search .= " AND (session.description LIKE '%".trim($this->input->get('sid'))."%' OR session.keywords LIKE '%".trim($this->input->get('sid'))."%')";
			}
			$suffix .= '&sid='.trim($this->input->get('sid'));
		}
		if($this->input->get('topic')!=''){
			$search .= " AND debate.debate_id='".trim($this->input->get('topic'))."'";
			$suffix .= '&topic='.trim($this->input->get('topic'));
		}
		$row = ($this->input->get('per_page')!='') ? $this->input->get('per_page') : 0;
		$data['total_rows'] = $this->debatemodel->get_sessionscount($search);
		$config = custom_pagination([base_url('admin/sessions') ,$data['total_rows'] , $perPage ,$suffix]);
		$this->pagination->initialize($config);
		$data['pager'] = str_replace('<a' ,'<a class="page-link" ',$this->pagination->create_links());
		$data['data'] = $this->debatemodel->get_sessiondata($search , $perPage , $row , $orderBy);
		$data['debatelist'] = $this->debatemodel->getAllDebate();		
		$this->load->view('cpanel/common' , $data);
	}
	
	public function session_create(){
		$this->form_validation->set_rules('topic', 'Topic', 'required|trim');
		$this->form_validation->set_rules('description', 'Description', 'required|trim');
		$this->form_validation->set_rules('keywords', 'Keywords', 'required|trim');
		$this->form_validation->set_rules('video_embed', 'Video Embed', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Create Session | ENPL';
			$data['template'] = 'create_session';
			$data['debatelist'] = $this->debatemodel->getAllDebate();
			$this->load->view('cpanel/common' , $data);
		}else{

			$data['debate_id'] =  $this->input->post('topic');
			$data['description'] =  $this->input->post('description');
			$data['keywords'] =  $this->input->post('keywords');
			$data['video_embed'] =  $this->input->post('video_embed');
			$data['status'] =  $this->input->post('status');
			$data['best_of'] = json_encode($this->input->post('bestof[]'));
			$data['created_by'] =  $data['modified_by'] = $this->session->userdata('uid');
			$data['modified_on'] =  date('Y-m-d H:i:s');
			$result = $this->debatemodel->insert_sessiondata($data);
			if($result==1){
				$this->session->set_flashdata('message' ,1);
				redirect('admin/sessions');
			}else{
				$this->session->set_flashdata('message' ,0);
				redirect('admin/sessions');
			}
		}
	}
	
	public function session_edit(){
		$sid = $this->input->get('id');
		if(!is_numeric($sid) || $sid==''){
			redirect('admin/sessions');
			exit;
		}
		$this->form_validation->set_rules('topic', 'Topic', 'required|trim');
		$this->form_validation->set_rules('description', 'Description', 'required|trim');
		$this->form_validation->set_rules('keywords', 'Keywords', 'required|trim');
		$this->form_validation->set_rules('video_embed', 'Video Embed', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Edit Session | ENPL';
			$data['template'] = 'edit_session';
			$data['debatelist'] = $this->debatemodel->getAllDebate();
			$data['session'] = $this->debatemodel->getSession($sid);
			$this->load->view('cpanel/common' , $data);
		}else{

			$data['debate_id'] =  $this->input->post('topic');
			$data['description'] =  $this->input->post('description');
			$data['keywords'] =  $this->input->post('keywords');
			$data['video_embed'] =  $this->input->post('video_embed');
			$data['status'] =  $this->input->post('status');
			$data['best_of'] = json_encode($this->input->post('bestof[]'));
			$data['modified_by'] = $this->session->userdata('uid');
			$data['modified_on'] =  date('Y-m-d H:i:s');
			$result = $this->debatemodel->update_sessiondata($data , $sid);
			if($result==1){
				$this->session->set_flashdata('message' ,2);
				redirect('admin/sessions');
			}else{
				$this->session->set_flashdata('message' ,0);
				redirect('admin/sessions');
			}
		}
	}
}
?>