<?php

class Login extends Controller {
  
  function __construct()
  {
    parent::Controller();
  }
  
  Public function index()
  {
    $data['main_content'] = 'admin/login';
    $this->load->view('admin/includes/template', $data);
  }
  
  function validate_credentials()
	{		
	   $q = $this->db->get_where('users',array('username' => $this->input->post('username')));
	   foreach ($q->result() as $row) 
	   {
	     	$data = array(
   				'username' => $this->input->post('username'),
   				'is_logged_in' => true,
   				'user_id' => $row->id,
   				'first_name' => $row->first_name,
   				'last_name' => $row->last_name,
   				'email' => $row->email
   			);
	   }
    	$status_change = array (
  		  'status' => 'logged_in'
  		);

  	  $insert = $this->db->update('users', $status_change,array('username' => $this->input->post('username'),'role' => 1));
			$this->session->set_userdata($data);

  		redirect('admin/administrator/index');
	}
	
	function forgot_password()
	{
	  
	}

	function logout()
	{
	  $status_change = array (
		  'status' => 'logged_out'
		);
	  $insert = $this->db->update('users', $status_change,array('username' => $this->input->post('username')));
	  $this->session->sess_destroy();
		redirect('admin/login/index');
	}
  
}