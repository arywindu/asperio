<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class WebinarModel extends CI_Model
{
     function getLimit(){
          $this->db->from('bb_webinar');
          return $this->db->get()->result();
     }
     function getAll(){
          return $this->db->get('bb_webinar')->result();
     }

     function getAllCount(){
          return $this->getAll()->count();
     }
     function getWebinarCategory(){
          return $this->db->get('bb_webinar_category')->result();
     }

     function savewebinar($data){
          $insert = $this->db->insert('bb_webinar', $data);

        if($insert)
        {
            return true;
        }
        else
        {
            return false;
        }
     }
     function deletewebinar($id){
          $this->db->where('id', $id);
          return $this->db->delete('bb_webinar');
     }
     function getwebinarbyid($id){
          $this->db->from('bb_webinar');
          $this->db->where('id', $id);

          $query = $this->db->get();

          return $query->result();
     }
     function update_image_webinar($id, $foto){
          $this->db->set($foto);
          $this->db->where('id', $id);
          return $this->db->update('bb_webinar');
     }

     function updateWebinar($id, $data){
          $this->db->set($data);
          $this->db->where('id', $id);
          return $this->db->update('bb_webinar'); 
     }
}