<?php

class Category extends Model {
  
  function fetch_all()
  {
    $q = $this->db->get('category');
    foreach ($q->result() as $row) {
      $data[] = $row;
    }
    return $data;
  }
  
  function get_name_by_id($id)
  {
    $this->db->where(array('id' => $id));
    $this->db->select('name');
    $this->db->from('category');
    $q = $this->db->get();
    foreach ($q->result() as $row) {
      $name = $row->name;
    }
    return $name;
  }
  
}