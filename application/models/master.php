<?php

class Master extends Model {
  
  function fetch_all($limit,$offset)
  {
    $q = $this->db->query("SELECT * FROM   
    (   
        SELECT id, author, date, title,    
               category, excerpt, comment_count,
            'posts' as typeName 
        FROM posts   
        UNION   
        SELECT id, author, date,title,   
               category, excerpt, comment_count, 
            'tuts' as typeName 
        FROM tuts   
    ) derivedTable  
    ORDER BY date DESC Limit $offset,$limit");
    return $q->result();
  }
  
  function count_all()
  {
    $q = $this->db->query("SELECT * FROM   
    (   
        SELECT id, author, date, title,    
               category, excerpt, comment_count,
            'posts' as typeName 
        FROM posts   
        UNION   
        SELECT id, author, date,title,   
               category, excerpt, comment_count, 
            'tuts' as typeName 
        FROM tuts   
    ) derivedTable  
    ORDER BY date DESC");
    return $q->num_rows;
  }
  
}