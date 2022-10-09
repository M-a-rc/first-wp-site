<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/d07f028ee8.js" crossorigin="anonymous"></script>
  <?php
    wp_head()
  ?>
</head>
<body>

<div>
  <div class="container">
    <?php
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => '',
          'theme_location' => 'primary',
          'items_wrap' => '<ul id="" class="nav">%3$s</ul>'
        )
      );
    ?>
  </div>
</div>
<div class="container">
