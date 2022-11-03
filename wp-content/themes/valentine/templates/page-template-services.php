<?php
  /*
  Template Name: Page Services
  */
?>

<?php
  get_header()
?>

<article>

<img class="small-banner" src="<?php the_field('small-banner-image')?>" alt="Banner image">

<div class="discover-wrapper">
  <div class="discover-wrapper-text">
    <span class='small-golden-text'>DÉCOUVREZ</span>
    <div class="flex-column align-items-center justify-content-center">
      <h3 class="mb-0">NOS SERVICES</h3>
      <div class="mini-border-btm"></div>
    </div>
    <p class="mt-3 text-center"><?php the_field('texte-bloc-decrouvrez-services')?></p>
  </div>
  <div class="small-collection">
    <div class="d-flex flex-column align-items-center justify-content-start">
      <img src="<?php the_field('logo-service-1') ?>" alt="logo service 1" class="small-collection-image">
      <p class="text-center"><?php the_field('service-1') ?></p>
    </div>
    <div class="d-flex flex-column align-items-center justify-content-start">
      <img src="<?php the_field('logo-service-2') ?>" alt="logo service 2" class="small-collection-image">
      <p class="text-center"><?php the_field('service-2') ?></p>
    </div>
    <div class="d-flex flex-column align-items-center justify-content-start">
      <img src="<?php the_field('logo-service-3') ?>" alt="logo service 3"  class="small-collection-image">
      <p class="text-center"><?php the_field('service-3') ?></p>
    </div>
  </div>
</div>

<div class="quarter-text-wrapper">
  <div class="quarter-text-wrapper-text cropped">
    <div class='quarter-text-text-area cropped'>
      <h3><?php the_field('titre-bloc-texte-gauche') ?></h3>
      <p><?php the_field('texte-bloc-texte-gauche') ?></p>
      <a class="btn-principal" href="<?php the_field('url-btn-bloc-texte-gauche') ?>"><?php the_field('label-btn-bloc-texte-gauche') ?></a>
      <div class="golden-square btm"></div>
    </div>
    <div class="quarter-text-background-image cropped" style="background-image: url(<?php the_field('image-bloc-texte-gauche')?>)"></div>
  </div>
</div>

</article>

<?php
  get_footer()
?>
