<?php

  class Site extends Controller {

    function Blog()
    {
      parent::Controller();
    }
    
    function index()
    { 
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