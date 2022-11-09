<?php
  get_header()
?>

<article>

<div class="top-wrapper mb-3">
  <div class="top-wrapper-text">
    <h1 class='color-blue'><?php the_field('titre-banner') ?></h1>
    <a class="btn-principal" href="<?php the_field('url-btn-banner') ?>"><?php the_field('label-btn-banner') ?></a>
  </div>
  <div class="top-wrapper-image img-fluid" style="background-image: url(<?php the_field('image-banner') ?>)"></div>
</div>


<div class="image-right-wrapper my-5">
  <div class="image-right-wrapper-text">
    <h2><?php the_field('titre-bloc-1') ?></h2>
    <p><?php the_field('texte-bloc-1') ?></p>
    <a class="btn-principal" href="<?php the_field('url-btn-bloc-1') ?>"><?php the_field('label-btn-bloc-1') ?></a>
  </div>
  <div class="image-right-wrapper-right-box">
    <div class="image-right-wrapper-image" style="background-image: url(<?php the_field('image-bloc-1') ?>)"></div>
  </div>
</div>

<div id="test-trigger" class="discover-wrapper bg-gray d-none">
  <div class="discover-wrapper-text">
    <span class='small-golden-text'>DÉCOUVREZ</span>
    <div class="flex-column align-items-center justify-content-center">
      <h3 class="mb-0">NOS MARQUES</h3>
      <div class="mini-border-btm"></div>
    </div>
    <p class="mt-3 text-center"><?php the_field('texte-bloc-marques') ?></p>
  </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div id="mobile-carousel-control">
    <div id="carousel-mobile" class="mobile">

      <button id="my-carousel-btn" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
        <span class="visually-hidden">Previous</span>
      </button>

      <div id="mobile-current-brand-logo">
        <div class="carousel-brand active" data-bs-slide-to="0">
            <img src="<?php the_field('logo-marque-1') ?>" alt="logo marque">
        </div>
        <div class="carousel-brand" data-bs-slide-to="1">
          <img src="<?php the_field('logo-marque-2') ?>" alt="logo marque">
        </div>
        <div class="carousel-brand" data-bs-slide-to="2">
          <img src="<?php the_field('logo-marque-3') ?>" alt="logo marque">
        </div>
      </div>

      <button id="my-carousel-btn" class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
        <span class="visually-hidden">Next</span>
      </button>

    </div>
  </div>
  <div class="carousel-indicators desktop">
    <div class="indicator-and-logo">
      <div class="carousel-brand active" data-bs-slide-to="0">
        <img src="<?php the_field('logo-marque-1') ?>" alt="logo marque">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="my-indicator" aria-current="true" aria-label="Slide 1"></button>
      </div>
      <div class="carousel-brand" data-bs-slide-to="1">
        <img src="<?php the_field('logo-marque-2') ?>" alt="logo marque">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="my-indicator" aria-current="true" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-brand" data-bs-slide-to="2">
        <img src="<?php the_field('logo-marque-3') ?>" alt="logo marque">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="my-indicator" aria-current="true" aria-label="Slide 3"></button>
      </div>
    </div>
    <a id="btn-brands" class="btn-principal transparent" href="<?php the_field('url-btn-nos-marques')?>">Nos marques</a>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php the_field('image-marque-1') ?>" class="d-block w-100" alt="image-commerciale-marque">
    </div>
    <div class="carousel-item">
      <img src="<?php the_field('image-marque-2') ?>" class="d-block w-100" alt="image-commerciale-marque">
    </div>
    <div class="carousel-item">
      <img src="<?php the_field('image-marque-3') ?>" class="d-block w-100" alt="image-commerciale-marque">
    </div>
  </div>

</div>

<script>
  const mobileIndicators = document.getElementById("carousel-mobile")
  if (window.innerWidth < 769) {
    mobileIndicators.classList.add('carousel-indicators')
  } else if (window.innerWidth > 769) {
    mobileIndicators.classList.remove('carousel-indicators')
  }
</script>

<div class="discover-wrapper">
  <div class="discover-wrapper-text">
    <span class='small-golden-text'>DÉCOUVREZ</span>
    <div class="flex-column align-items-center justify-content-center">
      <h3 class="mb-0">NOS SERVICES</h3>
      <div class="mini-border-btm"></div>
    </div>
  </div>
  <div class="small-collection">
    <div class="small-collection-sub-div">
      <img class="w-100" src="<?php the_field('logo-service-1') ?>" alt="logo service 1">
      <p class="text-center"><?php the_field('service-1') ?></p>
    </div>
    <div class="small-collection-sub-div">
      <img class="w-100" src="<?php the_field('logo-service-2') ?>" alt="logo service 2">
      <p class="text-center"><?php the_field('service-2') ?></p>
    </div>
    <div class="small-collection-sub-div">
      <img class="w-100" src="<?php the_field('logo-service-3') ?>" alt="logo service 3" >
      <p class="text-center"><?php the_field('service-3') ?></p>
    </div>
  </div>
</div>


<div class="quarter-text-wrapper">
  <div class="quarter-text-wrapper-text">
    <div class='quarter-text-text-area'>
      <h3><?php the_field('titre-bloc-3') ?></h3>
      <p><?php the_field('texte-bloc-3') ?></p>
      <a class="btn-principal" href="<?php the_field('url-btn-bloc-3') ?>"><?php the_field('label-btn-bloc-3') ?></a>
      <div class="golden-square"></div>
    </div>
    <div class="quarter-text-background-image" style="background-image: url(<?php the_field('image-bloc-3')?>)"></div>
  </div>
</div>


<div class="gallery-thirds left pt-5">
  <img src="<?php the_field('gallery-image-1')?>" alt="Photo du magasin">
  <img src="<?php the_field('gallery-image-2')?>" alt="Photo du magasin">
</div>

<div class="gallery-thirds right">
  <img src="<?php the_field('gallery-image-3')?>" alt="Photo du magasin">
  <img src="<?php the_field('gallery-image-4')?>" alt="Photo du magasin">
</div>

</article>

<?php
  get_footer()
?>
