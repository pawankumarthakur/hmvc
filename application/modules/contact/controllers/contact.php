<?php
class Contact extends MX_Controller{
	
	function index(){
		$data['main_content'] = 'contact';
		$this->load->view('includes/template',$data);
	}
	
}