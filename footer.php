<?php wp_footer() ?>

<section class="footerimg">
    <img src="<?php echo get_template_directory_uri()?>./img/Polygon 3.png" alt="">
  </section>

  <footer class="footer py--2 bg--gray">
    <div class="container">
      <div class="footer__wrapper justify--between align--center">
        <div>
          <h2 class="text--light">J<span class="text--primary">E.</span></h2>
        </div>
        
        <div class="social d--flex justify--between">
          <small class="text--light">
            &copy; 2023 • All Rights Reserved
          </small>
          <div class="links">
            <a class="mr--2" href="#">GITHUB</a>
            <a class="mr--2" href="#">FACEBOOK</a>
            <a class="" href="#">INSTAGRAM</a>
          </div>
          
        </div>
      </div>
    </div>
  </footer>





   <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
   <script>
    const typed = new Typed('.multiple-text', {
      strings: ['Web Developer', 'UI/UX Designer'],
      typeSpeed: 100,
      backSpeed: 0,
      fadeOut: true,
      backDelay: 1000,
      loop: true

    });
  </script>

<script src="https://unpkg.com/scrollreveal"></script>

<script>
  ScrollReveal({ 
    reset: true,
    distance: '80px',
    duration: 2000,
    delay: 200 
    });
    ScrollReveal().reveal('.banner__content', { origin: 'top' });
    ScrollReveal().reveal('.banner__content h1', { origin: 'left' });
    ScrollReveal().reveal('.banner__wrapper img', { origin: 'right' });
    ScrollReveal().reveal('.banner .icons', { origin: 'bottom' });
    ScrollReveal().reveal('.aboutMe__content p', { origin: 'right' });   
    ScrollReveal().reveal('.aboutMe img', { origin: 'left' });   
    ScrollReveal().reveal('.aboutMe__content h3', { origin: 'top' });   
    ScrollReveal().reveal('.aboutMe__content small', { origin: 'bottom' });
    ScrollReveal().reveal('.latestProj__descr', { origin: 'top' });
    ScrollReveal().reveal('.latestProj__card', { origin: 'bottom'});   
    ScrollReveal().reveal('.skills__wrapper h3', { origin: 'left'});   
    ScrollReveal().reveal('.skills__wrapper .icon', { origin: 'right'});   
    ScrollReveal().reveal('.contact h1', { origin: 'top'});   
    ScrollReveal().reveal('.contact__info', { origin: 'left'});   
    ScrollReveal().reveal('.contact__form', { origin: 'right'});   
</script>

<script>

  const nav = document.querySelector(".nav");
  const toggle__menu = document.querySelector(".toggle__menu");

  toggle__menu.addEventListener('click', ()=>{
        toggle__menu.classList.toggle("open");
        nav.classList.toggle("open");
  });

</script>

<script>
  const li=document.querySelectorAll(".links");
  const sec=document.querySelectorAll("section");

  function activeMenu(){
      let len=sec.length;
      while(--len && window.scrollY + 97 < sec [len].offsetTop +369){}
      li.forEach(ltx => ltx.classList.remove("active"));
      li[len].classList.add("active");
  }
  activeMenu();
  window.addEventListener("scroll", activeMenu);
</script>


</body>
</html>