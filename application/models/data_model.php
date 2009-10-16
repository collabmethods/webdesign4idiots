<?php

  class Data_model extends Model
  {
    //POSTS
    function get_posts()
    {
  		$q = "SELECT *, FROM_UNIXTIME(UNIX_TIMESTAMP(date),'%M %D %Y') as date  FROM `posts`";
  		$query = $this->db->query($q);
  		return $query->result();
    }
    
    function get_post_by_id($post_id)
    {
      $q = $this->db->get_where('posts',array('id' => $post_id));
      return $q->result();
    }
    
    function fetch_comment_count($post_id)
    {
      $q = $this->db->get_where('comments',array('post_id' => $post_id));
      if($q->num_rows > 0) {
        $result = $q->num_rows();
      }
      else {
        $result = 0;
      }
      return $result;
    }
    
    function get_category($cat_id)
    {
      $q = $this->db->get_where('category',array('id' => $cat_id));
  		return $q->result();
    }
    
    //COMMENTS
    function get_comments_by_post_id($post_id)
    {
      $q = $this->db->get_where('comments',array('post_id' => $post_id));
      return $q->result();
    }
    
  }
