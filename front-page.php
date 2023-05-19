<?php
/*
  Template Name: Home
*/
?>



<?php get_header(); ?>

<section id="home" class="banner py--8">
    <div class="container">

        <div class="banner__wrapper d--flex justify--between">
            <div class="banner__content">
                <h4 class="text--light mt--2"><?php echo get_field('bannersub_title'); ?></h4>
            <h1 class="text--primary"><?php echo get_field('banner_title') ?></h1>
            <p class="text--light"> <?php echo get_field('banner_content') ?></p>
            <div class="botton">
                <?php echo get_field('button_label'); ?>
            </div>
            
            
            </div>
            <?php                    
                    $img = get_field('banner_img');
                    if ( !empty($img) ): ?>


                    <img src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt'])?>">


                <?php endif; ?>
        </div>
        <div class="icons mb--3">
          <h4 class="text--light mb--1">Follow Me On:</h4>
            <?php echo get_field('banner_icons'); ?>
          
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
      <?php                    
                    $img = get_field('aboutme_img');
                    if ( !empty($img) ): ?>


                    <img src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt'])?>">


                <?php endif; ?>
        <div class="aboutMe__content" style="text-align: left;">
          <h3 class="text--light mb--3"><?php echo get_field('aboutme_title') ?></h3>
          <p class="text--light mb--5 text--justify"><?php echo get_field('aboutme_content') ?></p>

            <small><a href="about.php"style="padding-left: 0.8rem; padding-right: 0.8rem; padding-top: 0.3rem; padding-bottom: 0.3rem; border-radius: 2rem; color: white;">Read more...</a></small>
        </div>

        

      </div>
    </div>
  </section>

  <section id="portfolio" class="latestProj py--6 text--light">
    <div class="container">
        <div class="latestProj__descr">
        <h3><?php echo get_field('latestproj_title'); ?></h3>
        <p><?php echo get_field('latestproj_desc'); ?></p>
        </div>
        
        <div class="latestProj__wrapper">

        <?php if(have_rows('card_repeater')) : while(the_repeater_field('card_repeater')) : ?>

            <div class="latestProj__card">

                <div class="cardtitle1 bg--gray">
                    <h4><?php echo get_sub_field('card_title') ?></h4>
                </div>
              <div class="cardimg">
                <?php
                    $img = get_sub_field('card_img');
                        if ( !empty($img) ) :?>


                        <img src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>
                    <div class="prev text--center">
                        <p class="text--light"><?php echo get_sub_field('card_prev') ?></p>
                        <li><a href="http://localhost/cvd/home/"><i class="fa-solid fa-up-right-from-square"></i></a></li>
                    </div>
                    
                </div>
            </div>

            <?php
                    endwhile;
                        else : 
                        echo "no content available";
                    endif;
                    wp_reset_postdata();
                    ?>

        </div>
        <div class="text--center mt--3">
            <?php echo get_field('button_label2'); ?>
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

        <?php if(have_rows('contact_repeater')) : while(the_repeater_field('contact_repeater')) : ?>

    <div class="d--flex align--center gap--1 mb--2">
        <?php echo get_sub_field('contact_icon'); ?>
        <p><?php echo get_sub_field('contact_desc'); ?></p>
    </div>

    <?php
            endwhile;
            else : 
            echo "no content available";
            endif;
            wp_reset_postdata();
            ?>
      
    </div>
    <div class="contact__form">
      <form action="">

      <div class=" forms d--flex">

<?php if(have_rows('contactform_repeater')) : while(the_repeater_field('contactform_repeater')) : ?>

  <div class="inputGroup">
  <?php echo get_sub_field('contactform_name'); ?>
  </div>
  <div class="inputGroup">
  <?php echo get_sub_field('contactform_email'); ?>
  </div>

  <?php
          endwhile;
          else : 
          echo "no content available";
          endif;
          wp_reset_postdata();
          ?>

</div>
<div class="forms d--flex">

<?php if(have_rows('contactform_repeater')) : while(the_repeater_field('contactform_repeater')) : ?>

    <div class="inputGroup">
      <?php echo get_sub_field('contactform_mobilenum'); ?>
    </div>
    <div class="inputGroup">
      <?php echo get_sub_field('contactform_subject'); ?>
    </div>
</div>
    <div class="inputGroup">
      <?php echo get_sub_field('contactform_message'); ?>
    </div>
    <?php
          endwhile;
          else : 
          echo "no content available";
          endif;
          wp_reset_postdata();
          ?>
</form>
      <div class="btn">
        <?php echo get_field('button_label3'); ?>
      </div>
      
    </div>
  </div>
</div>
  </section>

<?php get_footer(); ?>