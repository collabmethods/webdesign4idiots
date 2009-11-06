<div id="dashboard">
  this is the dashboard
  <?php echo $this->session->userdata('username'); ?>
  <?php echo anchor('admin/login/logout','logout') ?>
</div>