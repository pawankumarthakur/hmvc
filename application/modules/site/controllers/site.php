<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Site extends CI_Controller {
	public function __construct()
       {
            parent::__construct();
            $this->is_logged_in();
       }
		
	function members_area()
	{
		$this->load->view('members_area');
	}

	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != true)
{
	echo 'You dont have permission to acces this page. <a hred="../login">Login </a>';
	die();
	}	
}
}
