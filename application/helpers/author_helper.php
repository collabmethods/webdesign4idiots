<?php
  if (!defined('BASEPATH')) exit('No direct script access allowed');
  if (!function_exists('get_author_name'))
  {
    function get_author_name($author_id)
    {
      $CI =& get_instance();
      $CI->load->model('author');
      return $CI->author->get_name_by_id($author_id); 
    }   
  }
?>