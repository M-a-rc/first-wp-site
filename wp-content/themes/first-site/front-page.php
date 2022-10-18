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

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li class="my-indic" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li class="my-indic" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li class="my-indic" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 my—carousel-image" src="https://images.unsplash.com/photo-1517948430535-1e2469d314fe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Z2xhc3Nlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 my—carousel-image" src="https://images.unsplash.com/photo-1574258495973-f010dfbb5371?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Z2xhc3Nlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 my—carousel-image" src="https://images.unsplash.com/photo-1582142407894-ec85a1260a46?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGdsYXNzZXN8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
