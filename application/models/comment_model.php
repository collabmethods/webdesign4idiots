<?php

class Comment_model extends Model {

  function create_comment()
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
  
  function delete_comment()
  {
    
  }
  
  function edit_comment()
  {
    
  }
  
}
