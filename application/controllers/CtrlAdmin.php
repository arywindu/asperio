<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrladmin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('BeraniBerencana_Model');
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

		$data = $this->BeraniBerencana_Model->login_user($user_login['username'], $user_login['password']);

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
			'title_web'  => 'Dashboard admin - Beraniberencana.com',
			'article'	 => $this->BeraniBerencana_Model->get_article(),
			'visitor' => $this->BeraniBerencana_Model->get_visitor()
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
			'title_web' => 'Daftar artikel - Beraniberencana.com',
			'article'	=> $this->BeraniBerencana_Model->get_article(),
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
			'title_web' => 'Daftar Pengguna - Beraniberencana.com',
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
			'title_web' => 'Daftar Administrator - Beraniberencana.com',
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/p_administrator');
		$this->load->view('admin/footer');
	}	
	public function slider_image()
	{
		if(empty($this->session->userdata('id'))){
			$this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
			redirect('ctrladmin');
		}
		$data = array(
			'title_web' => 'Daftar Image Slider - Beraniberencana.com',
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/p_slider_image');
		$this->load->view('admin/footer');
	}	
	
	public function contraception()
	{
		if(empty($this->session->userdata('id'))){
			$this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
			redirect('ctrladmin');
		}
		$data = array(
			'title_web' => 'Daftar Kontrasepsi - Beraniberencana.com',
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
			'title_web' 		=> 'Tambah artikel - Beraniberencana.com',
			'article_category'	=> $this->BeraniBerencana_Model->get_article_category()
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
			'title_web' 		=> 'Edit artikel - Beraniberencana.com',
			'article_category'	=> $this->BeraniBerencana_Model->get_article_category(),
			'selected_article'	=> $this->BeraniBerencana_Model->get_article_from_id($id),
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/p_edit_article');
		$this->load->view('admin/footer');
	}
	/* 
	Function for handling article begin
	*/
	public function comment()
	{
		if(empty($this->session->userdata('id'))){
			$this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
			redirect('ctrladmin');
		}
		$data = array(
			'title_web' => 'Daftar Komentar - Beraniberencana.com',
			'comment'   => $this->BeraniBerencana_Model->get_comment(),
			'list_comment' => $this->BeraniBerencana_Model->get_comment(),	
		);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/p_comment');
		$this->load->view('admin/footer');
	}	



}
