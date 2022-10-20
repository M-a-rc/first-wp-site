<?php
  /*
  Template Name: Page Services
  */
?>

<?php
  get_header()
?>

<article>

<div class="discover-wrapper">
  <div class="discover-wrapper-text">
    <span class='small-golden-text'>DÉCOUVREZ</span>
    <div class="flex-column align-items-center justify-content-center">
      <h3 class="mb-0">NOS SERVICES</h3>
      <div class="mini-border-btm"></div>
    </div>
  </div>s
  <div class="small-collection">
    <div class="flex-column align-items-center justify-content-center">
      <p class="text-center"><?php the_field('service-1') ?></p>
    </div>
    <div class="flex-column align-items-center justify-content-center">
      <p class="text-center"><?php the_field('service-2') ?></p>
    </div>
    <div class="flex-column align-items-center justify-content-center">
      <p class="text-center"><?php the_field('service-3') ?></p>
    </div>
  </div>
</div>


<div class="quarter-text-wrapper">
  <div class="quarter-text-wrapper-text container-eq-left-margin">
    <h3><?php the_field('titre-bloc-texte-gauche') ?></h3>
    <p><?php the_field('texte-bloc-texte-gauche') ?></p>
    <div class="btn-principal">En savoir plus</div>
    <div class="golden-square"></div>
    <div class="quarter-text-background-image neg-container-eq-left-margin"></div>
  </div>
</div>

</article>

<?php
  get_footer()
?>
