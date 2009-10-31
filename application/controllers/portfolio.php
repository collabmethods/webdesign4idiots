<?php

class Portfolio extends Controller {
  
  function all_projects()
  {
    $this->load->model('project_model');
    $data['projects'] = $this->project_model->get_all_projects();
    
    //set data for view
    $data['main_content'] = 'portfolio/all_projects';
    $data['activeNav'] = 'active';
    $this->load->view('includes/template', $data);
  }
  
}