<?php

class Tutorials extends Controller {
  
  function all_tutorials()
  {
    $this->load->model('tutorial_model');
    $data['tutorials'] = $this->tutorial_model->get_tutorials();
    
    //set data for data
    $data['main_content'] = 'tutorials/all_tutorials';
    $data['activeNav'] = 'active';
    $this->load->view('includes/template', $data);
  }
  
  function load_tutorial() {
    $this->load->model('tutorial_model');
    $query = $this->data_model->get_tutorial_by_id($this->uri->segment(3));
    
    //Set data for view
    $data['comment_data'] = $this->comment_model->get_comments_by_tutorial_id($this->uri->segment(3));
    $data['main_content'] = 'post_view';
    $data['activeNav'] = 'active';
    $this->load->view('includes/template', $data);
    }
  
}