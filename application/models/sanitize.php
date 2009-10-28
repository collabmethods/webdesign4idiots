<?php

  class Sanitize extends Model {
    
    Public $errorStack = array();
    Public $errorMessages = array();
    
    function detect_injection($string)
    {
      if($string)
    }
    
    function sanitize_string($string)
    {
      $string = mysql_real_escape_string(filter_var($string, FILTER_SANITIZE_STRING));
      return $string;
    }
    
    function sanitize_string_collection($stringCollection)
    {
      foreach ($stringCollection as $key => $value) {
        $data[] = mysql_real_escape_string(filter_var($value, FILTER_SANITIZE_STRING));
      }
      return $data;
    }
    
    function validate_email($email)
    {
      $email = mysql_real_escape_string(filter_var($email, FILTER_VALIDATE_EMAIL));
      return $email;
    }
    
  }