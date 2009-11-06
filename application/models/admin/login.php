<?php

class Login extends Model {
  
  function __construct()
  {
    parent::Model();
  }
  

	function logout($username)
	{
	  $status_change = array('status' => 'logged_out');
  	$insert = $this->db->update('users', $status_change,array('username' => $username));
	}
}