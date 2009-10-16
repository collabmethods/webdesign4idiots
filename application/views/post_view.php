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
        <a class="read-more" title="<?php echo $row->title; ?>">Read more...</a>
      </div>
      <div class="cloud-comment">
        <span>
          <?php echo $comment_count ?>
        </span>
      </div>
    </div>
  <?php endforeach ?>
<?php endif ?>

<p>This is awesome</p>