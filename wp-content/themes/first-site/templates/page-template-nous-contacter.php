<?php
  /*
  Template Name: Page Nous Contacter
  */
?>

<?php
  get_header()
?>

<article>

<img class="small-banner" src="http://localhost:8000/wp-content/uploads/2022/10/omid-armin-Zt99Ho5Hq3s-unsplash-scaled.jpg" alt="Banner image">

<div class="discover-wrapper">
  <div class="discover-wrapper-text">
    <span class='small-golden-text'>PAR ICI</span>
    <div class="flex-column align-items-center justify-content-center">
      <h3 class="mb-0">NOUS CONTACTER</h3>
      <div class="mini-border-btm"></div>
    </div>
    <p class="mt-3 text-center w-50"><?php the_field('texte-bloc-nous-contacter')?></p>
  </div>
</div>

<div class="image-right-wrapper">
  <div class="text-area">
    <p style="font-weight: 600"><?php the_field('texte-horaires')?></p>
    <div class="d-flex align-items-center">
      <img class="text-area-icon" src="http://localhost:8000/wp-content/uploads/2022/10/Telephone.png" alt="">
      <p class="my-0"><?php the_field('telephone')?></p>
    </div>
    <div class="d-flex align-items-center mb-3">
      <img class="text-area-icon" src="http://localhost:8000/wp-content/uploads/2022/10/Mail.png" alt="">
      <p class="my-0"><?php the_field('email')?></p>
    </div>
    <p style="font-weight: 600">À bientôt</p>
    </div>
  <div class="image-right-wrapper-right-box">
    <div class="image-right-wrapper-image" style="background-image: url(https://plus.unsplash.com/premium_photo-1661255431113-d690d64f69b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Z2xhc3Nlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60)"></div>
  </div>
</div>


<div class="container">
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post();
        get_template_part( 'template-parts/content-page' );    }
    }
  ?>
</div>

</article>

<?php
  get_footer()
?>
