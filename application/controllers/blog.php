<?php

  class Blog extends Controller {
    
    function make_comment()
    {
      $this->load->model('data_model');
      $data['insert_comment'] = $this->data_model->insert_comment($this->uri->segment(3));
      $data['comment_count'] = $this->data_model->find_comment_count($this->uri->segment(3));
      foreach ($data['comment_count'] as $commentData) {
        $count = $commentData->comment_count;
      }
      $count = $count + 1;
      $data['update_count'] = $this->data_model->update_comment_count($this->uri->segment(3),$count);
      redirect('site/load_post/'.$this->uri->segment(3));
    }
    
  }