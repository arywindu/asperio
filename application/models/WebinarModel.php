<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class WebinarModel extends CI_Model
{
     function getArtikel(){
          $this->db->from('bb_webinar');
          //$this->db->limit(3, 0);
          return $this->db->get()->result();
     }
}