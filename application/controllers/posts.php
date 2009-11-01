<?php

class Posts extends Controller {
  
  function index()
  {
    $this->load->model('post');
    $data['posts'] = $this->post->get();
    //main content data
    $data['main_content'] = 'posts/all_posts';
    $data['activeNav'] = 'active';
    $this->load->view('includes/template', $data);
  }

  function show() {
    $this->load->model('data_model');
    if($query = $this->post_model->get_post_by_id($this->uri->segment(3))) {
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
  
  # /posts/new
  function new() {
    
  }
  
  # /posts  HTTP verb POST
  function create() {
    
  }
  
  function edit() {
    
  }
  
  function update() {
    
  }
 
  function delete() {
    
  }
 
}