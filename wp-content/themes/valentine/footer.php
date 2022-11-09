  <div class="footer-blue" id="footer">
    <div class="footer-content">
      <img src="http://valentine.s191473.nouvelleagencemediapilote17-0343d5f7ed0a.atester.fr/wp-content/uploads/2022/10/Lieu.png" alt="location pin" id='location-pin'>
      <p id="retrouvez-nous">Retrouvez-nous</p>
      <p>Nous vous retrouvons dans notre boutique située en plein coeur de La Rochelle,<br> au 23 rue St-Yon 17000 La Rochelle</p>
    </div>
    <div class='footer-lower-part'>
      <div class="map-and-square">
        <div style="-webkit-filter: grayscale(100%); filter: grayscale(100%);">
          <iframe id="footer-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d807.4786968875998!2d-1.1515952308466686!3d46.16072092365476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480153a8c95831d5%3A0xd367ebd0e297b124!2s23%20Rue%20Saint-Yon%2C%2017000%20La%20Rochelle!5e0!3m2!1sfr!2sfr!4v1665160512736!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="golden-square"></div>
      </div>
      <img src="http://valentine.s191473.nouvelleagencemediapilote17-0343d5f7ed0a.atester.fr/wp-content/uploads/2022/10/blason.png" alt="Logo" id="footer-logo">
      <ul class="list-group list-group-horizontal">
        <li class="footer-list-item"><a href="/cookies">Cookies</a></li>
        <li class="footer-list-item"><a href="/mentions-legales">Mentions légales</a></li>
        <li class="footer-list-item"><a href="/confidentialite">Confidentialité</a></li>
      </ul>
      <p><em>Création : Médiapilote</em></p>
    </div>
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
  const footer = document.getElementById("footer")

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('fa-bars')
    hamburger.classList.toggle('fa-xmark')
    mobileMenu.classList.toggle('d-none')
    document.querySelector('body').classList.toggle('overflow-hidden')
    footer.classList.toggle('d-none')


    mobileMenuElements.forEach(element => {
      if (element.style.display == 'none') {
        element.style.display = 'block'
      } else if(element.style.display == 'block') {
        element.style.display = 'none'
      }
    });
  })

  </script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
</html>
