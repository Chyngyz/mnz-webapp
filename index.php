<?php

  $path = str_replace('index.php', '' , $_SERVER['SCRIPT_NAME']);
  $root = "http://".$_SERVER['HTTP_HOST'].$path;

?><!doctype html>
<html class="no-js" lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mnz webapp</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="assets/styles/vendor.css">
    <link rel="stylesheet" href="assets/styles/main.css">
  
    <script src="<?php echo $root; ?>assets/js/vendor/modernizr/modernizr.js"></script>
  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="m-app-loading">
      <!-- BEGIN: Actual animated container. -->
      <div class="animated-container">
        <div class="load-wrap">
          <div class="loader-circle"></div>
          <div class="loader-line-mask">
            <div class="loader-line"></div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
          <path d="M10.4,10.3c0.9-1.1,2.1-2,3.2-2.9c5.6-4.3,12.6-7,19.7-7.3C42-0.4,50.9,2.6,57.6,8.4c0.7,0.6,1.9,1.7,1.9,1.7L35,60L10.4,10.3z M66.5,50.2l0.8-1.7c5.2-12.1,2.7-27.2-6.4-36.9L66.5,50.2z M8.9,11.9L8.9,11.9c-1.1,1.1-2,2.3-2.8,3.5c-5,7.2-7,16.4-5.6,25c0.4,3.2,1.5,6.4,2.8,9.4l0.2,0.4L8.9,11.9z M12.4,27.2l-0.1,0c-1.2,9.5-2.6,19-3.9,28.6c-0.1,0.6-0.3,1.8-0.3,1.8l0.8,0.9c0,0,2.8,2.7,4.2,4c3.4,2.7,7.2,4.7,11.3,6c2.9,0.8,6,1.6,9.1,1.5L12.4,27.2z M36.6,69.9c9.6-0.2,18.9-4.8,25.1-12.2c-0.8-5.5-1.5-11.1-2.3-16.6c-0.6-4.5-1.3-9-1.8-13.6c-0.1,0-0.2,0-0.2,0L36.6,69.9z"/>
        </svg>
      </div>
      <!-- END: Actual animated container. -->
    </div>
    <!-- END: App-Loading Screen. -->

    
    <div class="main-content"></div>

    <!-- <nav>
      <a href="javascript:void(0);" data-switchto="about">About</a>
      <a href="javascript:void(0);" data-switchto="services">Services</a>
      <a href="javascript:void(0);" data-switchto="services/corporate">Services Corporate</a>
      <a href="javascript:void(0);" data-switchto="team">Team</a>
      <a href="javascript:void(0);" data-switchto="testimonials">Testimonials</a>
    </nav> -->

    <div class="burger light"></div>

    <div class="audio-wrapper">
      <audio id="bgAudio" src="assets/media/bg-audio.mp3" preload="auto" controls loop></audio>
      <div class="audio-player">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <span class="audio-player--title">вык</span>
      </div>
    </div>
    

    <div class="contacts">
      <div class="tel">+(996) 773 777 555<br>+(996) 554 999 223</div>
      <div class="address">ул. Советская 2, Здание Хан,<br>3 этаж, г. Бишкек</div>
      <ul class="social-icons">
        <li>
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <path d="M 7 5 C 5.9069372 5 5 5.9069372 5 7 L 5 25 C 5 26.093063 5.9069372 27 7 27 L 25 27 C 26.093063 27 27 26.093063 27 25 L 27 7 C 27 5.9069372 26.093063 5 25 5 L 7 5 z M 7 7 L 25 7 L 25 25 L 19.8125 25 L 19.8125 18.25 L 22.40625 18.25 L 22.78125 15.25 L 19.8125 15.25 L 19.8125 13.3125 C 19.8125 12.4385 20.02825 11.84375 21.28125 11.84375 L 22.90625 11.84375 L 22.90625 9.125 C 22.62925 9.088 21.6665 9.03125 20.5625 9.03125 C 18.2585 9.03125 16.6875 10.417 16.6875 13 L 16.6875 15.25 L 14.0625 15.25 L 14.0625 18.25 L 16.6875 18.25 L 16.6875 25 L 7 25 L 7 7 z" color="#000" overflow="visible" font-family="Bitstream Vera Sans"></path>
            </svg>
          </a>
        </li>
        <li>
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <path d="M 8 5 C 6.3550302 5 5 6.3550302 5 8 L 5 24 C 5 25.64497 6.3550302 27 8 27 L 24 27 C 25.64497 27 27 25.64497 27 24 L 27 8 C 27 6.3550302 25.64497 5 24 5 L 8 5 z M 21 8 L 24 8 L 24 11 L 21 11 L 21 8 z M 16 12 C 18.220984 12 20 13.779016 20 16 C 20 18.220984 18.220984 20 16 20 C 13.779016 20 12 18.220984 12 16 C 12 13.779016 13.779016 12 16 12 z M 7 14 L 10.34375 14 C 10.122261 14.624412 10 15.301793 10 16 C 10 19.301864 12.698136 22 16 22 C 19.301864 22 22 19.301864 22 16 C 22 15.301793 21.877739 14.624412 21.65625 14 L 25 14 L 25 24 C 25 24.56503 24.56503 25 24 25 L 8 25 C 7.4349698 25 7 24.56503 7 24 L 7 14 z" color="#000" overflow="visible" font-family="Bitstream Vera Sans"></path>
            </svg>
          </a>
        </li>
        <li>
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <path d="M28,8.557c-0.883,0.392-1.832,0.656-2.828,0.775c1.017-0.609,1.797-1.574,2.165-2.724c-0.951,0.564-2.005,0.974-3.127,1.195 c-0.898-0.957-2.178-1.555-3.594-1.555c-2.719,0-4.924,2.205-4.924,4.924c0,0.386,0.044,0.762,0.127,1.122 c-4.092-0.205-7.72-2.166-10.149-5.145C5.247,7.876,5.004,8.722,5.004,9.625c0,1.708,0.869,3.215,2.19,4.098 c-0.807-0.026-1.566-0.247-2.23-0.616c0,0.021,0,0.041,0,0.062c0,2.386,1.697,4.376,3.95,4.828C8.501,18.11,8.066,18.17,7.616,18.17 c-0.317,0-0.626-0.031-0.926-0.088c0.627,1.956,2.445,3.38,4.6,3.42c-1.685,1.321-3.808,2.108-6.115,2.108 c-0.397,0-0.789-0.023-1.175-0.069c2.179,1.397,4.767,2.212,7.548,2.212c9.057,0,14.009-7.503,14.009-14.01 c0-0.213-0.005-0.426-0.014-0.637C26.505,10.411,27.34,9.544,28,8.557z"></path>
            </svg>
          </a>
        </li>
        <li>
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <path d="M 12.96875 4 C 6.58075 4 5.5625 8.4545 5.5625 9.9375 C 5.5625 12.1455 7.277 14.90625 10.75 14.90625 C 11.066 14.90625 11.42425 14.88475 11.78125 14.84375 C 11.72225 15.00875 11.46875 15.5535 11.46875 16.0625 C 11.46875 17.1225 12.14 17.80575 12.375 18.21875 C 8.575 18.18175 4 19.833 4 23.5 C 4 24.842 5.1485 28 10.5625 28 C 16.7375 28 18.625 24.1995 18.625 22.0625 C 18.625 17.9805 14.3125 17.29125 14.3125 15.40625 C 14.3125 13.42825 17.53125 13.26725 17.53125 9.40625 C 17.53125 6.60925 15.572 5.248 15.375 5.125 L 17.3125 5.125 L 19.25 4 L 12.96875 4 z M 11.03125 5.03125 C 14.10925 5.03125 14.875 9.60175 14.875 10.84375 C 14.875 11.13075 15.06975 14.03125 12.21875 14.03125 C 10.05675 14.03125 8.21875 11.31225 8.21875 8.40625 C 8.21875 7.54325 8.64225 5.03125 11.03125 5.03125 z M 24 11 L 24 14 L 21 14 L 21 16 L 24 16 L 24 19 L 26 19 L 26 16 L 29 16 L 29 14 L 26 14 L 26 11 L 24 11 z M 12.53125 19.09375 C 12.80125 19.09375 13.01875 19.104 13.21875 19.125 C 14.31075 19.941 16.59375 21.10825 16.59375 23.28125 C 16.59275 24.26625 16.0045 26.6875 12.0625 26.6875 C 10.0835 26.6875 6.65625 25.84275 6.65625 22.84375 C 6.65625 21.80675 7.27625 19.09375 12.53125 19.09375 z"></path>
            </svg>
          </a>
        </li>
      </ul>
      <a href="mailto:info@mainazarov.kg" class="email">info@mainazarov.kg</a>
      <div class="copy">&copy; Mainazarovteam - 2016</div>
    </div>

    <div class="menu-wrap">
      <div class="white-overlay">
        <div class="menu-img"></div>
      </div>
      <div class="menu-n">
        <img src="../assets/images/menu-n.png" alt="">
      </div>
      <div class="global-overlay">
        <div class="overlay skew-part">
          <div id="stars"></div>
          <div id="stars2"></div>
          <div id="stars3"></div>
        </div>
      </div>
      <div class="menu-logo">
        <img src="../assets/images/logo-hor.svg" alt="">
      </div>
      <div class="call-sm" call-hover-sm>
        <span>Заказать<br>звонок</span>
      </div>
      <div class="main-nav-wrap">
        <ul class="main-nav">
          <li><a href="javascript:void(0);" data-switchto="home">На главную</a></li>
          <li><a href="javascript:void(0);" data-switchto="about">Майназаров Н.</a></li>
          <li><a href="javascript:void(0);" data-switchto="services">Услуги</a></li>
          <li><a href="javascript:void(0);" data-switchto="team">Команда</a></li>
          <li><a href="javascript:void(0);" data-switchto="testimonials">Отзывы</a></li>
          <li><a href="#">Галерея</a></li>
          <li><a href="#">Контакты</a></li>
        </ul>
      </div>
    </div>
  

    
    
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script> -->
    <script src="<?php echo $root; ?>assets/js/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/vendor/navigo/navigo.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/vendor/gsap/TweenMax.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/vendor/gsap/TimelineLite.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/vendor/customScrollBar/jquery.mousewheel.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/vendor/customScrollBar/jquery.mCustomScrollbar.js"></script>
    <script src="<?php echo $root; ?>assets/js/vendor/vegas/vegas.js"></script>

    
    
    <script src="<?php echo $root; ?>assets/js/scripts.js"></script>
  </body>
</html>
