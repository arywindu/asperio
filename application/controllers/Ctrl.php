<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Asperio_Model');
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
	
	public function kesehatan()
	{		
		// Get total data data;	
		$jumlah_data = $this->Asperio_Model->get_article_row('kesehatan');

		// Set uri segment
		$from = $this->uri->segment(3);

	
		// Config for pagination
		$url = 'ctrl/kesehatan/';
		$per_page = '6';
		$config = config_pagination($url, $jumlah_data, $per_page);

		$this->pagination->initialize($config);
		$this->db->order_by('created_date', 'DESC');			

		$data = array(
			'title_web' => 'Berani Berencana - Kesehatan',
			'article' => $this->Asperio_Model->get_article_from_category('kesehatan', $per_page, $from),
		);
		$this->load->view('default/header', $data);
		$this->load->view('default/page_kesehatan_seksual');
		$this->load->view('default/footer');
	}
	public function kontrasepsi()
	{
		// Get total data data;	
		$jumlah_data = $this->Asperio_Model->get_article_row('kontrasepsi');

		// Set uri segment
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	
		// Config for pagination
		$url = 'ctrl/kontrasepsi/';
		$per_page = '6';
		
		$config = config_pagination($url, $jumlah_data, $per_page);

		$this->pagination->initialize($config);	
		$this->db->order_by('created_date', 'DESC');
		
		$data = array(
			'title_web' => 'Berani Berencana - Kontrasepsi',
			'article' => $this->Asperio_Model->get_article_from_category('kontrasepsi', $per_page, $start_index),
		);

		$this->load->view('default/header', $data);
		$this->load->view('default/page_kontrasepsi');
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
	public function kontrasepsi_kondom()
	{
		$data = array
		(
			'title_web' => 'Berani Berencana - kondom'
		);
		$this->load->view('default/header', $data);
		$this->load->view('default/p_detail_kondom');
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
	public function kontrasepsi_suntikankb()
	{
		$data = array
		(
			'title_web' => 'Berani Berencana - suntikan kb'
		);
		$this->load->view('default/header', $data);
		$this->load->view('default/p_detail_suntikan');
		$this->load->view('default/footer');
	}
	public function kontrasepsi_implan()
	{
		$data = array
		(
			'title_web' => 'Berani Berencana - implan'
		);
		$this->load->view('default/header', $data);
		$this->load->view('default/p_detail_implan');
		$this->load->view('default/footer');
	}
	public function kontrasepsi_iud()
	{
		$data = array
		(
			'title_web' => 'Berani Berencana - iud'
		);
		$this->load->view('default/header', $data);
		$this->load->view('default/p_detail_iud');
		$this->load->view('default/footer');
	}
	public function update()
	{
		$data = array
		(
			'title_web' => 'Berani Berencana - Update'
		);
		$this->load->view('default/header', $data);
		$this->load->view('default/page_update');
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
 
	public function search()
	{
		$keyword = $this->input->post('keyword');

		$data = array(
			'title_web' => 'Hasil : '.$keyword,
			'bb_articles' => $this->Asperio_Model->get_keyword($keyword)
		);
				
		$this->load->view('default/header', $data);			
		$this->load->view('default/search');
		$this->load->view('default/footer');
		
	}
	public function create_comment($slug_article)
	{
		$id_user = $this->session->userdata('id_user');
		$id_article = $this->input->post('article_id');
		$comment = $this->input->post('comment');

		$data = array(
			'id_article' => $id_article,
			'id_user' => $id_user,
			'comment' => $comment,
		);
		$insertToDb = $this->Asperio_Model->add_article_comment($data);
		if($insertToDb)
		{
			//echo "komentar berhasil disimpan";
			$this->session->set_flashdata('success_msg', 'Komentar anda berhasil disimpan.');
			redirect('ctrl/artikel/'.$slug_article.'#comment_section');
		}
		else
		{
			//echo "gagal menyimpan komentar";
			$this->session->set_flashdata('error_msg', 'Komentar anda gagal disimpan.');			
			redirect('ctrl/artikel'.$slug_article.'#comment_section');
		}
	}

}
