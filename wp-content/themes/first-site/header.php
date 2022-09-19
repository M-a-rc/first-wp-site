<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    wp_head()
  ?>
</head>
<body>

<div class="navbar">
  <div class="container">
    <?php
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => '',
          'theme_location' => 'primary',
          'items_wrap' => '<ul id="" class="d-flex p-0">%3$s</ul>'
        )
      );
    ?>
  </div>
</div>
<div class="container">
  <h1 class="mt-2"><?php the_title() ?></h1>
