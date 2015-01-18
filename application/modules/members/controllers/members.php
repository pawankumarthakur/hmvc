<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Members extends MX_Controller {
	public function __construct()
       {
            parent::__construct();
            $this->is_logged_in();
       }
	function logout()
{
    $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
    redirect('home');
}
	function dashboard()
	{	$is_logged_in = $this->session->userdata('is_logged_in');
		if(isset($is_logged_in)){
		$data['main_content'] = 'dashboard';
		$this->load->view('includes/template',$data);
		}
		else{
			redirect('login/login');
		}
	}

	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
		redirect('members/dashboard');
		}	//if
} //is_logged_in
}
