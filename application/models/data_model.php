<?php

  class Data_model extends Model
  {
    function get_all()
    {
      $q = $this->db->query("SELECT * FROM   
      (   
          SELECT id, author, date, title,    
                 category, excerpt, comment_count,   
                 FROM_UNIXTIME(UNIX_TIMESTAMP(date),'%M %D %Y') as dateCol, 
              'posts' as typeName
          FROM posts   
          UNION   
          SELECT id, author, date,title,   
                 category, excerpt, comment_count,   
                 FROM_UNIXTIME(UNIX_TIMESTAMP(date),'%M %D %Y') as dateCol,  
              'tuts' as typeName 
          FROM tuts   
      ) derivedTable  
      ORDER BY date DESC");
      return $q->result();
    }
    
    //POSTS
    function get_posts()
    {
  		$q = $this->db->query("SELECT *, FROM_UNIXTIME(UNIX_TIMESTAMP(date),'%M %D %Y') as date  FROM `posts` ORDER BY `date` DESC");
  		foreach($q->result() as $row) {
  		  $data[] = $row;
  		}
  		return $data;
    }
    
    function get_post_by_id($post_id)
    {
      $q = $this->db->query("SELECT *, FROM_UNIXTIME(UNIX_TIMESTAMP(date),'%M %D %Y') as date  FROM `posts` WHERE id = $post_id");
      return $q->result();
    }
    
    function get_tutorials()
    {
      $q = $this->db->query("SELECT *, FROM_UNIXTIME(UNIX_TIMESTAMP(date),'%M %D %Y') as date  FROM `tuts` ORDER BY `date` DESC");
      return $q->result();
    }
    
    function get_tutorial_by_id($post_id)
    {
      $q = $this->db->query("SELECT *, FROM_UNIXTIME(UNIX_TIMESTAMP(date),'%M %D %Y') as date  FROM `tuts` WHERE id = $post_id");
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
