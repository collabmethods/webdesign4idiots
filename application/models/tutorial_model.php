<?php

class Tutorial_model extends Model {
  
    function get_tutorials()
    {
      $q = $this->db->get('tuts');
  		foreach ($q->result() as $row) {
  		  $data[] = $row;
  		}
  		return $data;
    }
    
    function get_tutorial_count()
    {
      $q = $this->db->count('tuts');
      return $q->num_rows;
    }
    
    function get_tutorial_by_id($tutorial_id)
    {
      $q = $this->db->get_where('tuts',array('id' => $tutorial_id));
      foreach ($q->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
  
}