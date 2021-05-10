<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlVisitor extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('BeraniBerencana_Model');
	}
	public function sign_up()
	{
		$data = array(
			'full_name'		=> addslashes($this->input->post('full_name')),
			'username'		=> addslashes($this->input->post('username')),
			'password'		=> addslashes(md5($this->input->post('password'))),
			'email'			=> addslashes($this->input->post('email')),
			'phone_number'	=> addslashes($this->input->post('phone_number')),
		);
		
		$data = $this->security->xss_clean($data);

		$sign_up_account = $this->BeraniBerencana_Model->add_visitor($data);

		if($sign_up_account != 0)
		{	
			$this->session->set_flashdata('success_msg', 'Pendaftaran berhasil');
			$this->session->set_userdata('is_visitor_online', '1');
			$this->session->set_userdata('id_user', $sign_up_account);			
			redirect('ctrl/');
		}
		else
		{
			$this->session->set_flashdata('error_msg', 'Pendaftaran gagal');
			$this->session->set_userdata('is_visitor_online', '0');
			redirect('ctrl/');
		}
	}
	public function sign_in()
	{
		$username	= addslashes($this->input->post('username'));
		$password	= addslashes(md5($this->input->post('password')));
		
		$username = $this->security->xss_clean($username);
		$password = $this->security->xss_clean($password);

		$login_visitor = $this->BeraniBerencana_Model->login_visitor($username, $password);

		if($login_visitor)
		{

			$this->session->set_flashdata('success_msg', 'Selamat datang, '.$username.'!');
			$this->session->set_userdata('is_visitor_online', '1');
			$this->session->set_userdata('id_user', $login_visitor[0]->id);
			redirect('ctrl/');
		}
		else
		{
			$this->session->set_flashdata('error_msg', 'Username atau password anda salah');
			$this->session->set_userdata('is_visitor_online', '0');
			redirect('ctrl/');
		}
	}
	public function sign_out()
	{
		$this->session->set_flashdata('success_msg', 'Anda telah sign out.');			
		session_destroy();
		redirect('ctrl');
	}
}
