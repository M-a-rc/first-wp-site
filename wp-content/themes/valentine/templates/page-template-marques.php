<?php
  /*
  Template Name: Page Marques
  */
?>

<?php
  get_header()
?>

<article>

<img class="small-banner" src="<?php the_field('small-banner-image')?>" alt="Banner image">

<div class="discover-wrapper">
  <div class="discover-wrapper-text">
    <span class='small-golden-text'>DÉCOUVREZ</span>
    <div class="flex-column align-items-center justify-content-center">
      <h3 class="mb-0">NOS MARQUES</h3>
      <div class="mini-border-btm"></div>
    </div>
    <p class="mt-3 text-center"><?php the_field('texte-bloc-decouvrez-marques')?></p>
  </div>

  <div class="gallery-marques">

    <?php
      $presence = true;
      $i = 1;
      while ($presence == true) : ?>
      <?php if(get_field("image-marque-$i")) : ?>
        <div class="marque-card" style="background-image: url(<?php the_field("image-marque-$i")?>)">
        <div class="logo-sizing-box">
          <div class="logo-marque-card" style="background-image: url(<?php the_field("logo-marque-$i")?>)"></div>
        </div>
        <?php if(get_field("cadre-or-marque-$i")) :?>
          <div class="marque-golden-square"></div>
        <?php endif ?>
        </div>
        <?php $i = $i + 1; ?>
      <?php else : $presence = false ; ?>
      <?php endif ?>
    <?php endwhile ?>

  </div>

</article>

<?php
  get_footer()
?>
