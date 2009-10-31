<?php

class Post_model extends Model {
  
   //POSTS
    function get_posts()
    {
      $q = $this->db->get('posts');
  		foreach($q->result() as $row) {
  		  $data[] = $row;
  		}
  		return $data;
    }
    
    function get_post_count()
    {
      $q = $this->db->count('posts');
      return $q->num_rows;
    }
    
    function get_post_by_id($post_id)
    {
      $q = $this->db->get('posts');
      foreach ($q->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
  
}