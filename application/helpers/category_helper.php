<?php
  if (!defined('BASEPATH')) exit('No direct script access allowed');
  if (!function_exists('get_category_name'))
  {
    function get_category_name($category_id)
    {
      $CI =& get_instance();
      $CI->load->model('category');
      return $CI->category->get_name_by_id($category_id); 
    }   
  }
?>