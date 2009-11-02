<?php
  if (!defined('BASEPATH')) exit('No direct script access allowed');
  if (!function_exists('get_comment_count'))
  {
    function get_comment_count($post_id,$type)
    {
      $CI =& get_instance();
      $CI->load->model('comment');
      return $CI->comment->get_count($post_id,$type); 
    }   
  }
?>