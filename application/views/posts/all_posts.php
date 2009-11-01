<?php if (isset($posts)): ?>
  <?php foreach ($posts->results() as $row): ?>
    <div class="post-container">
      <h2><?php echo anchor('posts/load_post/'.$row->id,$row->title); ?></h2>
      <p class="meta-data">
        <span><?php echo $row->date; ?>, </span>
        <span>in <?php echo $row->category; ?></span>
        <span>by <?php echo $row->author; ?></span>
      </p>
      <div class="post">
        <img src="<?php echo base_url() ?>/assets/post_data/images/code.jpg" alt="tutorial_1" />
        <p><?php echo $row->excerpt; ?></p>
        <?php echo anchor('site/load_post/'.$row->id,'Read more...',array('class' =>'read-more')); ?>
      </div>
      <div class="cloud-comment">
        <span>
          <?php echo $row->comment_count ?>
        </span>
      </div>
    </div>
  <?php endforeach ?>
<?php endif ?>