<h2>Contact Us</h2>
<ul class="messages">
</ul>
<?php echo form_open('site/validate_contact',array("class" => "contact-form")) ?>
  <ul>
    <li>
      <?php echo form_label('First Name') ?>
      <?php echo form_input('first_name','') ?>
    </li>
    <li>
      <?php echo form_label('last Name') ?>
      <?php echo form_input('last_name','') ?>
    </li>
    <li>
      <?php echo form_label('Email') ?>
      <?php echo form_input('email','') ?>
    </li>
    <li>
      <?php echo form_label('comment') ?>
      <?php echo form_textarea('comment','') ?>
    </li>
    <li clas="form-buttons">
      <?php echo form_submit('submit','submit') ?>
    </li>
  </ul>
<?php echo form_close() ?>