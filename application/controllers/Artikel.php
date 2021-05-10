<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Asperio_Model');
		$this->load->helper('config_pagination');
	}