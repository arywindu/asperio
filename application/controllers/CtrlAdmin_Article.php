<?php 
class CtrlAdmin_Article extends CI_Controller {
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('BeraniBerencana_Model');
		$this->load->helper('config_upload_image');
		$this->load->library('upload');
	}
	
	// Function to add article to database
	public function add_article()
	{
		// Set date time to current date (local time)
		$current_date = date('Y-m-d H:i:s');

		// Set file location
		$location = 'img_article';
		$this->upload->initialize(config_upload_image($location));

		if ( ! $this->upload->do_upload('userfile')){
	    	$error_msg = $this->upload->display_errors();
            $this->session->set_flashdata('error_msg', 'Silahkan cek kembali gambar yang anda pilih.');
            echo $error_msg;
            exit;
            #$this->load->view('upload_form', $error);
            // redirect('ds/#testimony');
	    }
	    else
	    {
		    	
			$data = array(
				'title'			=> $this->input->post('title_article'),
				'slug'			=> url_title($this->input->post('title_article'), 'dash', TRUE),
				'author'		=> $this->session->id,
				'lead_article'	=> $this->input->post('lead_article'),
				'article' 		=> $this->input->post('article'),
				'keywords'		=> $this->input->post('keywords'),
				'category'		=> $this->input->post('category'),
				'is_published'	=> $this->input->post('status_article'),
				'img' 			=> $this->upload->data('file_name'),
				'created_date'	=> $current_date
			);

			// Clean up input from xss to prevent security leaks
			$data = $this->security->xss_clean($data);

			// Check is xss clean or not
			if ($this->security->xss_clean($data['img'], TRUE) === FALSE)
			{
				$this->session->set_flashdata('error_msg', 'Image contain malicious code detected! We will reporting this event.');
				redirect('ctrladmin/article');
			}
			else
			{
				$insertToDb = $this->BeraniBerencana_Model->add_article($data);
				
				if($insertToDb){
		        	$this->session->set_flashdata('success_msg', 'Artikel anda berhasil disimpan.');
			    }
			    else
			    {	        	
			    	$this->session->set_flashdata('error_msg', 'Artikel anda gagal disimpan.');
			    }
		       	redirect('ctrladmin/article');
			}
		}	
	}
	// Function to delete article from database
	public function delete_article($id)
	{
		$delete_article = $this->BeraniBerencana_Model->delete_article($id);

		if($delete_article)
		{
			$this->session->set_flashdata('success_msg', 'Artikel berhasil dihapus.');
			redirect('ctrladmin/article');
		}
		else
		{
			$this->session->set_flashdata('error_msg', 'Terjadi kesalahan, artikel gagal dihapus.');
			redirect('ctrladmin/article');
		}
	}

	// Function to update article
	public function update_article($id)
	{
		$data = array(
			'title'			=> $this->input->post('title_article'),
			'lead_article'	=> $this->input->post('lead_article'),
			'article' 		=> $this->input->post('article'),
			'keywords'		=> $this->input->post('keywords'),
			'category'		=> $this->input->post('category'),
			'is_published'	=> $this->input->post('status_article'),			
		);
		$data = $this->security->xss_clean($data);
		
		$update_article = $this->BeraniBerencana_Model->update_article($id, $data);

		if($update_article)
		{
			$this->session->set_flashdata('success_msg', 'Perubahan anda berhasil disimpan.');		
			redirect('ctrladmin/edit_article/'.$id);
		}
		else
		{
			$this->session->set_flashdata('error_msg', 'Perubahan gagal.');		
			redirect('ctrladmin/edit_article/'.$id);
		}
	}
	// Function to update image article
	public function update_image_article($id)
	{
		$location = 'img_article';
		$this->upload->initialize(config_upload_image($location));

		if ( ! $this->upload->do_upload('userfile')){
    		//$error = $this->upload->display_errors();
           	//echo $error;
           	$this->session->set_flashdata('error_msg', $this->upload->display_errors());		
			redirect('ctrlAdmin/edit_article/'.$id);							
        }
        else {
        	$this->BeraniBerencana_Model->update_image_article($id);
        	$this->session->set_flashdata('success_msg', 'Berhasil merubah foto artikel.');		
			redirect('ctrlAdmin/edit_article/'.$id);
        }	
	}
	
}
?>