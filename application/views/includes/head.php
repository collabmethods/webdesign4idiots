<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head profile="http://gmpg.org/xfn/11">
    <title>Inquisitivedzign (php,javscript,xhtml,css,best practice, ranting)</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/reset.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tyography.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/css/xcss/"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/master.css" type="text/css" media="screen" charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  <body>
    <div id="top-nav">
      <ul>
        <li>
          <?php echo anchor("",'home',array('class' => $activeNav)) ?>
        </li>
        <li>
          <?php echo anchor('tutorials/index','tutorials') ?>
        </li>
        <li>
          <?php echo anchor('posts/index','blog') ?>
        </li>
        <li>
          <?php echo anchor('screencasts/index','screencasts') ?>
        </li>
        <li>
          <?php echo anchor('static/site/portfolio','portfolio') ?>
        </li>
        <li>
          <?php echo anchor('static/site/contact','contact') ?>
        </li>
        <li class="green">
          <a href="javascript:void(0)" title="">donate!</a>
        </li>
      </ul>
    </div>
    <div id="fakeWrapper">
      <!--<ul id="breadcrumbs">
      </ul>-->
      <div id="wrapper">

