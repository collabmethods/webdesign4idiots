<?php

  class Data_model extends Model
  {
    function get_all($limit,$offset)
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
      ORDER BY date DESC 
      LIMIT $limit, $offset");
      return $q->result();
    }
    
    function get_all_count()
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
      return $q->num_rows;
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
    
    function update_comment_count($post_id,$comment_count)
    {
      $update = $this->db->update('posts',array('comment_count' => $comment_count),array('id' => $post_id));
    }
    
    
  }
