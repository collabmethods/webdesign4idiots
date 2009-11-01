<?php

class Post extends Model {
  
   //POSTS
    function get()
    {
      $q = $this->db->get('posts');
  		foreach($q->result() as $row) {
  		  $data[] = $row;
  		}
  		return $data;
    }
    
    function get_count()
    {
      $q = $this->db->count('posts');
      return $q->num_rows;
    }
    
    function get_by_id($post_id)
    {
      $q = $this->db->get('posts');
      foreach ($q->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
  
}