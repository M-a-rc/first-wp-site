<?php
  /*
  Template Name: Page Services
  */
?>

<?php
  get_header()
?>

<article>

<img class="small-banner" src="http://localhost:8000/wp-content/uploads/2022/10/gettyimages-1144406596-1024x1024-1.jpg" alt="Banner image">

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
      <img src="http://localhost:8000/wp-content/uploads/2022/10/Controle-de-vue.png" alt="logo service 1" class="small-collection-image">
      <p class="text-center"><?php the_field('service-1') ?></p>
    </div>
    <div class="d-flex flex-column align-items-center justify-content-start">
      <img src="http://localhost:8000/wp-content/uploads/2022/10/Contactologie.png" alt="logo service 2" class="small-collection-image">
      <p class="text-center"><?php the_field('service-2') ?></p>
    </div>
    <div class="d-flex flex-column align-items-center justify-content-start">
      <img src="http://localhost:8000/wp-content/uploads/2022/10/Lunettes-de-soleil.png" alt="logo service 3"  class="small-collection-image">
      <p class="text-center"><?php the_field('service-3') ?></p>
    </div>
  </div>
</div>

<div class="quarter-text-wrapper">
  <div class="quarter-text-wrapper-text cropped">
    <div class='quarter-text-text-area cropped'>
      <h3><?php the_field('titre-bloc-texte-gauche') ?></h3>
      <p><?php the_field('texte-bloc-texte-gauche') ?></p>
      <div class="btn-principal">En savoir plus</div>
      <div class="golden-square btm"></div>
    </div>
    <div class="quarter-text-background-image cropped"></div>
  </div>
</div>

</article>

<?php
  get_footer()
?>
