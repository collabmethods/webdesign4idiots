<?php if (isset($post_data)): ?>
  <?php foreach ($post_data as $row): ?>
    <div class="post-container">
      <h2><a href="javascipt:void(0)" title="<?php echo $row->title ?>"><?php echo $row->title; ?></a></h2>
      <p class="meta-data">
        <span><?php echo mdate("%F %jth %Y",mysql_to_unix($row->date)); ?>, </span>
        <span>in <?php echo get_category_name($row->category); ?></span>
        <span>by <?php echo get_author_name($row->author); ?></span>
      </p>
      <div class="post">
        <img src="<?php echo base_url() ?>/assets/images/textmate.jpg" alt="tutorial_1" />
        <p><?php echo $row->content; ?></p>
      </div>
    </div>
  <?php endforeach ?>
<?php endif ?>
<div id="comments-container">
  <div class="clear-fix">
    <h3>User Comments</h3>
    <a href="javascript:void(0)" onclick="Effect.SlideDown('new-comment-form');return true;">make a comment</a>
  </div>
  <ul id="new-comment-form" class="comment-list" style="display:none;">
    <li>
      <div class="comment-user">
        <img src="<?php echo base_url() ?>assets/images/avatar.jpg">
        <span>Guest</span>
        <span><?php echo $row->date ?></span>
      </div>
      <div class="comment-content">
        <?php echo form_open('blog/make_comment/'.$row->id); ?>
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
            <?php echo form_submit('blog/make_comment/'.$row->id,'post comment'); ?>
          </li>
        </ul>
        <?php echo form_close(); ?>
      </div>
    </li>
  </ul>
  <ul class="comment-list">
  <?php if (isset($comment_data)): ?>
  <?php foreach ($comment_data as $row): ?>
    <li>
      <div class="comment-user">
        <img src="<?php echo base_url() ?>assets/images/avatar.jpg">
        <span><?php echo $row->author ?></span>
        <span><?php echo mdate("%M %jth %Y",mysql_to_unix($row->date)); ?></span>
      </div>
      <div class="comment-content">
        <p><?php echo $row->content ?></p>
      </div>
    </li>
  <?php endforeach ?>
  <?php else: ?>
    <?php $this->load->view('comments/no_comment'); ?>
  <?php endif ?>
  </ul>
</div><!-- #comments-container -->