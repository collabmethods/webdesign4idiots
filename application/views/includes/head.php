<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>Webdesign4idiots (php,javscript,xhtml,css,best practice, ranting)</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/reset.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tyography.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/css/xcss/"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/master.css" type="text/css" media="screen" charset="utf-8" />
    <script src="<?php echo base_url(); ?>assets/js/prototype.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>assets/js/scriptaculous.js" type="text/javascript" charset="utf-8"></script>
    <meta name="name" content="content" charset="utf-8">
  </head>
  <body>
    <div id="top-nav">
      <ul>
        <li>
          <a href="javascript:void(0)" title="" class="<?php echo $activeNav; ?>">home</a>
        </li>
        <li>
          <a href="javascript:void(0)" title="">portfolio</a>
        </li>
        <li>
          <a href="javascript:void(0)" title="">tutorials</a>
        </li>
        <li>
          <a href="javascript:void(0)" title="">articles</a>
        </li>
        <li>
          <a href="javascript:void(0)" title="">screencasts</a>
        </li>
        <li>
          <a href="javascript:void(0)" title="">contact</a>
        </li>
        <li class="green">
          <a href="javascript:void(0)" title="">donate!</a>
        </li>
      </ul>
    </div>
    <div id="fakeWrapper">
      <ul id="breadcrumbs">
        <?php foreach ($breadcrumb as $value): ?>
        <?php echo $value; ?>
        <?php endforeach; ?>
      </ul>
      <div id="wrapper">

