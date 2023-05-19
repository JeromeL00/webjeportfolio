<?php
/*
  Template Name: Contacts
*/
?>

<?php get_header(); ?>

<section class="gmaps">
    <div class="maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30971.462755763314!2d121.25043842161824!3d13.992329830542856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd4202cdf3fe2d%3A0xffae037e770624eb!2sBautista%2C%20San%20Pablo%20City%2C%20Laguna!5e0!3m2!1sen!2sph!4v1683072942693!5m2!1sen!2sph" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="border"></div>
    <div class="border2"></div>
    
</section>

<section class="contact ">
  <div class="container">
  
    <h1><?php echo get_field('contact_title'); ?></h1>
    <p class="text--light"><?php echo get_field('contact_content'); ?></p>
    <div class="contact__wrapper align--center mb--5">
      <div class="contact__info">

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
            <?php echo get_field('button_label'); ?>
        </div>
        
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>