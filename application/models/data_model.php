<?php

  class Data_model extends Model
  {
    //POSTS
    function get_posts()
    {
  		$q = $this->db->query("SELECT *, FROM_UNIXTIME(UNIX_TIMESTAMP(date),'%M %D %Y') as date  FROM `posts`");
  		foreach($q->result() as $row) {
  		  $data[] = $row;
  		}
  		return $data;
    }
    
    function get_post_by_id($post_id)
    {
      $q = $this->db->get_where('posts',array('id' => $post_id));
      return $q->result();
    }
    
    function get_posts_by_type($type)
    {
      $q = $this->db->get_where('posts',array('type' => $type));
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
    
    function find_comment_count($post_id)
    {
      $this->db->select('comment_count');
      $this->db->where('id', $post_id); 
      $q = $this->db->get('posts');
      foreach ($q->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    
    function update_comment_count($post_id,$comment_count)
    {
      $update = $this->db->update('posts',array('comment_count' => $comment_count),array('id' => $post_id));
    }
    
    function insert_comment($post_id)
    {
      $comment_data = array(
        'id' => '',
        'post_id' => $post_id,
        'author' => $this->input->post('full_name'),
        'content' => $this->input->post('message'),
        'date' => date("Y-m-d")
      );
      
      $insert = $this->db->insert('comments',$comment_data);
    }
    
  }
