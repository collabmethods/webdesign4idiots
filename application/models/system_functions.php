<?php

  class System_functions extends Model
  {
    
    function truncate($string, $limit, $break=".", $pad="...")
    {
       if(strlen($string) <= $limit) 
       { 
         return $string; 
       }
       else if(false !== ($breakpoint = strpos($string, $break, $limit))) 
       { 
         if($breakpoint < strlen($string) - 1) 
         { 
           $string = substr($string, 0, $breakpoint) . $pad; 
         } 
       } 
       return $string; 
    }
    
    
    
  }
