<?php

  class Site extends Controller {

    function __construct()
    {
      parent::Controller();
    }
    
    function index()
    { 
      $data['master_collection'] = $this->master->fetch_all();
      $data['main_content'] = 'home';
      $data['activeNav'] = 'active';
      $this->load->view('includes/template', $data);
    }
    
    function portfolio()
    {
      $data['main_content'] = 'portfolio';
      $data['activeNav'] = 'active';
      $this->load->view('includes/template', $data);
    }
    
    function contact()
    {
      $data['main_content'] = 'request';
      $data['activeNav'] = 'active';
      $this->load->view('includes/template', $data);
    }
    
  }