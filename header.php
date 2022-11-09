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

<?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  if ( has_custom_logo() ) {
	  echo '<link rel="shortcut icon" type="image/x-icon" href="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
  }
?>

</head>
<body>

<i id="hamburger" class="fa-solid fa-bars"></i>
<div class="sticky-nav">
  <div id='desktop-menu' class="container">
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

  <div id="mobile-menu-modal" class="d-none">
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
  // Hover logo :
   const navLogo = document.querySelector(".custom-navbar-logo")

   navLogo.childNodes[0].innerHTML = `<img src="http://valentine.s191473.nouvelleagencemediapilote17-0343d5f7ed0a.atester.fr/wp-content/uploads/2022/10/blason.png" id="nav-blason"> <img src="http://valentine.s191473.nouvelleagencemediapilote17-0343d5f7ed0a.atester.fr/wp-content/uploads/2022/10/logo-sans-blason.png" id="nav-valentine">`

   const navBlason = document.getElementById("nav-blason")
   const navValentine = document.getElementById("nav-valentine")

   navLogo.addEventListener('mouseenter', () => {
      navValentine.classList.add('d-none')
      navBlason.classList.add('big-blason')
      navLogo.childNodes[0].setAttribute("style", "justify-content:flex-start;")
    }
   )
   navLogo.addEventListener('mouseleave', () => {
      navValentine.classList.remove('d-none')
      navBlason.classList.remove('big-blason')
      navLogo.childNodes[0].setAttribute("style", "justify-content:center;")

    }
   )

  //  Responsive Mobile :
  const hamburger = document.getElementById("hamburger")
  const mobileMenu = document.getElementById("mobile-menu-modal")
  const mobileMenuElements = mobileMenu.querySelectorAll(".desktop-menu-element")

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('fa-bars')
    hamburger.classList.toggle('fa-xmark')
    mobileMenu.classList.toggle('d-none')
    document.querySelector('body').classList.toggle('overflow-hidden')

    mobileMenuElements.forEach(element => {
      if (element.style.display == 'none') {
        element.style.display = 'block'
      } else if(element.style.display == 'block') {
        element.style.display = 'none'
      }
    });
  })

  </script>
</div>
