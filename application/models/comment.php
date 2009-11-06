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
  
  function get_count($id,$type)
  {
    $this->db->where('post_id',$id);
    $this->db->where('type',$type);
    $this->db->from('comments');
    $count = $this->db->count_all_results();
    return $count;
  }

  function submit_comment($post_id,$type)
  {
    $comment_data = array(
      'id' => '',
      'post_id' => $post_id,
      'type' => $type,
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
