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
    <header class="header">
      <div class="container">
        <div class="header__wrapper">
          <a class="header__logo" href="index.html">level</a>
          <div class="header__burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>

    <section class="menu">
      <nav class="menu__wrapper">
        <a class="menu__item" href="projects.html">projects</a>
        <a class="menu__item" href="about.html">about us</a>
        <a class="menu__item" href="contacts.html">contacts</a>
      </nav>
    </section>

    <section class="contacts">
      <div class="container">
        <div class="contacts__info">
          <div>
            email -
            <a href="email:listopad.e.work@gmail.com"
              >listopad.e.work@gmail.com</a
            >
          </div>
          <div>
            phone (ukraine) - <a href="tel:+380991228364">+38 099 122 83 64</a>
          </div>
          <div>
            phone (germany) - <a href="tel:+490000000000">+49 000 000 00 00</a>
          </div>
        </div>
        <form id="consultation-form" class="feed-form" action="#">
          <input name="name" required placeholder="Your name" type="text" />
          <input name="phone" required placeholder="Your email" />
          <input
            name="email"
            required
            placeholder="Country and City"
            type="email"
          />
          <button class="button button_submit">order price calculation</button>
        </form>
      </div>
    </section>

    <footer class="footer">
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