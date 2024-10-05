
<div>
  <!-- Add Post button -->
  <a href="index.php?posts=createForm" type="button" class="btn btn-primary">Add a Post</a>
</div>
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
  <span><?php echo date('d-m-Y', strtotime($post['created_at'])); ?></span>
 | <span><?php echo $post['category_name']; ?></span>
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
  <a href="index.php?posts=show&id=<?php echo $post['id']; ?>" class="button button-style button-anim fa fa-long-arrow-right">
    <span>Read More</span>
  </a>
</div>
<!-- Blog Post End -->
<?php endforeach; ?>