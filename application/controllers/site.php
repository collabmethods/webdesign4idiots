<?php

  class Site extends Controller {
    
    function Blog()
    {
      parent::Controller();
      
      $this->breadcrumb->setDelimiter('>'); // Optional
    }
    
    function index()
    {
      $this->load->model('data_model');
      $this->load->model('system_functions');
      
      $data['breadcrumb'] = $this->breadcrumb->generate();
      $data['page'] = 'one';
      
      if($query = $this->data_model->get_posts())
      {
        //retrieve all post data 
        $data['records'] = $query;
        foreach ($data['records'] as $row) {
          $data['title'] = $row->title;
        }
        
        //truncate content for home page
        $data['excerpt'] = $this->system_functions->truncate($row->content,500);
        $data['comment_count'] = $this->data_model->fetch_comment_count($row->id);
      }
      
      //get the category of the post
      if($data['category'] = $this->data_model->get_category($row->category)) {
        foreach ($data['category'] as $row)
        {
          $data['category_name'] = $row->name;
        }
      }
      
      //main content data
      $data['main_content'] = 'home';
      $data['activeNav'] = 'active';
      $this->load->view('includes/template', $data);
    }
    
    function load_post()
    {
      $this->load->model('data_model');
      $this->load->model('system_functions');
      $data['breadcrumb'] = $this->breadcrumb->generate();
      
      if($query = $this->data_model->get_post_by_id($this->uri->segment(3)))
      {
        //retrieve all post data 
        $data['post_data'] = $query;
        foreach ($data['post_data'] as $row) {
          $data['title'] = $row->title;
        }
        
        //truncate content for home page
        $data['comment_count'] = $this->data_model->fetch_comment_count($row->id);
      }
      
      //get the category of the post
      if($data['category'] = $this->data_model->get_category($row->category)) {
        foreach ($data['category'] as $row)
        {
          $data['category_name'] = $row->name;
        }
      }
      
      $data['comment_data'] = $this->data_model->get_comments_by_post_id($this->uri->segment(3));

      $data['main_content'] = 'post_view';
      $data['activeNav'] = 'active';
      $this->load->view('includes/template', $data);
    }
    
    function insert_comment()
    {
      
    }
    
  }