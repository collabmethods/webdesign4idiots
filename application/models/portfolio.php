<?php
class Portfolio extends Model {
  
  $db = $this->db;
  
  function fetch_portfolio()
  {
    $q = $db->get('portfolio');
    foreach ($q->result() as $project) {
      $data[] = $project;
    }
    return $data;
  }
}