<?php

  class Site extends Controller {

    function Blog()
    {
      parent::Controller();
    }
    
    function index()
    {
      $this->load->model('data_model');
      //retrieve all post data 
      $data['entries'] = $this->data_model->get_all();
      //main content data
      $data['main_content'] = 'home';
      $data['activeNav'] = 'active';
      $this->load->view('includes/template', $data);
    }
    
    function load_post() {
      $this->load->model('data_model');
      if($query = $this->data_model->get_post_by_id($this->uri->segment(3))) {
        //retrieve all post data 
        $data['post_data'] = $query;
        foreach ($data['post_data'] as $row) {
          $data['title'] = $row->title;
        }
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
    
     function load_tut() {
        $this->load->model('data_model');
        if($query = $this->data_model->get_tutorial_by_id($this->uri->segment(3))) {
          //retrieve all post data 
          $data['post_data'] = $query;
          foreach ($data['post_data'] as $row) {
            $data['title'] = $row->title;
          }
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
    
    function tutorials()
    {
      $this->load->model('data_model');
      $data['entries'] = $this->data_model->get_tutorials();
      //main content data
      $data['main_content'] = 'view_tuts';
      $data['activeNav'] = 'active';
      $this->load->view('includes/template', $data);
    }
    
    function articles()
    {
       $this->load->model('data_model');
       $data['entries'] = $this->data_model->get_posts();
        //main content data
        $data['main_content'] = 'view_posts';
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