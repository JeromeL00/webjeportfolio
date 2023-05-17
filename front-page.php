
<?php get_header(); ?>

<section id="home" class="banner py--8">
    <div class="container">

        <div class="banner__wrapper d--flex justify--between">
            <div class="banner__content">
                <h4 class="text--light mt--2">Hello there, I'm</h4>
            <h1 class="text--primary">Mark Jerome Laccay</h1>
            <p class="text--light">And I am a <span class="multiple-text text--primary"></span></p>
            <div class="botton">
                <a class="btn bg--green" href="#">Download CV</a>
            </div>
            
            
            </div>
            <img src="<?php echo get_template_directory_uri()?>./img/Profile (1).png" alt="">
        </div>
        <div class="icons mb--3">
          <h4 class="text--light mb--1">Follow Me On:</h4>
            <ul class="gap--1 ">
              <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-facebook-messenger"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
            </ul>
          
        </div>
       
    </div>
   
  </section>

  <section class="skills  bg--gray">
    <div class="container">
      
      <div class="skills__wrapper d--flex align--center">
        <h3 class="text--primary"><p class="text--light">I am</p> Skilled <span class="text--light">In</span></h3>
        <div class="skills__icons d--flex">
          <div class="figmaWeb">
            <div class="icon" data-hover="Figma Design">
              <ul><i class="fa-brands fa-figma"></i></ul>
            </div>
            <div class="icon" data-hover="Web Development">
              <ul><i class="fa-solid fa-code"></i></ul>
            </div>
          </div>
          <div class="respWp">
            <div class="icon" data-hover="Responsive Web">
              <ul><i class="fa-solid fa-mobile-screen-button"></i></ul>
            </div>
            <div class="icon" data-hover="Wordpress">
              <ul><i class="fa-brands fa-wordpress" style="height: 48px; width: 42px;"></i></ul>
            </div>
          </div>
          
        </div>
        

      </div>
    </div>

  </section>

  <section id="aboutsec" class="aboutMe py--8">
    <div class="container">

      <div class="aboutMe__wrapper d--flex gap--10">
        <img src="<?php echo get_template_directory_uri()?>./img/prof.png" alt="">
        <div class="aboutMe__content" style="text-align: left;">
          <h3 class="text--light mb--3">About <span class="text--primary">Me</span></h3>
          <p class="text--light mb--5 text--justify">I am seeking a job where I can work with my knowledge
            and skills. A workplace where I know I’ll be able to explore
            and improve myself, worthy of my hard work and passion.
            I am a fast learner, active, approachable, and an effective
            communicator.
            <br>
            <br>
            
            Wishing you all a good and blessed day!
            <br>
            <br>
            Thank you.</p>

            <small><a href="about.html" style="padding-left: 0.8rem; padding-right: 0.8rem; padding-top: 0.3rem; padding-bottom: 0.3rem; border-radius: 2rem; color: white;">Read more...</a></small>
        </div>

        

      </div>
    </div>
  </section>

  <section id="portfolio" class="latestProj py--6 text--light">
    <div class="container">
        <div class="latestProj__descr">
        <h3>Latest <span class="text--primary">Project</span></h3>
        <p>Here are my latest projects in web development.</p>
        </div>
        
        <div class="latestProj__wrapper">
            <div class="latestProj__card">
                <div class="cardtitle1 bg--gray">
                    <h4>Wordpress Conversion</h4>
                </div>
                <div class="cardimg">
                    <img src="<?php echo get_template_directory_uri()?>./img/Screenshot (86).png" alt="">
                    <div class="prev text--center">
                        <p class="text--light">Preview</p>
                        <li><a href="#"><i class="fa-solid fa-up-right-from-square"></i></a></li>
                    </div>
                    
                </div>
            </div>
            <div class="latestProj__card">
                <div class="cardtitle1 bg--gray">
                    <h4>Sass/CSS Extension</h4>
                </div>
                <div class="cardimg">
                    <img src="<?php echo get_template_directory_uri()?>./img/Screenshot (87).png" alt="">
                    <div class="prev text--center">
                        <p class="text--light">Preview</p>
                        <li><a href="#"><i class="fa-solid fa-up-right-from-square"></i></a></li>
                    </div>
                    
                </div>
            </div>
            <div class="latestProj__card">
                <div class="cardtitle1 bg--gray">
                    <h4>Tailwind CSS</h4>
                </div>
                <div class="cardimg">
                    <img src="<?php echo get_template_directory_uri()?>./img/Screenshot (88).png" alt="">
                    <div class="prev text--center">
                        <p class="text--light">Preview</p>
                        <li><a href="#"><i class="fa-solid fa-up-right-from-square"></i></a></li>
                    </div>
                    
                </div>
            </div>

        </div>
        <div class="text--center mt--3">
            <a class="text--light" href="portfolio.html"> <u>View all</u></a>
        </div>

        
    </div>
  </section>

  <section id="contact" class="gmaps">
  <div class="maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30971.462755763314!2d121.25043842161824!3d13.992329830542856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd4202cdf3fe2d%3A0xffae037e770624eb!2sBautista%2C%20San%20Pablo%20City%2C%20Laguna!5e0!3m2!1sen!2sph!4v1683072942693!5m2!1sen!2sph" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="border"></div>
  <div class="border2"></div>
  
  </section>

  <section  class="contact">
<div class="container">

  <h1 class="">Contact <span>Me!</span></h1>
  <p class="text--light mb--3">Let's Work Together!</p>
  <div class="contact__wrapper align--center">
    <div class="contact__info mb--3">
      <div class="d--flex align--center gap--1 mb--2">
        <i class="fa-solid fa-phone"></i>
        <p>+63 945 572 0537</p>
      </div>
      <div class="d--flex align--center gap--1 mb--2">
        <i class="fa-solid fa-envelope"></i>
        <p>jeromelaccay183@gmail.com</p>
      </div>
      <div class="d--flex align--center gap--1 mb--2">
        <i class="fa-solid fa-map-location-dot"></i>
        <p>632 Purok 7, Brgy. Bautista <br> 
          San Pablo City, Laguna 4000</p> 
      </div>
    </div>
    <div class="contact__form">
      <form action="">

        <div class=" forms d--flex">
          <div class="inputGroup">
          <label for=""></label>
          <input id="name" type="text" placeholder="Name">
        </div>
        <div class="inputGroup">
          <label for=""></label>
          <input id="email" type="text" placeholder="Email">
        </div>
      </div>
        <div class="forms d--flex">
          <div class="inputGroup">
            <label for=""></label>
            <input type="text" placeholder="Mobile Number">
          </div>
          <div class="inputGroup">
            <label for=""></label>
            <input type="text" placeholder="Subject">
          </div>
        </div>
        <div class="inputGroup">
          <label for=""></label>
          <textarea name="message" id="message" placeholder="Message"></textarea>
        </div>
      </form>
      <div class="btn">
        <a href="#">Send Message</a>
      </div>
      
    </div>
  </div>
</div>
  </section>

<?php get_footer(); ?>