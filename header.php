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
            <h2 style="align-items: center;">J<span class="text--primary">E.</span></h2>
            <div class="commentBubble">
              <a href="#contact"><i class="fa-solid fa-comment"></i></a>
            </div>
            <nav class="nav">
                <ul class="d--flex">
                    <li class="links"><a href="#home">Home</a></li>
                    <li class="links"><a href="#aboutsec">About</a></li>
                    <li class="links"><a href="#portfolio">Portfolio</a></li>
                    <li class="links"><a href="#contact">Contact</a></li>
                    <div class="socialLinks d--flex ">
                      <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-facebook-messenger"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
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