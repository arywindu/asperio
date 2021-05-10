<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function config_upload_image($folder)
{
	$config['upload_path']          = './upload/'.$folder;
    $config['allowed_types']        = 'gif|jpg|png|jpeg';  
    $config['encrypt_name']			= True;
	$config['detect_mime']			= True;
	$config['mod_mime_fix']			= True;
	$config['overwrite']    		= FALSE;
	$config['max_size']             = 12000;
    $config['max_width']            = 5400;
    $config['max_height']           = 8600;
	$config['detect_mime']			= True;

	return $config;
}
?>