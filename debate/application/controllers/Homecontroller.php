<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Homecontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('homemodel');
	}
	
	public function index(){
		$data['title'] = 'Intro | Edex Debate | TNIE';
		$data['isHome'] = 0;
		$this->load->view('index' , $data);
	}
	/* public function final_page(){
		$data['title'] = 'Homepage | Edex Debate | TNIE';
		$data['isHome'] = 0;
		$data['debateList'] = $this->homemodel->get_alldebate();
		$this->load->view('index_temp' , $data);
	} */
	
	public function mainpage(){
		$data['title'] = 'Homepage | Edex Debate | TNIE';
		$data['isHome'] = 0;
		//$data['debateList'] = $this->homemodel->get_alldebate();
		$data['schoolList'] = $this->homemodel->get_school();
		$this->load->view('landing' , $data);
	}
	
	public function faq(){
		$data['title'] = 'FAQ | Edex Debate | TNIE';
		$data['template'] = 'faq';
		$this->load->view('mix' , $data);
	}
	
	public function status(){
		$id = $this->input->get('id');
		$data['error'] = 0;
		if($id!='' && is_numeric($id)){
			$participants = $this->homemodel->participants(trim($id));
			if($participants->num_rows()==0){
				$data['error'] = 1;
			}else{
				$data['participants'] = $participants->row_array();
				$data['debate'] = $this->homemodel->get_debate($data['participants']['debate_id']);
			}
		}
		$data['title'] = 'Check Status | Edex Debate | TNIE';
		$data['template'] = 'status';
		$this->load->view('mix' , $data);
	}
	public function debate(){
		$data['title'] = 'Debate | ENPL';
		$data['template'] = 'debate';
		$data['list'] = $this->homemodel->get_alldebate();
		$data['isHome'] = 0;
		$this->load->view('debate' , $data);
	}
	public function senior(){
		$data['title'] = 'Senior Videos | Debate | ENPL';
		$data['template'] = 'debate';
		$data['list'] = $this->homemodel->get_alldebate(1);
		$data['isHome'] = 0;
		$data['iframeUrl'] = 'https://www.youtube.com/embed/QMhwKrzUR2g';
		$this->load->view('debate' , $data);
	}
	public function junior(){
		$data['title'] = 'Junior Videos | Debate | ENPL';
		$data['template'] = 'debate';
		$data['list'] = $this->homemodel->get_alldebate(2);
		$data['isHome'] = 0;
		$data['iframeUrl'] = 'https://www.youtube.com/embed/GbmYVoGW4vQ';
		$this->load->view('debate' , $data);
	}
	public function result($type){
		if($type=='junior' || $type=='senior' || $type=='final'){
			$data['title'] = 'Result | '.$type.' | Debate | ENPL';
			$data['template'] = 'debate';
			$data['isHome'] = 0;
			//if($type!='final'):
				$this->load->view('result_'.$type , $data);
			//endif;
		}else{
			redirect('/index');
		}
	}

	public function result_tmp($type){
		if($type=='junior' || $type=='senior' || $type=='final'){
			$data['title'] = 'Result | '.$type.' | Debate | ENPL';
			$data['template'] = 'debate';
			$data['isHome'] = 0;
			$this->load->view('result_'.$type , $data);
		}else{
			redirect('/index');
		}
	}
	public function article($debateID){
		$data['title'] = 'Debate | ENPL';
		$data['template'] = 'debate_article';
		$data['details'] = $this->homemodel->get_debate($debateID);
		$data['sessions'] = $this->homemodel->get_sessions($debateID);
		$data['participants'] = $this->homemodel->get_participants($debateID);
		$data['isHome'] = 0;
		$this->load->view('article' , $data); 
	}
	public function register_now(){
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('debate', 'Debate', 'required|trim');
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('class', 'Class', 'required|trim');
		$this->form_validation->set_rules('school', 'School', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required|trim');
		$this->form_validation->set_rules('dob', 'Date Of Birth', 'required|trim');
		//$this->form_validation->set_rules('about_me', 'About Me', 'required|trim');
		$this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
		//$this->form_validation->set_rules('user_image', 'Image', 'callback_validate_userimage');
		//$this->form_validation->set_rules('id_image', 'Id', 'callback_validate_idimage');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required|trim|numeric|min_length[10]|max_length[10]');
		$this->form_validation->set_message('validate_userimage','User Image required');
		$this->form_validation->set_message('validate_idimage','Id Image required');
		if($this->form_validation->run() == FALSE){
			echo 0;
		}else{
			$this->load->library('upload');
			$dob = new DateTime($this->input->post('dob'));
			$currentDate   = new DateTime('today');
			$age =  $dob->diff($currentDate)->y;
			$data['user_image']='';
			$data['id_image']='';
			if(isset($_FILES['user_image']['name']) && $_FILES['user_image']['name']!=''){
				$config['upload_path'] = ASSETS_BASE_PATH.PART_IMG_PATH;
				$config['allowed_types'] = '*';
				$this->upload->initialize($config);
				if($this->upload->do_upload('user_image')){
					$imageresult = $this->upload->data();
					$data['user_image'] = $imageresult['file_name'];
				}
			}
			if(isset($_FILES['id_image']['name']) && $_FILES['id_image']['name']!=''){
				$config['upload_path'] = ASSETS_BASE_PATH.ID_IMG_PATH;
				$config['allowed_types'] = '*';
				$this->upload->initialize($config);
				if($this->upload->do_upload('id_image')){
					$imageresult = $this->upload->data();
					$data['id_image'] = $imageresult['file_name'];
				}
			}
			//$data['debate_id'] = $this->input->post('debate');
			$data['name'] = $this->input->post('name');
			$data['dob'] = date('Y-m-d' , strtotime($this->input->post('dob')));
			$data['class'] = $this->input->post('class');
			$data['school'] = $this->input->post('school');
			$data['about_me'] = $this->input->post('about_me');
			$data['age'] = $age;
			$data['gender'] = $this->input->post('gender');
			$data['phone_number'] = $this->input->post('phone');
			$data['email'] = $this->input->post('email');
			$data['modified_on'] = date('Y-m-d H:i:s');
			$verifyUser = $this->homemodel->verifyUser($data);
			if(is_array($verifyUser) && count($verifyUser)>0){
				if($verifyUser['otp_verified']==1){
					echo 2;
				}else{
					$data1['otp'] = $data['otp'] = rand(10,10000);
					$this->homemodel->update_participant($data1, $verifyUser['pid']);
					$this->sent_smtpmail($data);
					@file_get_contents('https://2factor.in/API/V1/7381daa7-6151-11eb-8153-0200cd936042/SMS/+91'.$data['phone_number'].'/'.$data1['otp']);
					echo base64_encode($verifyUser['pid']);
				}
			}else{
				$data['otp'] = rand(10,10000);
				$result = $this->homemodel->insert_participant($data);
				if($result!=''){
					$this->sent_smtpmail($data);
					//redirect(base_url('index?otp=true&q='.base64_encode($result)),301);
					@file_get_contents('https://2factor.in/API/V1/7381daa7-6151-11eb-8153-0200cd936042/SMS/+91'.$data['phone_number'].'/'.$data['otp']);
					echo base64_encode($result);
				}
			}
		}
		
	}
	
	public function sent_smtpmail($data='' , $subject='OTP to verify registration'){
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'mail.newindianexpress.com',
			'smtp_port' => 465,
			'smtp_user' => 'chriswar',
			'smtp_pass' => 'chriswar@123',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1',
			'wordwrap'   => true
		);
		$message = '<table cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="#ffffff" width="450" style="padding:0px;line-height:1px;font-size:1px;margin:0px auto">
         <tbody>
            <tr>
               <td width="24" style="padding:0px;margin:0px auto;font-size:0px;line-height:1px;padding:0px"></td>
               <td style="padding:0px;margin:0px auto;font-size:0px;line-height:1px;padding:0px">
                  <table cellpadding="0" cellspacing="0" border="0" align="center" dir="ltr" style="padding:0px;line-height:1px;font-size:1px;margin:0px auto">
                     <tbody>
                        <tr>
                           <td align="left" dir="ltr" style="padding:0px;margin:0px auto;font-family:\'Helvetica Neue\',Helvetica,Arial,sans-serif;font-size:24px;padding:0px;margin:0px;font-weight:bold;line-height:32px"><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight:normal"><span style="font-size:2.25pt;font-family:Arial;color:rgb(0,0,0);background-color:transparent;font-variant-numeric:normal;font-variant-east-asian:normal;vertical-align:baseline;white-space:pre-wrap"><span style="border:none;display:inline-block;overflow:hidden;width:187px;height:64px"><img src="https://www.edexlive.com/debate/assets/img/logo/edex-works-logo.png" width="187" height="64" style="margin-left:0px;margin-top:0px" class="CToWUd"></span></span></span><br></td>
                        </tr>
                        <tr>
                           <td align="left" dir="ltr" style="font-family:\'Helvetica Neue Light\',Helvetica,Arial,sans-serif;padding:0px;margin:0px;line-height:22px"><span style="font-size:16px">Hello!</span><br><br><b><font size="4">'.$data['otp'].'</font></b><span style="font-size:16px;font-weight:normal">  is your One Time Password (OTP) for your Registration. This OTP is valid for 5 minutes. Please do not share this OTP with anyone for security reasons.<br></span></td>
                        </tr>
                        <tr>
                           <td height="24" style="padding:0px;margin:0px auto;font-size:0px;line-height:1px;padding:0px"> &nbsp; </td>
                        </tr>
                        <tr>
                           <td align="left" dir="ltr" style="padding:0px;margin:0px auto;font-family:\'Helvetica Neue Light\',Helvetica,Arial,sans-serif;font-size:16px;padding:0px;margin:0px;font-weight:normal;line-height:20px;font-family:\'Helvetica Neue Light\',Helvetica,Arial,sans-serif;font-size:16px;padding:0px;margin:0px;font-weight:normal;line-height:22px"></td>
                        </tr>
                        <tr>
                           <td align="left" dir="ltr" style="padding:0px;margin:0px auto;font-family:\'Helvetica Neue Light\',Helvetica,Arial,sans-serif;font-size:16px;padding:0px;margin:0px;font-weight:normal;line-height:20px;font-family:\'Helvetica Neue Light\',Helvetica,Arial,sans-serif;font-size:16px;padding:0px;margin:0px;font-weight:normal;line-height:22px">Best regards,<br> Edexlive</td>
                        </tr>
                        <tr>
                           <td height="32" style="padding:0px;margin:0px auto;font-size:0px;line-height:1px;padding:0px"> &nbsp; </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
               <td width="24" style="padding:0px;margin:0px auto;font-size:0px;line-height:1px;padding:0px"> &nbsp; </td>
            </tr>
         </tbody>
      </table>';
		/* $message .='<table style="width: 100%;padding: 13px;background: url(https://www.edexlive.com/debate/assets/img/backgrounds/bg3.jpg);background-size: cover;border-radius: 8px;">';
		$message .='<tbody>';
		$message .='<tr>';
		$message .='<td>';
		$message .='<h1>VERIFY YOUR REGISTRATION</h1>';
		$message .='<h3>Below is your one time passcode:</h3>';
		$message .='<h1 style="color: #004eff;"><strong>'.$data['otp'].'</strong></h1>';
		$message .='</td>';
		$message .='<tr>';
		$message .='</table>'; */
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->from('info@edexlive.com', 'Edexlive');
		$this->email->to($data['email']);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
	}
	
	public function verify_otp(){
		/* $data['title'] = 'Enter OTP | ENPL';
		$data['template'] = 'verify_otp';
		$data['isHome'] = 0;
		$this->load->view('merge' , $data); */
		$uid = base64_decode($this->input->post('uid'));
		if($uid!='' && is_numeric($uid)){
			$otp = trim($this->input->post('otp'));
			$updateOtp = $this->homemodel->updateOtp($otp , $uid);
			if($updateOtp==1){
				echo 1;
			}else{
				echo 0;
			}
		}else{
			echo 0;
		}
	}
	
	public function validate_userimage($value){
		if($_FILES['user_image']['name']==''){
			return false;
		}else{
			return true;
		}
	}
	
	public function validate_idimage($value){
		if($_FILES['id_image']['name']==''){
			return false;
		}else{
			return true;
		}
	}
	
	public function vote(){
		$sid = trim($this->input->post('sid'));
		$debate_id = trim($this->input->post('debate_id'));
		$bestof = trim($this->input->post('bestof'));
		$pid = trim($this->input->post('pid'));
		$count = trim($this->input->post('count'));
		$type = trim($this->input->post('type'));
		$details = $this->homemodel->get_debate($debate_id);
		if($details['voting_status']==1){
			if($sid!='' && $debate_id!='' && $bestof!='' && $pid!='' && $count!='' && $type!=''){
				$result= $this->homemodel->set_vote($sid , $debate_id , $pid , $bestof , $count ,$type);
				if($result!=''){
					$cookieName = $sid.$debate_id.$pid.$type.str_replace(' ','_',$bestof);
					setcookie($cookieName, 'true');
					setcookie($cookieName.'value', $bestof);
					echo $result;
				}else{
					echo 0;
				}
			}else{
				echo 0;
			}
		}else{
			echo 0;
		}
	}
}
?>