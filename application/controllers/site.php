<?php

  class Site extends Controller {

    function __construct()
    {
      parent::Controller();
    }
    
    Public function index()
    { 
      $this->load->library('pagination');
      $config['base_url'] = 'http://localhost.com/webdesign4idiots/site/index/';
      $config['total_rows'] = $this->master->count_all();
      $config['per_page'] = '4';
      $this->pagination->initialize($config);
      if ($this->uri->segment(3) < 1) {
        $offset = 0;
      }
      else {
        $offset = $this->uri->segment(3);
      }
      $data['master_collection'] = $this->master->fetch_all($config['per_page'],$offset);
      $data['offset_var'] = $offset;
      $data['main_content'] = 'home';
      $data['activeNav'] = 'active';
      $this->load->view('includes/template', $data);
    }
    
    Public function freebies()
    {
      $data['main_content'] = 'freebies';
      $data['activeNav'] = 'active';
      $this->load->view('includes/template', $data);
    }
    
    Public function about()
    {
      $data['main_content'] = 'about';
      $data['activeNav'] = 'active';
      $this->load->view('includes/template', $data);
    }
    
  }