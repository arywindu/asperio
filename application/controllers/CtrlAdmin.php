<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrladmin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Asperio_Model');
	}	
	public function index()
	{
		if(empty($this->session->userdata('id'))){
			$this->load->view('admin/p_login_form');
		}
		else{
			redirect('ctrladmin/dashboard');
		}
	}
	public function user_login(){

		// Clean up several script for security purpose
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));

		$username = stripslashes($username);
		$password = stripslashes($password);
		
		$user_login = array(
			'username' => $username,
			'password' => $password
		);

		$data = $this->Asperio_Model->login_user($user_login['username'], $user_login['password']);

		if($data){
			$this->session->set_userdata('id', $data['id']);			
			$this->session->set_userdata('username', $data['username']);
			$this->session->set_userdata('is_online', '1');
			redirect('ctrladmin/dashboard');
		}
		else{
			$this->session->set_flashdata('error_msg', 'Username atau password anda salah.');
			$this->session->set_userdata('is_online', '0');
			redirect('ctrladmin');
		}
		$data['user'] = $user_log;
	}
	public function user_logout()
	{
		$this->session->sess_destroy();
		session_write_close();		
		$this->session->set_flashdata('success_msg', 'Anda berhasil keluar.');
		redirect('ctrladmin/index');
	}
	/*
	Function for menu begin 
	*/
	public function dashboard()
	{
		if(empty($this->session->userdata('id'))){
			$this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
			redirect('ctrladmin');
		}
		$data = array(
			'title_web'  => 'Dashboard admin - Asperio.id',
			'article'	 => $this->Asperio_Model->get_article(),
			'visitor' => $this->Asperio_Model->get_visitor()
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/p_dashboard');
		$this->load->view('admin/footer');
	}
	public function article()
	{
		if(empty($this->session->userdata('id'))){
			$this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
			redirect('ctrladmin');
		}
		$data = array(
			'title_web' => 'Daftar artikel - Asperio.id',
			'article'	=> $this->Asperio_Model->get_article(),
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/p_article');
		$this->load->view('admin/footer');
	}	
	public function registrant()
	{
		if(empty($this->session->userdata('id'))){
			$this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
			redirect('ctrladmin');
		}
		$data = array(
			'title_web' => 'Daftar Pengguna - Asperio.id',
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/p_registrant');
		$this->load->view('admin/footer');
	}
	public function administrator()
	{
		if(empty($this->session->userdata('id'))){
			$this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
			redirect('ctrladmin');
		}
		$data = array(
			'title_web' => 'Daftar Administrator - Asperio.id',
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/p_administrator');
		$this->load->view('admin/footer');
	}	
	
	public function contraception()
	{
		if(empty($this->session->userdata('id'))){
			$this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
			redirect('ctrladmin');
		}
		$data = array(
			'title_web' => 'Daftar Kontrasepsi - Asperio.id',
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/p_contraception');
		$this->load->view('admin/footer');
	}	
	/*
	Function for menu end 
	*/

	/* 
	Function for handling article begin
	*/
	public function add_article()
	{
		if(empty($this->session->userdata('id'))){
			$this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
			redirect('ctrladmin');
		}
		$data = array(
			'title_web' 		=> 'Tambah artikel - Asperio.id',
			'article_category'	=> $this->Asperio_Model->get_article_category()
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/p_add_article');
		$this->load->view('admin/footer');
	}
	public function edit_article($id)
	{
		if(empty($this->session->userdata('id'))){
			$this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
			redirect('ctrladmin');
		}
		$data = array(
			'title_web' 		=> 'Edit artikel - Asperio.com',
			'article_category'	=> $this->Asperio_Model->get_article_category(),
			'selected_article'	=> $this->Asperio_Model->get_article_from_id($id),
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/p_edit_article');
		$this->load->view('admin/footer');
	}
	/* 
	Function for handling article begin
	*/
}
