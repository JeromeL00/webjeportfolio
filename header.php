<?php wp_head() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Je_Portfolio Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/css/main.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Inder&display=swap" rel="stylesheet">

</head>
<body>
  <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>

  <script src="jquery-2.1.4.js"></script>

<script>
  $(window).on ("load", function() {
    $(".loader-wrapper") .fadeOut("slow");
  });
</script>
  <header class="header">
    
    <div class="container">
        

        <div class="header__wrapper d--flex justify--between">
            <h2 style="align-items: center;"><?php echo get_field('header_logo'); ?></h2>
            <div class="commentBubble">
              <?php echo get_field('headercontact_fixed'); ?>
            </div>
            <nav class="nav">
                <ul class="d--flex">

                <?php wp_menu_li(); ?>
                
                    <div class="socialLinks d--flex ">
                      <?php echo get_field('header_icons'); ?>
                    </div>
                </ul>
                
            </nav>
            
            
            <div class="toggle__menu">
              <span></span>
              <span></span>
              <span></span>
            </div>
        </div>
    </div>
  </header>