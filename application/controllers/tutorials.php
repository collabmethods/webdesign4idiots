<?php

class Tutorials extends Controller {
  
  function index()
  {
    $data['tutorials'] = $this->tutorial->fetch_all();
    
    //set data for data
    $data['main_content'] = 'tutorials/all_tutorials';
    $data['activeNav'] = 'active';
    $this->load->view('includes/template', $data);
  }
  
  function show() {
    $data['tutorial'] = $this->tutorial->get_by_id($this->uri->segment(3));
    
    //Set data for view
    if($this->comment->get_by_id($this->uri->segment(3),'tutorial')) {
      $data['comment_data'] = $this->comment->get_by_id($this->uri->segment(3),'tutorial');
    }
    $data['main_content'] = 'tutorials/single_tutorial';
    $data['activeNav'] = 'active';
    $this->load->view('includes/template', $data);
  }
  
}