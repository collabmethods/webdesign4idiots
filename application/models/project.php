<?php

class Project_model extends Model {
  
  function get_projects()
  {
    $q = $this->db->get('projects');
    foreach ($q->result() as $row) {
      $data[] = $row;
    }
    return $data;
  }
  
  function get_project_by_id($project_id)
  {
    $q = $this->db->get_where('projects',array('id' => $project_id));
    foreach ($q->result() as $row) {
      $data[] = $row;
    }
    return $data;
  }
  
}