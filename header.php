<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Tietgen GP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles/reset.min.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="icon" type="image/png" href="img/tietgenLogo.png" />
  </head>
  <body>
    <!-- Header Start -->
    <header class="site-header">

      <div class="site-header__top">
        <div class="wrapper site-header__wrapper">
          <a href="index.php" class="logopic">
              <img src="img/tietgenLogo.png" alt="logo" style="width: 30px; height: 30px;">
          </a>
          <div class="site-header__start">
            <ul class="">
              <li class=""><a href="#">About</a></li>
              <li class=""><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="site-header__middle">
            <a href="index.php" class="brand">Tietgen Game Portal</a>
          </div>



          <div class="site-header__end top">

            <?php

            if (isset($_SESSION['useruid'])) {
            echo '<a class="button" href="logout.php">Logout</a>';
            }
            else {

            echo '<a href="signup.php">Signup</a>';
            echo '<a class="button" href="login.php">Login</a>';
            }
             ?>

          </div>
        </div>
      </div>
      <div class="site-header__bottom">
        <div class="wrapper site-header__wrapper">
          <div class="site-header__start">
            <nav class="nav">
              <button class="nav__toggle" aria-expanded="false" type="button">
                menu
              </button>
              <ul class="nav__wrapper">
                <li class="nav__item"><a href="index.php">Hjem</a></li>
                <li class="nav__item"><a href="games.php">Spil</a></li>
                <li class="nav__item"><a href="leaderboard.php">Leaderboard</a></li>
                <li class="nav__item"><a href="chat.php">Chat</a></li>
                <li class="nav__item"><a href="about.php">Om os</a></li>
                <li class="nav__item"><a href="skitse.php">Temp site</a></li>
              </ul>
            </nav>
          </div>

          <div class="site-header__end bottom">

            <?php

            if (isset($_SESSION['useruid'])) {

              echo '<a class="support" href="support.php"><?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 128 128"><defs><style>.cls-1{fill:#2d3e50;}</style></defs><title>Brug for hjælp?</title><path class="cls-1"
              d="M70.574,4.21473A54.3192,54.3192,0,0,0,17.01528,49.91849C16.57421,52.698,3.19661,123.78527,3.19661,
              123.78527L42.985,105.13883A54.23221,54.23221,0,1,0,70.574,4.21473ZM67.96373,28.0213a7.26583,7.26583,
              0,1,1-7.26887,7.26282A7.259,7.259,0,0,1,67.96373,28.0213ZM78.56186,88.97575H62.07251a3.69787,3.69787,
              0,0,1,0-7.39574h2.3142V57.64654h-.429a4.32024,4.32024,0,0,1-.75528-8.57395c.15106-.03024,4.88821-.96679,
              8.61629-1.70393a3.73065,3.73065,0,0,1,4.4592,3.66162V81.58h2.284a3.69787,3.69787,0,0,1,0,7.39574Z"/></svg></a>';

            echo '<a class="settings" href="profilSettings.php"><?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
 <title>Profil settings</title>
<g>
<g>
  <g>
    <path d="M496.659,312.128l-47.061-36.8c0.619-5.675,1.109-12.309,1.109-19.328s-0.512-13.653-1.109-19.328l47.104-36.821
      c8.747-6.912,11.157-19.179,5.568-29.397l-48.939-84.672c-5.355-9.749-17.365-14.208-28.309-10.176l-55.531,22.293
      c-10.624-7.68-21.781-14.165-33.323-19.349l-8.448-58.901C326.334,8.448,316.606,0,305.107,0h-98.133
      c-11.499,0-21.227,8.448-22.592,19.435l-8.469,59.115c-11.179,5.056-22.165,11.435-33.28,19.371l-55.68-22.357
      c-10.645-4.16-22.763,0.235-28.096,10.005l-49.003,84.8c-5.781,9.771-3.413,22.443,5.547,29.525l47.061,36.779
      c-0.747,7.211-1.109,13.461-1.109,19.328s0.363,12.117,1.067,19.328l-47.104,36.843C6.59,319.083,4.2,331.349,9.768,341.568
      l48.939,84.672c5.312,9.728,17.301,14.165,28.309,10.176l55.531-22.293c10.624,7.659,21.803,14.144,33.344,19.349l8.448,58.88
      c1.387,11.2,11.115,19.648,22.613,19.648h98.133c11.499,0,21.227-8.448,22.592-19.435l8.469-59.093
      c11.179-5.056,22.165-11.435,33.28-19.371l55.68,22.357c10.603,4.117,22.763-0.235,28.096-10.005l49.195-85.099
      C507.838,331.371,505.448,319.104,496.659,312.128z M483.752,330.901l-50.816,85.717l-61.077-24.533
      c-3.456-1.387-7.381-0.853-10.368,1.365c-13.227,9.899-26.005,17.344-39.104,22.699c-3.499,1.429-5.995,4.608-6.528,8.363
      l-10.773,66.155l-99.563-1.131l-9.323-65.003c-0.555-3.755-3.029-6.933-6.528-8.363c-13.632-5.589-26.752-13.205-39.019-22.635
      c-1.899-1.472-4.203-2.219-6.507-2.219c-1.344,0-2.688,0.235-3.989,0.768l-62.827,23.701l-48.939-84.672
      c-0.448-0.832-0.363-1.792,0.149-2.197l51.776-40.469c2.944-2.304,4.48-6.016,4.011-9.728c-1.131-8.939-1.643-16.171-1.643-22.72
      s0.533-13.76,1.643-22.72c0.469-3.733-1.067-7.424-4.011-9.728L28.286,181.12l50.816-85.717l61.077,24.533
      c3.477,1.408,7.381,0.875,10.389-1.365c13.205-9.92,26.005-17.344,39.104-22.699c3.499-1.451,5.973-4.629,6.507-8.363
      l10.795-66.176l99.584,1.152l9.301,65.024c0.555,3.755,3.029,6.933,6.528,8.363c13.611,5.568,26.731,13.184,39.019,22.635
      c3.008,2.304,6.955,2.859,10.475,1.429l62.827-23.701l48.939,84.672c0.448,0.832,0.363,1.771-0.149,2.176l-51.776,40.469
      c-2.944,2.304-4.48,5.995-4.011,9.728c0.811,6.485,1.643,14.272,1.643,22.72c0,8.469-0.832,16.235-1.643,22.72
      c-0.469,3.712,1.067,7.424,4.011,9.728l51.712,40.448C483.987,329.344,484.094,330.304,483.752,330.901z"/>
    <path d="M256.019,149.333c-58.816,0-106.667,47.851-106.667,106.667s47.851,106.667,106.667,106.667
      c58.816,0,106.667-47.851,106.667-106.667S314.835,149.333,256.019,149.333z M256.019,341.333
      c-47.061,0-85.333-38.272-85.333-85.333s38.272-85.333,85.333-85.333c47.061,0,85.333,38.272,85.333,85.333
      S303.08,341.333,256.019,341.333z"/>
  </g>
</g>
</g>
</svg>

          </a>';

            }
            else {

              echo '<a href="support.php"><?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 128 128"><defs><style>.cls-1{fill:#2d3e50;}</style></defs><title>Brug for hjælp?</title><path class="cls-1"
              d="M70.574,4.21473A54.3192,54.3192,0,0,0,17.01528,49.91849C16.57421,52.698,3.19661,123.78527,3.19661,
              123.78527L42.985,105.13883A54.23221,54.23221,0,1,0,70.574,4.21473ZM67.96373,28.0213a7.26583,7.26583,
              0,1,1-7.26887,7.26282A7.259,7.259,0,0,1,67.96373,28.0213ZM78.56186,88.97575H62.07251a3.69787,3.69787,
              0,0,1,0-7.39574h2.3142V57.64654h-.429a4.32024,4.32024,0,0,1-.75528-8.57395c.15106-.03024,4.88821-.96679,
              8.61629-1.70393a3.73065,3.73065,0,0,1,4.4592,3.66162V81.58h2.284a3.69787,3.69787,0,0,1,0,7.39574Z"/></svg></a>';
            }
             ?>


             <?php

             if (isset($_SESSION['useruid'])) {
             echo '<a href="profil.php">  <svg
                 version="1.1"
                 viewBox="0 0 100 100"
                 xmlns="http://www.w3.org/2000/svg"
               >
                 <title>Profil</title>
                 <path
                   d="m65.57 52.5c6.9336-4.5078 11.574-11.797 12.723-19.988 1.1484-8.1875-1.3047-16.473-6.7344-22.715-5.4258-6.2422-13.289-9.8242-21.559-9.8242s-16.133 3.582-21.559 9.8242c-5.4297 6.2422-7.8828 14.527-6.7344 22.715 1.1484 8.1914 5.7891 15.48 12.723 19.988-10.012 3.2812-18.73 9.6406-24.914 18.172-6.1836 8.5273-9.5117 18.793-9.5156 29.328h7.1445c0-15.312 8.168-29.461 21.426-37.117 13.262-7.6523 29.598-7.6523 42.859 0 13.258 7.6562 21.426 21.805 21.426 37.117h7.1445c-0.003906-10.535-3.332-20.801-9.5156-29.328-6.1836-8.5312-14.902-14.891-24.914-18.172zm-37-23.93c0-5.6836 2.2578-11.133 6.2773-15.152 4.0195-4.0156 9.4688-6.2734 15.152-6.2734s11.133 2.2578 15.152 6.2734c4.0195 4.0195 6.2773 9.4688 6.2773 15.152 0 5.6836-2.2578 11.137-6.2773 15.152-4.0195 4.0195-9.4688 6.2773-15.152 6.2773s-11.133-2.2578-15.152-6.2773c-4.0195-4.0156-6.2773-9.4688-6.2773-15.152z"
                 />
               </svg>
             </a>';



             }
             else {
             echo '<p></p>';
             }
              ?>


          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <script src="js/header.js"></script>
  </body>
</html>


<!--A quick wrapper to align the content (ends in footer.php)-->
<div class="wrapper">
</header>
