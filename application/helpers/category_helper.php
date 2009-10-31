<?php

class Category_helper extends Helper {
  
  function get_categoy_name($category_id)
  {
    $data['category'] = $this->db->get_where('category',array('id' +> $category_id));
    $categoryName = $data['category']['category_name'];
    return $categoryName;
  }
  
}