<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl404 extends CI_Controller {	
	public function index()
	{

		$this->load->view('errors/404');
	}
}
