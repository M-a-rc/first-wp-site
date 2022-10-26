<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/d07f028ee8.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js" crossorigin="anonymous"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">

  <?php
    wp_head()
  ?>
</head>
<body>

<div class="sticky-nav">
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

  <script>
   const navLogo = document.querySelector(".custom-navbar-logo")

   navLogo.childNodes[0].innerHTML = `<img src="http://localhost:8000/wp-content/uploads/2022/10/blason.png" id="nav-blason"> <img src="http://localhost:8000/wp-content/uploads/2022/10/logo-sans-blason.png" id="nav-valentine">`

   const navBlason = document.getElementById("nav-blason")
   const navValentine = document.getElementById("nav-valentine")

   console.log(navBlason)
   console.log(navValentine)

   navLogo.addEventListener('mouseenter', () => {
      navValentine.classList.add('d-none')
      navBlason.classList.add('big-blason')
      navLogo.setAttribute("style", "justify-content:flex-start;");
    }
   )
   navLogo.addEventListener('mouseleave', () => {
      navValentine.classList.remove('d-none')
      navBlason.classList.remove('big-blason')
      navLogo.setAttribute("style", "justify-content:center;");

    }
   )

  </script>
</div>
