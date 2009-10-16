<?php if (isset($post_data)): ?>
  <?php foreach ($post_data as $row): ?>
    <div class="post-container">
      <h2><?php echo anchor('site/load_post/'.$row->id,$row->title); ?></h2>
      <p class="meta-data">
        <span><?php echo $row->date; ?>, </span>
        <span>in <?php echo $row->category; ?></span>
        <span><?php echo $category_name; ?></span>
        <span>by <?php echo $row->author; ?></span>
      </p>
      <div class="post">
        <img src="<?php echo base_url() ?>/assets/images/textmate.jpg" alt="tutorial_1" />
        <p><?php echo $row->content; ?></p>
      </div>
    </div>
  <?php endforeach ?>
<?php endif ?>
<?php if (isset($comment_data)): ?>
  <div id="comments-container">
    <div class="clear-fix">
      <h3>User Comments</h3>
      <a href="#" onclick="Effect.SlideDown('new-comment-form');return false;">make a comment</a>
    </div>
    <ul id="new-comment-form" class="comment-list" style="display:none;">
      <li>
        <div class="comment-user">
          <img src="<?php echo base_url() ?>assets/images/avatar.jpg">
          <span>Guest</span>
          <span><?php echo $row->date ?></span>
        </div>
        <div class="comment-content">
          <?php echo form_open('site/comment_insert'); ?>
          <ul class="comment-form-list">
            <li>
              <?php echo form_textarea('message','Your Message...'); ?>
            </li>
            <li>
              <?php echo form_input('full_name','Your Name'); ?>
            </li>
            <li>
              <?php echo form_input('email','Email'); ?>
            </li>
            <li>
              <?php echo form_input('url','Your Website'); ?>
            </li>
            <li>
              <?php echo anchor('site/new_comment','post comment') ?>
            </li>
          </ul>
          <?php echo form_close(); ?>
        </div>
      </li>
    </ul>
    <ul class="comment-list">
    <?php foreach ($comment_data as $row): ?>
      <li>
        <div class="comment-user">
          <img src="<?php echo base_url() ?>assets/images/avatar.jpg">
          <span><?php echo $row->author ?></span>
          <span><?php echo $row->date ?></span>
        </div>
        <div class="comment-content">
          <p><?php echo $row->content ?></p>
        </div>
      </li>
    <?php endforeach ?>
    </ul>
  </div><!-- #comments-container -->
<?php endif ?>