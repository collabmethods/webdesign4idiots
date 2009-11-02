<?php

class Comment extends Model {
  
  function get_by_id($id,$type)
  {
    $q = $this->db->get_where('comments',array('post_id' => $id,'type' => $type));
    foreach ($q->result() as $row) {
      $data[] = $row;
    }
    if(isset($data)) {
      return $data; 
    }
  }

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
