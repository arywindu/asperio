<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function config_pagination($url,$total_rows, $per_page)
{
    $config['base_url'] = base_url().$url;
    $config['total_rows'] = $total_rows;
    $config['per_page'] = $per_page;
    // custom paging configuration
    $config['num_links'] = 3;
    $config['use_page_numbers'] = TRUE;
    $config['reuse_query_string'] = FALSE;
     
    $config['full_tag_open'] = '<div class="pagination justify-content-center">';
    $config['full_tag_close'] = '</div>';
     
    $config['first_link'] = 'Pertama';
    $config['first_tag_open'] = '<span class="firstlink">';
    $config['first_tag_close'] = '</span>';
     
    $config['last_link'] = 'Terakhir';
    $config['last_tag_open'] = '<span class="lastlink">';
    $config['last_tag_close'] = '</span>';
     
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<span class="nextlink">';
    $config['next_tag_close'] = '</span>';

    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<span class="prevlink">';
    $config['prev_tag_close'] = '</span>';

    $config['cur_tag_open'] = '<span class="curlink">';
    $config['cur_tag_close'] = '</span>';

    $config['num_tag_open'] = '<span class="numlink">';
    $config['num_tag_close'] = '</span>';

    return $config;
    
}
?>