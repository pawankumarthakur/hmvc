<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {
	function index(){
		$this->is_logged_in_home();
		$data['main_content']='home';
		$this->load->view('includes/template',$data);
	}
	
	function is_logged_in_home(){
		echo "Hellow";
		/*$sid = session_id();
if($sid) {
	redirect('members/dashboard');
}*/
}
}
