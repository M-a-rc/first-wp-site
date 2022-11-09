<?php
  /*
  Template Name: Page Nous Contacter
  */
?>

<?php
  get_header()
?>

<article>

<img class="small-banner" src="<?php the_field('small-banner-image')?>" alt="Banner image">

<div class="discover-wrapper">
  <div class="discover-wrapper-text">
    <span class='small-golden-text'>PAR ICI</span>
    <div class="flex-column align-items-center justify-content-center">
      <h3 class="mb-0">NOUS CONTACTER</h3>
      <div class="mini-border-btm"></div>
    </div>
    <p class="mt-3 text-center"><?php the_field('texte-bloc-nous-contacter')?></p>
  </div>
</div>

<div class="image-right-wrapper mt-2" style="height: 50vh">
  <div class="image-right-wrapper-text dble-container-eq-left-padding">
    <div class="w-100 p-3"style="background-color: #F3F4F6">
      <h2><?php the_field('titre-bloc-1') ?></h2><p style="font-weight: 600"><?php the_field('texte-horaires')?></p><p><?php the_field('texte-bloc-1') ?></p>
      <div class="d-flex align-items-center">
        <img class="text-area-icon" src="http://valentine.s191473.nouvelleagencemediapilote17-0343d5f7ed0a.atester.fr/wp-content/uploads/2022/10/Telephone.png" alt="">
        <p class="my-0"><?php the_field('telephone')?></p>
      </div>
      <div class="d-flex align-items-center mb-3">
        <img class="text-area-icon" src="http://valentine.s191473.nouvelleagencemediapilote17-0343d5f7ed0a.atester.fr/wp-content/uploads/2022/10/Mail.png" alt="">
        <p class="my-0"><?php the_field('email')?></p>
      </div>
      <p style="font-weight: 600">À bientôt</p>
    </div>
  </div>
  <div class="image-right-wrapper-right-part dble-container-eq-right-padding only-mobile">
    <div class="image-right-wrapper-image " style="background-image: url(<?php the_field('image-bloc-nous-contacter') ?>)">
      <div class="image-right-wrapper-right-box"></div>
    </div>
  </div>
</div>


<div class="contact-form">
  <?php echo do_shortcode('[contact-form-7 id="335" title="Contact form 1"]');?>
</div>

</article>

<?php
  get_footer()
?>
