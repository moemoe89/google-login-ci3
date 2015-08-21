<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		
		if($this->session->userdata('login') == true){
			redirect('welcome/profile');
		}
		
		if (isset($_GET['code'])) {
			
			$this->googleplus->getAuthenticate();
			$this->session->set_userdata('login',true);
			$this->session->set_userdata('user_profile',$this->googleplus->getUserInfo());
			redirect('welcome/profile');
			
		} 
			
		$contents['login_url'] = $this->googleplus->loginURL();
		$this->load->view('welcome_message',$contents);
		
	}
	
	public function profile(){
		
		if($this->session->userdata('login') != true){
			redirect('');
		}
		
		$contents['user_profile'] = $this->session->userdata('user_profile');
		$this->load->view('profile',$contents);
		
	}
	
	public function logout(){
		
		$this->session->sess_destroy();
		$this->googleplus->revokeToken();
		redirect('');
		
	}
	
}
