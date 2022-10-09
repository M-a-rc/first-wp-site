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

<div class="top-callout">
  <div class="top-callout-image"></div>
  <div class="top-callout-text">
    <h2>Placeholder heading</h2>
    <p>Catchphrase</p>
  </div>
</div>

</article>

<?php
  get_footer()
?>
