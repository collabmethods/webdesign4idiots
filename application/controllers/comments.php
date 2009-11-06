<?php

class Comments extends Controller {
  
  function submit_tutorial_comment()
  {
    $this->comment->submit_comment($this->uri->segment(3),'tutorial');
    redirect('tutorials/show/'.$this->uri->segment(3));
  }
  
  function submit_post_comment()
  {
    $this->comment->submit_comment($this->uri->segment(3),'post');
    redirect('posts/show/'.$this->uri->segment(3));
  }
  
  function delete_comment()
  {
    
  }
  
  function edit_comment()
  {
    
  }
  
}