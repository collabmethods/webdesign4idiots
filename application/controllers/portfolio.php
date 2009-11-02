<?php

class Portfolio extends Controller {
  
  function index()
  {
    $this->load->model('project');
    $data['projects'] = $this->project->fetch_all();
    
    //set data for view
    $data['main_content'] = 'portfolio/all_projects';
    $data['activeNav'] = 'active';
    $this->load->view('includes/template', $data);
  }
  
}