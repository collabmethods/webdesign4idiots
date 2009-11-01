<?php

class Posts extends Controller {
  
  function index()
  {
    $this->load->model('post');
    $data['posts'] = $this->post->fetch_all();
    //main content data
    $data['main_content'] = 'posts/all_posts';
    $data['activeNav'] = 'active';
    $this->load->view('includes/template', $data);
  }

  function show() {
    $this->load->model('post');
    $data['post_data'] = $this->post->get_by_id($this->uri->segment(3));
    
    //get comment data
    $this->load->model('comment');
    $data['comment_data'] = $this->comment->get_by_id($this->uri->segment(3));
    
    //set data for view
    $data['main_content'] = 'posts/single_post';
    $data['activeNav'] = 'active';
    $this->load->view('includes/template', $data);
  }  
 
}