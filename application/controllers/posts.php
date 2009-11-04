<?php

class Posts extends Controller {
  
  function index()
  {
    $this->load->library('pagination');
    $config['base_url'] = 'http://localhost.com/webdesign4idiots/index.php/posts/index/';
    $config['total_rows'] = $this->db->count_all('posts');
    $config['per_page'] = '1';
    $this->pagination->initialize($config);
    $data['posts'] = $this->db->get('posts', $config['per_page'], $this->uri->segment(3))->result();
    //main content data
    $data['main_content'] = 'posts/all_posts';
    $data['activeNav'] = 'active';
    $this->load->view('includes/template', $data);
  }

  function show() {
    $data['post_data'] = $this->post->get_by_id($this->uri->segment(3));
    
    //get comment data
    $data['comment_data'] = $this->comment->get_by_id($this->uri->segment(3),'post');
    
    //set data for view
    $data['main_content'] = 'posts/single_post';
    $data['activeNav'] = 'active';
    $this->load->view('includes/template', $data);
  }  
 
}