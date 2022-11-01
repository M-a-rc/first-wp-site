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


<div class="image-right-wrapper">
  <div class="image-right-wrapper-text">
    <h2><?php the_field('titre-bloc-1') ?></h2>
    <p><?php the_field('texte-bloc-1') ?></p>
    <div class="btn-principal">Découvrez-nous</div>
  </div>
  <div class="image-right-wrapper-right-box">
    <div class="image-right-wrapper-image" style="background-image: url(https://plus.unsplash.com/premium_photo-1661255431113-d690d64f69b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Z2xhc3Nlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60)"></div>
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



<!-- <script>
  // init controller
  const myElement = document.getElementById('test-trigger')
  console.log(myElement)
  var controller = new ScrollMagic.Controller();
  // build scene
  new ScrollMagic.Scene({
            triggerElement: myElement,
            triggerHook: 0.9, // show, when scrolled 10% into view
            duration: "80%", // hide 10% before exiting view (80% + 10% from bottom)
            offset: 50 // move trigger to center of element
          })
          .setClassToggle("d-none") // add class toggle
          .addTo(controller);
</script> -->


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div id="mobile-carousel-control">
    <div id="carousel-mobile" class="mobile">

      <button id="my-carousel-btn" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
        <span class="visually-hidden">Previous</span>
      </button>

      <div id="mobile-current-brand-logo">
        <div class="carousel-brand active" data-bs-slide-to="0">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Cartier_logo.svg/1200px-Cartier_logo.svg.png" alt="">
        </div>
        <div class="carousel-brand" data-bs-slide-to="1">
          <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Logo_Vuarnet.png" alt="">
        </div>
        <div class="carousel-brand" data-bs-slide-to="2">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Dolce_and_Gabbana.svg/langfr-2880px-Dolce_and_Gabbana.svg.png" alt="">
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
  <div class="quarter-text-wrapper-text">
    <div class='quarter-text-text-area'>
      <h3><?php the_field('titre-bloc-3') ?></h3>
      <p><?php the_field('texte-bloc-3') ?></p>
      <div class="btn-principal">En savoir plus</div>
      <div class="golden-square"></div>
    </div>
    <div class="quarter-text-background-image"></div>
  </div>
</div>


<div class="gallery-thirds left">
  <img src="http://localhost:8000/wp-content/uploads/2022/10/gettyimages-1280635859-1024x1024-1.jpg" alt="Photo du magasin">
  <img src="http://localhost:8000/wp-content/uploads/2022/10/gettyimages-1211886660-1024x1024-1.jpg" alt="Photo du magasin">
</div>

<div class="gallery-thirds right">
  <img src="http://localhost:8000/wp-content/uploads/2022/10/gettyimages-638922412-1024x1024-1.jpg" alt="Photo du magasin">
  <img src="http://localhost:8000/wp-content/uploads/2022/10/gettyimages-1341637738-1024x1024-1.jpg" alt="Photo du magasin">
</div>

</article>

<?php
  get_footer()
?>
