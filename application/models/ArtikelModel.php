<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ArtikelModel extends CI_Model
{
     function getArtikel($number, $offset){
          return $this->db->get('bb_article', $number, $offset)->result();
     }

     function getArtikelAll(){
          return $this->db->get('bb_article')->num_rows();
     }
}