<?php echo form_open('blog/make_comment/'.$row->id); ?>
<ul>
  <li>
    <?php echo form_label('message'); ?>
    <?php echo text_area('message'); ?>
  </li>
  <li>
    <?php echo form_label('full name'); ?>
    <?php echo form_input('full_name'); ?>
  </li>
  <li>
    <?php echo form_label('email'); ?>
    <?php echo form_input('email'); ?>
  </li>
  <li>
    <?php echo form_label('url'); ?>
    <?php echo form_input('url'); ?>
  </li>
</ul>
<?php echo form_close(); ?>