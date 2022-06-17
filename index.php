<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/bootstrap-reboot.min.css" />

    <link rel="stylesheet" href="css/font.css" />

    <link rel="stylesheet" href="css/style.min.css" />

    <title>Document</title>
</head>
<body>

  <?php
    include('header.php');
  ?>

    <section class="menu">
      <nav class="menu__wrapper">
        <a class="menu__item" href="projects.html">projects</a>
        <a class="menu__item" href="about.html">about us</a>
        <a class="menu__item" href="contacts.html">contacts</a>
      </nav>
    </section>

    <section class="promo">
      <video
        class="promo__video"
        autoplay
        muted
        loop
        playsinline
        webkit-playinginline
        src="video/video_bg3.mp4"
        type="video/mp4"
      ></video>
      <div class="container">
        <h2 class="promo__moto">
          The new <span>level</span><br />
          of design and architecture
        </h2>
      </div>
    </section>

    <footer class="footer footer-fixed">
      <div class="container">
        <div class="footer__wrapper">
          <a
            class="footer__item"
            href="https://instagram.com/level_architecture_?igshid=YmMyMTA2M2Y="
            ><img src="icons/instagram.png" alt="instagram"
          /></a>
          <a
            class="footer__item"
            href="https://www.facebook.com/li.interior.design"
            ><img src="icons/facebook.png" alt="facebook"
          /></a>
          <a class="footer__item" href="https://www.behance.net/li0interior"
            ><img src="icons/behance.png" alt="behance"
          /></a>
          <a
            class="footer__item"
            href="https://www.linkedin.com/company/lvl-gr/"
            ><img src="icons/linkedin.png" alt="linkedin"
          /></a>
        </div>
      </div>
    </footer>

    <script src="js/script.js"></script>
  </body>
</html>
