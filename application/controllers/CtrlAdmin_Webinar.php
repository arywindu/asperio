<?php 
class CtrlAdmin_Webinar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Asperio_Model');
		$this->load->helper('config_upload_image');
		$this->load->library('upload');
	}
	
	// Function to add article to database
	public function webinar()
	{
		// Set date time to current date (local time)
		$current_date = date('Y-m-d H:i:s');

		// Set file location
		$location = 'img_webinar';
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
				'title'			=> $this->input->post('title_webinar'),
				'slug'			=> url_title($this->input->post('title_webinar'), 'dash', TRUE),
				'author'		=> $this->session->id,
				'lead_webinar'	=> $this->input->post('lead_webinar'),
				'webinar' 		=> $this->input->post('webinar'),
				'keywords'		=> $this->input->post('keywords'),
				'category'		=> $this->input->post('category'),
				'is_published'	=> $this->input->post('status_webinar'),
				'img' 			=> $this->upload->data('file_name'),
				'created_date'	=> $current_date
			);

			// Clean up input from xss to prevent security leaks
			$data = $this->security->xss_clean($data);

			// Check is xss clean or not
			if ($this->security->xss_clean($data['img'], TRUE) === FALSE)
			{
				$this->session->set_flashdata('error_msg', 'Image contain malicious code detected! We will reporting this event.');
				redirect('ctrladmin/webinar');
			}
			else
			{
				$insertToDb = $this->Asperio_Model->add_webinar($data);
				
				if($insertToDb){
		        	$this->session->set_flashdata('success_msg', 'Webinar anda berhasil disimpan.');
			    }
			    else
			    {	        	
			    	$this->session->set_flashdata('error_msg', 'Webinar anda gagal disimpan.');
			    }
		       	redirect('ctrladmin/webinar');
			}
		}	
	}
	// Function to delete article from database
	public function delete_webinar($id)
	{
		$delete_webinar = $this->Asperio_Model->delete_webinar($id);

		if($delete_webinar)
		{
			$this->session->set_flashdata('success_msg', 'Artikel berhasil dihapus.');
			redirect('ctrladmin/webinar');
		}
		else
		{
			$this->session->set_flashdata('error_msg', 'Terjadi kesalahan, artikel gagal dihapus.');
			redirect('ctrladmin/webinar');
		}
	}

	// Function to update article
	public function update_webinar($id)
	{
		$data = array(
			'title'			=> $this->input->post('title_webinar'),
			'lead_webinar'	=> $this->input->post('lead_webinar'),
			'webinar' 		=> $this->input->post('webinar'),
			'keywords'		=> $this->input->post('keywords'),
			'category'		=> $this->input->post('category'),
			'is_published'	=> $this->input->post('status_webinar'),			
		);
		$data = $this->security->xss_clean($data);
		
		$update_webinar = $this->Asperio_Model->update_webinar($id, $data);

		if($update_webinar)
		{
			$this->session->set_flashdata('success_msg', 'Perubahan anda berhasil disimpan.');		
			redirect('ctrladmin/edit_webinar/'.$id);
		}
		else
		{
			$this->session->set_flashdata('error_msg', 'Perubahan gagal.');		
			redirect('ctrladmin/edit_webinar/'.$id);
		}
	}
	// Function to update image article
	public function update_image_webinar($id)
	{
		$location = 'img_webinar';
		$this->upload->initialize(config_upload_image($location));

		if ( ! $this->upload->do_upload('userfile')){
    		//$error = $this->upload->display_errors();
           	//echo $error;
           	$this->session->set_flashdata('error_msg', $this->upload->display_errors());		
			redirect('ctrlAdmin/edit_webinar/'.$id);							
        }
        else {
        	$this->Asperio_Model->update_image_webinar($id);
        	$this->session->set_flashdata('success_msg', 'Berhasil merubah foto artikel.');		
			redirect('ctrlAdmin/edit_webinar/'.$id);
        }	
	}
	
}
?>