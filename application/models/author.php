<?php

class Author extends Model {
  
  function fetch_all()
  {
    $q = $this->db->get('authors');
    foreach ($q->result() as $row) {
      $data[] = $row;
    }
    return $data;
  }
  
  function get_name_by_id($id)
  {
    $this->db->where(array('id' => $id));
    $this->db->select('first_name,last_name');
    $this->db->from('authors');
    $q = $this->db->get();
    foreach ($q->result() as $row) {
      $author = $row->first_name.' '.$row->last_name;
    }
    return $author;
  }
  
}