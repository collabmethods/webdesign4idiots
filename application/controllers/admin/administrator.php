<?php

class Administrator extends Controller {
  
  function __construct()
  {
    parent::Controller();
  }
  
  Public function index()
  {
    $data['main_content'] = 'admin/login';
    $this->load->view('admin/includes/template', $data);
  }
  
}