<h2>Request a Quote</h2>
<?php echo form_open('forms/request') ?>
<ul id="contact-form">
  <li>
    <?php echo form_input('first_name','first name') ?>
  </li>
  <li>
    <?php echo form_input('last_name','last name') ?>
  </li>
  <li>
    <?php echo form_input('email','email') ?>
  </li>
  <li>
    <?php echo form_input('project','project_description') ?>
  </li>
  <li>
    <select name="budget">
      <option value="select">Select a budget</option>
      <option value="small">$5000-$10,000</option>
      <option value="medium">$10,000-$20,000</option>
      <option value="big">$20,000+</option>
    </select>
  </li>
  <li>
    <?php echo form_submit('submit','send request') ?>
  </li>
</ul>
<?php echo form_close(); ?>