<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webinar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Asperio_Model');
		$this->load->model('WebinarModel', 'model');
          $this->load->helper('config_upload_image');
		$this->load->library('upload');

	}
     function index(){
          if(empty($this->session->userdata('id'))){
               $this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
               redirect('ctrladmin');
          }
          $data = array(
               'title_web' => 'Daftar webinar - Asperio.id',
               'webinar'	=> $this->model->getAll(),
          );
          $this->load->view('admin/header', $data);
          $this->load->view('admin/p_webinar');
          $this->load->view('admin/footer');
     }
     function add(){
          if(empty($this->session->userdata('id'))){
               $this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
               redirect('ctrladmin');
          }
          $data = array(
               'title_web' => 'Daftar webinar - Asperio.id',
               'webinarkategori' => $this->model->getWebinarCategory(),
          );
          $this->load->view('admin/header', $data);
          $this->load->view('admin/p_add_webinar');
          $this->load->view('admin/footer');
     }

     function save(){
          if(empty($this->session->userdata('id'))){
               $this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
               redirect('ctrladmin');
          }
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
          /* title_webinar
          lead_webinar
          webinar
          keywords
          category
          status_webinar */
			$data = array(
				'title'			=> $this->input->post('title_webinar'),
				'slug'			=> url_title($this->input->post('title_webinar'), 'dash', TRUE),
				'author'		     => $this->session->id,
				'lead_webinar'	     => $this->input->post('lead_webinar'),
				'webinar' 		=> $this->input->post('webinar'),
				'keywords'		=> $this->input->post('keywords'),
				'category'		=> $this->input->post('category'),
				'is_published'	     => $this->input->post('status_webinar'),
				'img' 			=> $this->upload->data('file_name'),
				'created_date'	     => $current_date
			);

			// Clean up input from xss to prevent security leaks
			$data = $this->security->xss_clean($data);

			// Check is xss clean or not
			if ($this->security->xss_clean($data['img'], TRUE) === FALSE)
			{
				$this->session->set_flashdata('error_msg', 'Image contain malicious code detected! We will reporting this event.');
				redirect('webinar');
			}
			else
			{
				$insertToDb = $this->model->savewebinar($data);
				
				if($insertToDb){
		        	$this->session->set_flashdata('success_msg', 'Webinar anda berhasil disimpan.');
			    }
			    else
			    {	        	
			    	$this->session->set_flashdata('error_msg', 'Webinar anda gagal disimpan.');
			    }
		       	redirect('webinar');
			}
		}	
          
     }

     function edit($id){
          if(empty($this->session->userdata('id'))){
			$this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
			redirect('ctrladmin');
		}
		$data = array(
			'title_web' 		=> 'Edit Webinar - Asperio.com',
			'webinarkategori'	=> $this->model->getWebinarCategory(),
			'selected_webinar'	=> $this->model->getwebinarbyid($id),
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/p_edit_webinar');
		$this->load->view('admin/footer');
     }

     function delete($id){
          if(empty($this->session->userdata('id'))){
               $this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
               redirect('ctrladmin');
          }
          $delete_webinar = $this->model->deletewebinar($id);

		if($delete_webinar)
		{
			$this->session->set_flashdata('success_msg', 'Artikel berhasil dihapus.');
			redirect('webinar');
		}
		else
		{
			$this->session->set_flashdata('error_msg', 'Terjadi kesalahan, artikel gagal dihapus.');
			redirect('webinar');
		}
     }

     public function update_image_webinar($id)
	{
          if(empty($this->session->userdata('id'))){
               $this->session->set_flashdata('error_msg', 'Anda harus login terlebih dahulu');
               redirect('ctrladmin');
          }
		$location = 'img_webinar';
		$this->upload->initialize(config_upload_image($location));
          print_r($this->input->post('userfile'));
	     if ( ! $this->upload->do_upload('userfile')){
           	$this->session->set_flashdata('error_msg', $this->upload->display_errors());		
			redirect('webinar/edit/'.$id);							
          }else {
               $foto_update = array('img'=> $this->upload->data('file_name'));
               $this->model->update_image_webinar($id, $foto_update);
               $this->session->set_flashdata('success_msg', 'Berhasil merubah foto artikel.');		
			redirect('webinar/edit/'.$id);
          }	
	}
     public function update($id){
          $data = array(
			'title'			=> $this->input->post('title_webinar'),
			'lead_webinar'	=> $this->input->post('lead_webinar'),
			'webinar' 		=> $this->input->post('webinar'),
			'keywords'		=> $this->input->post('keywords'),
			'category'		=> $this->input->post('category'),
			'is_published'	=> $this->input->post('status_webinar'),			
		);
		$data = $this->security->xss_clean($data);
		
		$update_webinar = $this->model->updateWebinar($id, $data);

		if($update_webinar)
		{
			$this->session->set_flashdata('success_msg', 'Perubahan anda berhasil disimpan.');		
			redirect('webinar');
		}
		else
		{
			$this->session->set_flashdata('error_msg', 'Perubahan gagal.');		
			redirect('webinar');
		}
     }
}