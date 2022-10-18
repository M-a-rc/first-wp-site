<?php
  get_header()
?>

<article>

<?php

  if(have_posts()){
    while(have_posts()){
      the_post();
      the_content();
    }
  }

?>

<div class="top-wrapper">
  <div class="top-wrapper-text">
    <h1 class='color-blue'>Bienvenue chez Valentine, opticien et lunetier</h1>
    <div class="btn-principal">Découvrir</div>
  </div>
  <div class="top-wrapper-image" style="background-image: url(https://plus.unsplash.com/premium_photo-1661255431113-d690d64f69b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Z2xhc3Nlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60)"></div>
</div>


<div class="image-right-wrapper my-5">
  <div class="image-right-wrapper-text">
    <h2>Qui est Valentine ?</h2>
    <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.</p>
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
    <p class="mt-3 text-center">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.</p>
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
      <p class="text-center">Contrôle de vue</p>
    </div>
    <div class="flex-column align-items-center justify-content-center">
      <p class="text-center">Contactologie</p>
    </div>
    <div class="flex-column align-items-center justify-content-center">
      <p class="text-center">Lunettes de soleil</p>
    </div>
  </div>
</div>


<div class="quarter-text-wrapper my-5">
  <div class="container">
    <div class="quarter-text-wrapper-text">
      <h3>LA QUALITÉ AU COEUR DE NOTRE VISION</h3>
      <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.</p>
      <div class="btn-principal">En savoir plus</div>
      <div class="golden-square"></div>
    </div>
  </div>
</div>

</article>

<?php
  get_footer()
?>
