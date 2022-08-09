<?php class Check_user{
	public function IsLogged(){
		$CI = &get_instance();
		$userID = $CI->session->userdata('uid');
		$userData = $CI->session->userdata('userdata');
		$urlPath = $CI->uri->segment(1);
		if(($urlPath=='admin') && ($CI->uri->total_segments() > 1) && $CI->uri->segment(2)!='login'):
			if($userID=='' && !is_array($userData) && count($userData)==0){
				redirect('admin');
				exit;
			}
		endif;
	}
}?>