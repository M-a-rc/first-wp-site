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
    <div class="btn-principal" id="abcdef">Découvrez-nous</div>
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


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" data-bs-interval="5000">
  <div class="carousel-indicators">
    <div class="d-flex justify-content-end align-items-center">
      <div class="carousel-brand active" data-bs-slide-to="0">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Cartier_logo.svg/1200px-Cartier_logo.svg.png" alt="">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="my-indicator" aria-current="true" aria-label="Slide 1"></button>
      </div>
      <div class="carousel-brand" data-bs-slide-to="1">
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Logo_Vuarnet.png" alt="">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="my-indicator" aria-current="true" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-brand" data-bs-slide-to="2">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Dolce_and_Gabbana.svg/langfr-2880px-Dolce_and_Gabbana.svg.png" alt="">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="my-indicator" aria-current="true" aria-label="Slide 3"></button>
      </div>
    </div>
    <div id="btn-brands"class="btn-principal transparent">Nos marques</div>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1517948430535-1e2469d314fe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Z2xhc3Nlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1574258495973-f010dfbb5371?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Z2xhc3Nlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1582142407894-ec85a1260a46?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGdsYXNzZXN8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60" class="d-block w-100" alt="...">
    </div>
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


<div class="quarter-text-wrapper">
  <div class="quarter-text-wrapper-text">
    <h3><?php the_field('titre-bloc-3') ?></h3>
    <p><?php the_field('texte-bloc-3') ?></p>
    <div class="btn-principal">En savoir plus</div>
    <div class="golden-square"></div>
    <div class="quarter-text-background-image neg-container-eq-left-margina"></div>
  </div>
</div>

</article>

<script>
  anime({
  targets: '.image-right-wrapper-image',
  translateX: 250,
  rotate: '1turn',
  backgroundColor: '#FFF',
  duration: 800
});
</script>

<?php
  get_footer()
?>
