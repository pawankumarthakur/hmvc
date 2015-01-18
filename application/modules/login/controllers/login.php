<?php
class Login extends MX_Controller{

	function index(){
		$this->is_logged_in();
		redirect('members/members_area');
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
    redirect('default_controller');
}
	function login(){
		$data['main_content']='login_form';
		$this->load->view('includes/template',$data);
		
	}
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != true)
{
	$data['main_content']='login_form';
		$this->load->view('includes/template',$data);
	}	
	else{
		redirect('members/dashboard');
	}
}
function validate_test($data = null)
{
	echo "Hello World";
	/*$data  = "success";
	return $data;*/
}
	function validate_cred_head()
	{
		$this->is_logged_in();
		$this->load->model('membership_model');
		$query = $this->membership_model->validate_head();
		if($query)
		{
			$data = array(
				'username' => $this->input->post('username1') ,
				'is_logged_in' => true
			 );
			$this->session->set_userdata($data);
			
			//modules::run('members/members_area');
			redirect('members/dashboard');
			}
		else
		{
			return false;
		}
	}
	

	function signup(){
		$data['main_content'] = 'signup_form';
		$this->load->view('includes/template',$data);
	}

	function create_member(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[32]');
		$this->form_validation->set_rules('password1', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE){
			$this->signup();
		}
		else
		{
			$this->load->model('membership_model');
			if($query = $this->membership_model->create_member()){
				$data['main_content'] = 'signup_success';
				$this->load->view('includes/template',$data);
			}
			else
			{
				$this->load->view('signup_form');
			}
		}
	}
}