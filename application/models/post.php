<?php

class Post extends Model {
  
  function __construct()
  {
    parent::Model();
  }
  
 //POSTS
  function fetch_all()
  {
    $this->db->order_by('date','DESC');
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
    $q = $this->db->get_where('posts',array('id' => $post_id));
    foreach ($q->result() as $row) {
      $data[] = $row;
    }
    return $data;
  }

}