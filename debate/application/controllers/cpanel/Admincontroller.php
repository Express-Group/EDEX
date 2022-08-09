<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admincontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('cpanel/schoolmodel');
	}
	
	public function index(){
		$data['title'] = 'Dashboard | ENPL';
		$data['template'] = 'dashboard';
		$search=" s.sid!=''";
		$data['schoolList'] = $this->schoolmodel->get_data($search , 6 , 0);
		$this->load->view('cpanel/common' , $data);
	}
}
?>