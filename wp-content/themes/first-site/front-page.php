<?php
  get_header()
?>

<article>

<div class="top-wrapper">
  <div class="top-wrapper-text">
    <h1 class='color-blue'><?php the_field('titre-principal') ?></h1>
    <div class="btn-principal">Découvrir</div>
  </div>
  <div class="top-wrapper-image" style="background-image: url(https://plus.unsplash.com/premium_photo-1661255431113-d690d64f69b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Z2xhc3Nlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60)"></div>
</div>


<div class="image-right-wrapper my-5">
  <div class="image-right-wrapper-text">
    <h2><?php the_field('titre-bloc-1') ?></h2>
    <p><?php the_field('texte-bloc-1') ?></p>
    <div class="btn-principal">Découvrez-nous</div>
  </div>
  <div class="image-right-wrapper-right-box">
    <div class="image-right-wrapper-image" style="background-image: url(https://plus.unsplash.com/premium_photo-1661255431113-d690d64f69b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Z2xhc3Nlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60)"></div>
  </div>
</div>

<div class="discover-wrapper bg-gray">
  <div class="discover-wrapper-text">
    <span class='small-golden-text'>DÉCOUVREZ</span>
    <div class="flex-column align-items-center justify-content-center">
      <h3 class="mb-0">NOS MARQUES</h3>
      <div class="mini-border-btm"></div>
    </div>
    <p class="mt-3 text-center"><?php the_field('texte-bloc-marques') ?></p>
  </div>
</div>


<div class="discover-wrapper">
  <div class="discover-wrapper-text">
    <span class='small-golden-text'>DÉCOUVREZ</span>
    <div class="flex-column align-items-center justify-content-center">
      <h3 class="mb-0">NOS SERVICES</h3>
      <div class="mini-border-btm"></div>
    </div>
  </div>
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


<div class="quarter-text-wrapper my-5">
  <div class="container">
    <div class="quarter-text-wrapper-text">
      <h3><?php the_field('titre-bloc-3') ?></h3>
      <p><?php the_field('texte-bloc-3') ?></p>
      <div class="btn-principal">En savoir plus</div>
      <div class="golden-square"></div>
    </div>
  </div>
</div>

</article>

<?php
  get_footer()
?>
