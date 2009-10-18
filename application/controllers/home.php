<?php

class Home extends Controller {

	function Home()
	{
		parent::Controller();
		$this->session->set_userdata( array('activeTab'=>'home') );
	}

	function index(){
		$bc = array(
               'title' => 'Home',
               'url' => 'home',
               'isRoot' => true
        );
		$this->breadcrumb->setBreadCrumb($bc);

		$data = array(
               'title' => 'My Title',
               'content' => 'home',
               'breadcrumbs'=>get_Instance()->breadcrumblist->display()
        );
		$this->load->view('layout/template/siteLayout',$data);
	}


	function test(){
		$bc = array(
               'title' => 'Test',
               'url' => 'home/test',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);

		$data = array(
               'title' => 'My Title',
               'content' => 'home',
               'breadcrumbs'=>get_Instance()->breadcrumblist->display()
        );


		$this->load->view('layout/template/siteLayout',$data);
	}


	function test2(){
        $bc = array(
               'title' => 'Test 2',
               'url' => 'home/test2',
               'isRoot' => false
        );
        $this->breadcrumb->setBreadCrumb($bc);

		$data = array(
               'title' => 'My Title',
               'content' => 'home',
               'breadcrumbs'=>get_Instance()->breadcrumblist->display()
        );

		$this->load->view('layout/template/siteLayout',$data);
	}
}