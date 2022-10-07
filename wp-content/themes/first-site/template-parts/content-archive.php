<div class="container">
  <div class="card mb-2 mx-auto w-50" style="width: 18rem;">
    <div class="card-body d-flex felx-column">
      <img src="<?php the_post_thumbnail_url()?>" alt="" style="height:100px">
      <div class="p-3">
        <h5 class="card-title"><?php the_title() ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php the_date() ?></h6>
        <p class="card-text"> <?php the_excerpt() ?></p>
        <a href="<?php the_permalink()?>" class="card-link">Lire</a>
      </div>
    </div>
  </div>
</div>
