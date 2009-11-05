<?php if (isset($master_collection)): ?>
  <?php foreach ($master_collection as $row): ?>
    <div class="post-container">
      <h2><?php echo anchor('posts/show/'.$row->id,$row->title); ?></h2>
      <p class="meta-data">
        <span><?php echo mdate("%F %jth %Y",mysql_to_unix($row->date)); ?>, </span>
        <span>in <?php echo get_category_name($row->category); ?></span>
        <span>by <?php echo get_author_name($row->author); ?></span>
      </p>
      <div class="post">
        <img src="<?php echo base_url() ?>/assets/post_data/images/code.jpg" alt="tutorial_1" />
        <p><?php echo $row->excerpt; ?></p>
        <?php if ($row->typeName == 'posts'): ?>
          <?php echo anchor('posts/show/'.$row->id,'Read more...',array('class' =>'read-more')); ?>
        <?php elseif ($row->typeName == 'tuts'): ?>
          <?php echo anchor('tutorials/show/'.$row->id,'Read more...',array('class' =>'read-more')); ?>
        <?php endif ?>
      </div>
      <div class="cloud-comment">
        <span>
          <?php if ($row->typeName == 'posts'): ?>
            <?php echo get_comment_count($row->id,'post'); ?>
          <?php else: ?>
            <?php echo get_comment_count($row->id,'tutorial'); ?>
          <?php endif ?>
        </span>
      </div>
    </div>
  <?php endforeach ?>
  <?php  echo $this->pagination->create_links(); ?>
<?php else: ?>
  <p>this is an error</p>
<?php endif;?>

