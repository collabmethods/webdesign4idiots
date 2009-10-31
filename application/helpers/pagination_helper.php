<?php

class Pagination_helper extends Helper {
  
  function paginate_data($route,$totalRows,$pageLimit,$dataResults)
  {
    $this->load->library('pagination');
    $config['base_url'] = $route;
    $config['total_rows'] = $totalRows;
    $config['per_page'] = $pageLimit;
    $this->pagination->initialize($config);
  }
  
}