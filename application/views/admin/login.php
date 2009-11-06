<div class="login-container">
  <div class="login-box">
    <?=form_open('admin/login/validate_credentials') ?>
      <div class="login-form">
        <h2>Log in to Admin Panel</h2>
        <div id="messages">
        </div>
        <ul>
          <li>
            <?=form_label('username') ?>
            <?=form_input('username','')?>
          </li>
          <li>
            <?=form_label('password') ?>
            <?=form_password('password','')?>
          </li>
          <li class="form-buttons">
            <?=anchor('admin/login/forgot_password','forgot password') ?>
            <?=form_submit('submit','login')?>
          </li>
        </ul>
        <p class="legal">Webdesign4idiots is a trademark of Collab Methods llp. Copyright &copy; 2009 Collab Methods llp.</p>
      <?=form_close() ?>
      <div class="bottom"></div>
  </div>
</div>