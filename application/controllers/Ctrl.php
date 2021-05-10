<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Asperio_Model');
		$this->load->model('ArtikelModel');
		$this->load->helper('config_pagination');
	}
	public function index()
	{
		$data = array
		(
			'title_web' => 'Asperio - Homepage',
			'article'	=> $this->Asperio_Model->get_article_using_limit('4'),
		);
	
		$this->load->view('default/header', $data);
		$this->load->view('default/page_home');
		$this->load->view('default/footer');
	}
	
	public function webinar() //asperio
	{
		// Get total data data;	
		$jumlah_data = $this->Asperio_Model->get_article_row('lifestyle');

		// Set uri segment
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		// Config for pagination
		$url = 'ctrl/webinar/';
		
		$data = array
		(
			'title_web' => 'Asperio - Webinar',
	
		);
		$this->load->view('default/header', $data);
		$this->load->view('default/page_webinar');
		$this->load->view('default/footer');
	}	

	public function katalog() //asperio
	{
		$data = array
		(
			'title_web' => 'Asperio - Katalog'
		);
		$this->load->view('default/header', $data);
		$this->load->view('default/page_katalog');
		$this->load->view('default/footer');
	}
	public function artikel($slug = NULL)
	{
		if(empty($slug))
		{
			redirect('ctrl404');
		}
		// Prepare detail article data
		$detail_article = $this->Asperio_Model->get_article_detail($slug);
		
		if($detail_article == false)
		{
			redirect('ctrl404');
		}
		else{
			$related_article = $this->Asperio_Model->get_related_article($detail_article[0]->category_id, $slug);
		}		
		
		$url_share = $this->config->base_url().'ctrl/artikel/'.$detail_article[0]->slug;

		$data = array
		(
			'title_web' => 'Berani Berencana - '.$detail_article[0]->title,
			'detail_article' => $detail_article,
			'related_article' => $related_article,
			'url_share' => $url_share,
			'slug' => $detail_article[0]->slug,
			'data_comment' => $this->Asperio_Model->get_comment($detail_article[0]->id)

		);
		$this->load->view('default/header', $data);
		$this->load->view('default/p_detail_article');
		$this->load->view('default/footer');
	}
	public function menuArtikel()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url().'ctrl/menuArtikel';
		$config['total_rows'] = $this->ArtikelModel->getArtikelAll();
		$config['per_page'] = 3;
		
		// Bootstrap 4 Pagination fix
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  	= '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] 	= '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']  	= '</span></li>';

		$this->pagination->initialize($config);

		$from = $this->uri->segment(3);
		$data = array

		(
			'title_web' => 'Asperio - Artikel',
			'dataartikel' => $this->ArtikelModel->getArtikel($config['per_page'], $from)
		);
		
		$this->load->view('default/header', $data);
		$this->load->view('default/page_artikel', $data);
		$this->load->view('default/footer');
	}
	public function kontrasepsi_pilkb()
	{
		$data = array
		(
			'title_web' => 'Berani Berencana - pilkb'
		);
		$this->load->view('default/header', $data);
		$this->load->view('default/p_detail_pilkb');
		$this->load->view('default/footer');
	}
	public function kontrasepsi_kontra()
	{
		$data = array
		(
			'title_web' => 'Berani Berencana - kontrasepsi'
		);
		$this->load->view('default/header', $data);
		$this->load->view('default/p_detail_kontra');
		$this->load->view('default/footer');
	}
	

	public function list_article()
	{
		$data = array(
			'title_web' => 'Berani Berencana - Cari artikel',
			'bb_article' => $this->Asperio_Model->get_all(),
		);

		$this->load->view('default/header', $data);		
		$this->load->view('default/article');
		$this->load->view('default/footer');
		
	}
 
}
