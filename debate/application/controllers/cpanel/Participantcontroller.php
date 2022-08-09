<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Participantcontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('cpanel/participantmodel');
	}
	
	public function index(){
		$data['title'] = 'Participant | ENPL';
		$data['template'] = 'participant';
		$search="";
		if($this->input->get('debate')!=''){
			$search .=' AND p.debate_id="'.trim($this->input->get('debate')).'"';
		}
		if($this->input->get('school')!=''){
			$search .=' AND p.school="'.trim($this->input->get('school')).'"';
		}
		if($this->input->get('name')!=''){
			$search .=' AND p.name LIKE "%'.trim($this->input->get('name')).'%"';
		}
		if($this->input->get('status')!=''){
			$search .=' AND p.status="'.trim($this->input->get('status')).'"';
		}
		$data['participants'] = $this->participantmodel->get_participants('' ,$search);
		$data['debates'] = $this->participantmodel->get_debate();
		$data['schoolList'] = $this->participantmodel->get_school();
		$this->load->view('cpanel/common' , $data);
	}
	public function view(){
		$participantId = $this->input->get('id');
		if(!is_numeric($participantId) || $participantId==''){
			redirect('admin/participant');
			exit;
		}
		$data['participant'] = $this->participantmodel->get_participants($participantId);
		if(count($data['participant'])== 0){
			redirect('admin/participant');
			exit;
		}
		$data['title'] = 'View Participant | ENPL';
		$data['template'] = 'view_participant';
		$this->load->view('cpanel/common' , $data);
	}
	
	public function edit(){
		$participantId = $this->input->get('id');
		if(!is_numeric($participantId) || $participantId==''){
			redirect('admin/participant');
			exit;
		}
		$data['participant'] = $this->participantmodel->get_participants($participantId);
		$data['debates'] = $this->participantmodel->get_debate();
		$data['title'] = 'Participant | ENPL';
		$data['template'] = 'approve_participant';
		$this->load->view('cpanel/common' , $data);		
	}
	
	public function update(){
		$participantId = $this->input->post('pid');
		$data['debate_id'] = $this->input->post('topic');
		$data['status'] = $this->input->post('status');
		$data['modified_by'] = $this->session->userdata('uid');
		$data['modified_on'] = date('Y-m-d H:i:s');
		if($data['debate_id']!='' && $data['status']!='' && $participantId!=''){
			$result = $this->participantmodel->update_data($data , $participantId);
			if($result==1){
				$details = $this->participantmodel->get_participants($participantId);
				/* print_r($details);
				exit; */
				$emaildata['name'] = $details['name'];
				$emaildata['id'] = $details['pid'];
				$emaildata['topic'] = $details['topic'];
				$emaildata['email'] = $details['email'];
				$emaildata['date'] = date('jS F Y h:i A' , strtotime($details['schedule_date']));
				if($data['status']==1){
					$emaildata['message'] = '<td align="left" dir="ltr" style="font-family:\'Helvetica Neue Light\',Helvetica,Arial,sans-serif;padding:0px;margin:0px;line-height:22px"><span style="font-size:16px">Hello '.$emaildata['name'].'!</span><br><br><b><font size="4">'.$emaildata['id'].'</font></b><span style="font-size:16px;font-weight:normal">  is your Registration ID.<br><br><b>Topic : '.$emaildata['topic'].'</b><br><br>Schedule Date & Time : '.$emaildata['date'].'<br><br><a style="font-size:16px;font-weight:normal" target="_BLANK" href="'.base_url('status?id='.$details['pid']).'">Click here to check your status</a><br></span></td>';
					$subject = 'Application Approved';
				}else{
					$emaildata['message'] = '<td align="left" dir="ltr" style="font-family:\'Helvetica Neue Light\',Helvetica,Arial,sans-serif;padding:0px;margin:0px;line-height:22px"><span style="font-size:16px">Hello '.$emaildata['name'].'!</span><br><br><span style="font-size:16px"><b>Your application has been rejected.</b><br></span></td>';
					$subject = 'Application Rejected';
				}
				//smtp_mail($emaildata , $subject);
				$this->session->set_flashdata('message' ,1);
				redirect('admin/participant');
			}else{
				$this->session->set_flashdata('message' ,0);
				redirect('admin/participant');
			}
		}else{
			$this->session->set_flashdata('message' ,0);
			redirect('admin/participant');
		}
	}
	
	public function update_image(){
		$type = $this->input->post('type');
		$participantId = $this->input->post('id');
		$this->load->library('upload');
		$config['upload_path'] = ($type==0) ? ASSETS_BASE_PATH.PART_IMG_PATH : ASSETS_BASE_PATH.ID_IMG_PATH;
		$config['allowed_types'] = '*';
		$this->upload->initialize($config);
		if($this->upload->do_upload('file')){
			$imageresult = $this->upload->data();
			if($type==0){
				$data['user_image'] = $imageresult['file_name'];
			}else{
				$data['id_image'] = $imageresult['file_name'];
			}
		}
		$data['modified_by'] = $this->session->userdata('uid');
		$data['modified_on'] = date('Y-m-d H:i:s');
		echo $this->participantmodel->update_data($data , $participantId);
	}
	
	public function approve(){
		$pid = $this->input->get('id');
		$debate_id = $this->input->get('debate_id');
		if(!is_numeric($pid) || $pid==''){
			redirect('admin/participant');
			exit;
		}
		$status = $this->input->get('status');
		$status = ($status==1)? 1 : 2;
		$this->participantmodel->update_data(['status' => $status , 'modified_on'=>date('Y-m-d H:i:s') , 'created_by'=>$this->session->userdata('uid')] , $pid);
		if($status==1){
			$this->session->set_flashdata('message' ,1);
			redirect('admin/participant/edit?id='.$debate_id);
		}else{
			$this->session->set_flashdata('message' ,0);
			redirect('admin/participant/edit?id='.$debate_id);
		}
	}
	
	public function edit_field(){
		$pid = $this->input->post('id');
		$type = $this->input->post('type');
		$details = $this->participantmodel->get_participants($pid);
		$schools = $this->participantmodel->get_school();
		$template = '';
		$template .='<div class="form-group">';
		$template .='<label>Name <sup>*</sup></label>';
		$template .='<input type="text" id="pname" class="form-control" value="'.$details['name'].'">';
		$template .='</div>';
		$template .='<div class="form-group">';
		$template .='<label>DOB <sup>*</sup></label>';
		$template .='<input type="date" id="pdob" class="form-control" value="'.$details['dob'].'">';
		$template .='</div>';
		$template .='<div class="form-group">';
		$template .='<label>Gender <sup>*</sup></label>';
		$template .='<select id="pgender" class="form-control">';
		$template .='<option value="">Please select any one</option>';
		$template .='<option '.(($details['gender']==1) ? ' selected ':'').' value="1">Male</option>';
		$template .='<option '.(($details['gender']==0) ? ' selected ':'').' value="0">Female</option>';
		$template .='</select>';
		$template .='<div class="form-group">';
		$template .='<label>School <sup>*</sup></label>';
		$template .='<select id="pschool" class="form-control">';
		$template .='<option value="">Please select any one</option>';
		foreach($schools as $school){
			$template .='<option '.(($details['school']==$school->sid) ? ' selected ':'').' value="'.$school->sid.'">'.$school->name.'</option>';
		}
		$template .='</select>';
		$template .='</div>';
		$template .='<div class="form-group">';
		$template .='<label>Class <sup>*</sup></label>';
		$template .='<input type="text" id="pclass" class="form-control" value="'.$details['class'].'">';
		$template .='</div>';
		$template .='<div class="form-group">';
		$template .='<label>About Me <sup>*</sup></label>';
		$template .='<textarea id="pabout" class="form-control">'.$details['about_me'].'</textarea>';
		$template .='</div>';
		$template .='<div class="form-group">';
		$template .='<label>Mobile Number <sup>*</sup></label>';
		$template .='<input type="number" id="pmobile" class="form-control" value="'.$details['phone_number'].'">';
		$template .='</div>';
		$template .='<div class="form-group">';
		$template .='<label>Email Address <sup>*</sup></label>';
		$template .='<input type="email" id="pemail" class="form-control" value="'.$details['email'].'">';
		$template .='</div>';
		echo $template;
	}
	
	public function update_field(){
		$participantId = $this->input->post('id');
		$data['modified_by'] = $this->session->userdata('uid');
		$data['modified_on'] = date('Y-m-d H:i:s');
		$data['name'] = $this->input->post('name');
		$dob = new DateTime($this->input->post('dob'));
		$currentDate   = new DateTime('today');
		$age =  $dob->diff($currentDate)->y;
		$data['dob'] = date('Y-m-d' , strtotime($this->input->post('dob')));
		$data['class'] = $this->input->post('class');
		$data['school'] = $this->input->post('school');
		$data['about_me'] = $this->input->post('about');
		$data['age'] = $age;
		$data['gender'] = $this->input->post('gender');
		$data['phone_number'] = $this->input->post('mobile');
		$data['email'] = $this->input->post('email');
		echo $this->participantmodel->update_data($data , $participantId);
	}
}
?>