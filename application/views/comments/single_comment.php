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