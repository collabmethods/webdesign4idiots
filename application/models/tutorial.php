<?php

class Tutorial extends Model {
  
  function fetch_all()
  {
    $this->db->order_by('date','DESC');
    $q = $this->db->get('tuts');
		foreach ($q->result() as $row) {
		  $data[] = $row;
		}
		return $data;
  }
  
  function get_count()
  {
    $q = $this->db->count('tuts');
    return $q->num_rows;
  }
  
  function get_by_id($tutorial_id)
  {
    $q = $this->db->get_where('tuts',array('id' => $tutorial_id));
    foreach ($q->result() as $row) {
      $data[] = $row;
    }
    return $data;
  }
  
}