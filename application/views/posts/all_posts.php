<?php if (isset($posts)): ?>
  <?php foreach ($posts as $row): ?>
    <div class="post-container">
      <h2><?php echo anchor('posts/show/'.$row->id,$row->title); ?></h2>
      <p class="meta-data">
        <span><?php echo $row->date; ?>, </span>
        <span>in <?php echo $row->category; ?></span>
        <span>by <?php echo $row->author; ?></span>
      </p>
      <div class="post">
        <img src="<?php echo base_url() ?>/assets/post_data/images/code.jpg" alt="tutorial_1" />
        <p><?php echo $row->excerpt; ?></p>
        <?php echo anchor('posts/show/'.$row->id,'Read more...',array('class' =>'read-more')); ?>
      </div>
      <div class="cloud-comment">
        <span>
          <?php echo $row->comment_count ?>
        </span>
      </div>
    </div>
  <?php endforeach ?>
<?php else: ?>
  <p>this is an error</p>
<?php endif;?>

