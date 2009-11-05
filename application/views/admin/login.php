<?=form_open('administrator/login') ?>
  <ul>
    <li>
      <?=form_input('username','username')?>
    </li>
    <li>
      <?=form_password('password','')?>
    </li>
    <li>
      <?=form_submit('submit','login')?>
    </li>
  </ul>
<?=form_close() ?>