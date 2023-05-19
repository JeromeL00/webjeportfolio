<?php
/*
  Template Name: Portfolio
*/
?>

<?php get_header(); ?>

<section class="recentProj py--8">
  <div class="container">
    <h2 class="text--light"><?php echo get_field('portfoliosass_title'); ?></h2>
    <p class="text--light mb--3"><?php echo get_field('portfoliosass_content'); ?></p>

    <div class="recentProj__wrapper">
      <h3 class="text--light mb--2"><?php echo get_field('sasscardsub_title'); ?></h3>
      <div class="recentProj__items">

      <?php if(have_rows('card_repeater')) : while(the_repeater_field('card_repeater')) : ?>

        <div class="item1">
        <?php
                    $img = get_sub_field('sasscard_img');
                        if ( !empty($img) ) :?>


                        <img src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>
          <div class="link">
            <a class="text--light" href="#"><?php echo get_sub_field('sasscard_prev'); ?></a>
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
      <div class="my-slider">

      <?php if(have_rows('card_repeater')) : while(the_repeater_field('card_repeater')) : ?>

        <div class="item1">
        <?php
                    $img = get_sub_field('sasscard_img');
                        if ( !empty($img) ) :?>


                        <img src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>
          <div class="link">
            <a class="text--light" href="#"><?php echo get_sub_field('sasscard_prev'); ?></a>
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

    </div>
  </div>
</section>

<section class="recentProjTW">
  <div class="container">
    <h2 class="text--light mb--3" style="position: relative; bottom: 9rem; font-weight: 600;"><?php echo get_field('tw_title'); ?></h2>
    <div class="recentProjTW__wrapper">
      <div>
        <div class="recentProjTW__items d--flex">

        <?php if(have_rows('tw_repeater')) : while(the_repeater_field('tw_repeater')) : ?>

        <div class="img1">
          <?php
                    $img = get_sub_field('tw_img');
                        if ( !empty($img) ) :?>


                        <img src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>
            <div class="link">
              <a class="text--light" href="#"><?php echo get_sub_field('tw_prev'); ?></a>
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
        <div class="recentProjTW__items d--flex">

        <?php if(have_rows('tw_repeater2')) : while(the_repeater_field('tw_repeater2')) : ?>

        <div class="img3">
          <?php
                    $img = get_sub_field('tw_img2');
                        if ( !empty($img) ) :?>


                        <img src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>
            <div class="link">
            <a class="text--light" href="#"><?php echo get_sub_field('tw_prev2'); ?></a>
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
      </div>
      

      <div class="recentProjTW__left">
        <div class="githubLink d--flex align--center gap--1 mb--2">
          <i class="fa-brands fa-github"></i>
          <p><?php echo get_field('twaccordion_title'); ?></p>
        </div>

        <ul id="accordion">
          <?php echo get_field('twaccordion_items'); ?>

          <li>
          <?php echo get_field('twaccordion_item2'); ?>
            
          </li>
        </ul>
      </div>
      
    </div>
  </div>
</section>

<section class="myExperience bg--gray">
  <div class="container">
    <div class="adjust">
      <h2 class="text--light" style="font-size: 3rem;"><?php echo get_field('exp_title'); ?></h2>
      <p class="text--light"><?php echo get_field('exp_content'); ?></p>
  <div class="Exp-slider">

    <?php if(have_rows('exp_repeater')) : while(the_repeater_field('exp_repeater')) : ?>

      <div class="myExperience__items">
        <div class="Exp-TPic">
          <div class="Exp-T">
            <h3 class="text--light" style="font-size: 1rem; font-weight: 600;"><?php echo get_sub_field('expsub_title1'); ?></h3>
        </div>
        <?php
                    $img = get_sub_field('exp_img');
                        if ( !empty($img) ) :?>


                        <img src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>
        </div>
        <div class="Exp-TPic__content">
          <h3><?php echo get_sub_field('expsub_title2'); ?></h3>
          <p><?php echo get_sub_field('expsub_content'); ?></p>
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
    
    </div>
    
  </div>
</section>

<?php get_footer(); ?>