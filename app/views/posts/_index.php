<?php foreach ($posts as $post): ?>
<div class="col-md-12 blog-post row">
  <div class="post-title">
    <a href="single.html">
      <h1>
        <?php echo $post['title']; ?>
      </h1>
    </a>
  </div>
  <div class="post-info">
    <span><?php echo $post['created_at']; ?></span> | <span>xxx</span>
  </div>
  <p>
    <?php
    if (strlen($post['text']) > 150) {
        echo substr($post['text'], 0, 150) . '...';
    } else {
        echo $post['text'];
    }
    ?>
  </p>
  <a href="index.php?posts=show&id=<?php echo $post['id']; ?>" class="block button">
    <span>Read More</span>
</a>
</div>
<!-- Blog Post End -->
<?php endforeach; ?>