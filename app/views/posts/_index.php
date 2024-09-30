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
    // Vérifiez si le texte dépasse 300 caractères
    if (strlen($post['text']) > 300) {
        // Troncature du texte à 300 caractères
        echo substr($post['text'], 0, 300) . '...';
    } else {
        // Si le texte est déjà inférieur à 300 caractères, affichez-le tel quel
        echo $post['text'];
    }
    ?>
  </p>
  <a href="books/<?php echo $post['id']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>" class="button">
    <span>Read More</span>
</a>
</div>
<!-- Blog Post End -->
<?php endforeach; ?>