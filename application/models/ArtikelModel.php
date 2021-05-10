<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ArtikelModel extends CI_Model
{
     function getArtikel(){
          $this->db->from('bb_article');
          //$this->db->limit(3, 0);
          return $this->db->get()->result();
     }
}