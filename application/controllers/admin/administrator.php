<?php

class Administrator extends Controller {
  
  public function index()
  {
    $data['main_content'] = 'admin/dashboard';
    $this->load->view('admin/includes/template',$data);
  }
  
}