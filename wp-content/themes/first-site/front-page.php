<?php
  get_header()
?>

<article>

  <p>hello</p>
  <?php
  the_field('page-title');
  ?>
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post();
        the_content();

      }
    }

  ?>
</article>

<?php
  get_footer()
?>
