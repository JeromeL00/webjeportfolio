<?php
/*
  Template Name: About
*/
?>

<?php get_header(); ?>

<section class="aboutme bg--gray py--9">
    <div class="container">

         <div class="aboutme__wrapper text--light d--flex">
            <div class="aboutme__content">
                <p>Things to know </p>
                <h1 class="mb--1"><?php echo get_field('about_title'); ?></h1>
                <p class="text--justify">
                <?php echo get_field('about_content'); ?>
                </p>
            </div>
            <?php                    
                    $img = get_field('about_img');
                    if ( !empty($img) ): ?>


                    <img src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt'])?>">


                <?php endif; ?>
         </div>
            <div class="aboutme__icons">
                <?php echo get_field('about_icons'); ?>
            </div>
            
    </div>
</section>

<section class="latestProj py--6 text--light">
    <div class="container">
        <div class="latestProj__descr">
        <h3><?php echo get_field('latestproject_title'); ?></h3>
        <p><?php echo get_field('latestproject_desc'); ?></p> 
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
                        <li><a href="#"><i class="fa-solid fa-up-right-from-square"></i></a></li>
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
            <?php echo get_field('button_label'); ?>
        </div>

        
    </div>
</section>

<?php get_footer(); ?>