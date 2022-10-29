<?php
  /*
  Template Name: Page Qui Est Valentine ?
  */
?>

<?php
  get_header()
?>

<article>

<img class="small-banner" src="http://localhost:8000/wp-content/uploads/2022/10/omid-armin-Zt99Ho5Hq3s-unsplash-scaled.jpg" alt="Banner image">

<div class="discover-wrapper">
  <div class="discover-wrapper-text">
    <span class='small-golden-text'>DÉCOUVREZ</span>
    <div class="flex-column align-items-center justify-content-center">
      <h3 class="mb-0">QUI EST VALENTINE ?</h3>
      <div class="mini-border-btm"></div>
    </div>
    <p class="mt-3 text-center w-50"><?php the_field('texte-bloc-decouvrez-valentine')?></p>
  </div>
  <div class="small-collection">
    <div class="d-flex flex-column align-items-center justify-content-start">
      <img src="http://localhost:8000/wp-content/uploads/2022/10/Service-personnalise.png" alt="logo service 1" class="small-collection-image">
      <p class="text-center"><?php the_field('service-1') ?></p>
    </div>
    <div class="d-flex flex-column align-items-center justify-content-start">
      <img src="http://localhost:8000/wp-content/uploads/2022/10/Expertise.png" alt="logo service 2" class="small-collection-image">
      <p class="text-center"><?php the_field('service-2') ?></p>
    </div>
    <div class="d-flex flex-column align-items-center justify-content-start">
      <img src="http://localhost:8000/wp-content/uploads/2022/10/Selection-exclusive.png" alt="logo service 3"  class="small-collection-image">
      <p class="text-center"><?php the_field('service-3') ?></p>
    </div>
  </div>
</div>

<div class="quarter-text-wrapper">
  <div class="quarter-text-wrapper-text reversed">
    <div class='quarter-text-text-area reversed blue'>
      <h3><?php the_field('titre-bloc-bleu') ?></h3>
      <p><?php the_field('texte-bloc-bleu') ?></p>
      <div class="btn-principal">En savoir plus</div>
      <div class="golden-square"></div>
    </div>
    <div class="quarter-text-background-image"></div>
  </div>
</div>

<div class="quarter-text-wrapper">
  <div class="quarter-text-wrapper-text cropped">
    <div class='quarter-text-text-area cropped'>
      <h3><?php the_field('titre-bloc-3') ?></h3>
      <p><?php the_field('texte-bloc-3') ?></p>
      <div class="btn-principal">En savoir plus</div>
    </div>
    <div class="quarter-text-background-image cropped"></div>
  </div>
</div>

</article>

<?php
  get_footer()
?>
