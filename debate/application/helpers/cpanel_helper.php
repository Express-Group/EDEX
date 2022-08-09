<?php
if(!function_exists('custom_pagination')){
	
	function custom_pagination($parameter){
		$config = [];
		$config['base_url'] = $parameter[0];
		$config['total_rows'] = $parameter[1];
		$config['per_page'] = $parameter[2];
		$config['num_links'] = 5;
		$config['use_page_numbers'] = FALSE;
		$config['page_query_string'] = TRUE;
		$config['suffix'] = $parameter[3];
		$config['num_tag_open'] = $config['next_tag_open'] = $config['last_tag_open'] = $config['first_tag_open'] = $config['prev_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = $config['next_tag_close'] = $config['last_tag_close'] = $config['first_tag_close'] = $config['prev_tag_close'] ='</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a>';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['full_tag_open'] = '<ul class="pagination pagination-rounded justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		return $config;
	}
}

if(!function_exists('bestof')){
	
	function bestof($sid , $debate_id , $pid ,$type=1){
		$CI = &get_instance();
		return $CI->db->select('vote , title')->from('vote')->where(['sid' => $sid , 'debate_id' => $debate_id , 'pid'=> $pid  , 'type'=>$type])->get()->result();
	}
}

if(!function_exists('pending_participant')){
	
	function pending_participant(){
		$CI = &get_instance();
		return $CI->db->select('name , gender , age ,user_image , created_on')->from('participant')->order_by('created_on' ,'DESC')->limit(4)->get()->result();
	} 
}

if(!function_exists('participantcount')){
	
	function participantcount(){
		$CI = &get_instance();
		return $CI->db->select('pid')->from('participant')->get()->num_rows();
	} 
}
if(!function_exists('debatecount')){
	
	function debatecount(){
		$CI = &get_instance();
		return $CI->db->select('debate_id')->from('debate')->get()->num_rows();
	} 
}
if(!function_exists('schoolcount')){
	
	function schoolcount(){
		$CI = &get_instance();
		return $CI->db->select('sid')->from('school')->get()->num_rows();
	} 
}

if(!function_exists('judges')){
	
	function judges($id=''){
		$CI = &get_instance();
		if($id!=''){
			return $CI->db->select('jid , judge_name ,description , image')->from('judges')->where(['status' => 1 ,'jid' => $id])->get()->row_array();
		}else{
			return $CI->db->select('jid , judge_name ,description , image')->from('judges')->where('status' , 1)->get()->result();
		}
		
	} 
}

if(!function_exists('smtp_mail')){
	
	function smtp_mail($data='' , $subject=''){
		$CI = &get_instance();
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
                           '.$data['message'].'
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
		$CI->load->library('email'); 
		$CI->email->initialize($config);
		$CI->email->from('info@edexlive.com', 'Edexlive');
		$CI->email->to($data['email']);
		$CI->email->subject($subject);
		$CI->email->message($message);
		$CI->email->send();
		
	}
}


?>