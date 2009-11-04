<?php

class Tutorials extends Controller {
  
  function index()
  {
    $this->load->library('pagination');
    $config['base_url'] = 'http://localhost.com/webdesign4idiots/index.php/tutorials/index/';
    $config['total_rows'] = $this->db->count_all('tuts');
    $config['per_page'] = '1';
    $this->pagination->initialize($config);
    
    $data['tutorials'] = $this->db->get('tuts', $config['per_page'], $this->uri->segment(3))->result();
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