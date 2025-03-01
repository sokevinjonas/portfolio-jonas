
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FONT AWESOME ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{  asset('assets/css/styles.css')}}" />

    <title>Responsive portfolio website - Crypticalcoder</title>
  </head>
  <body>
    <!--==================== STYLE SWITCHER ====================-->
    <div class="style__switcher"></div>

    <!--==================== HEADER ====================-->
    <header class="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Jonas SO</a>
    
            <ul class="nav__list">
                <li class="nav__item">
                <a href="#home" class="nav__link">Accueil</a>
                </li>
                <li class="nav__item">
                <a href="#about" class="nav__link">Qui suis-je?</a>
                </li>
                <li class="nav__item">
                <a href="#qualification" class="nav__link">Expériences</a>
                </li>
                <li class="nav__item">
                <a href="#service" class="nav__link">Services</a>
                </li>
                <li class="nav__item">
                    <a href="#work" class="nav__link">Projets</a>
                    </li>
                <li class="nav__item">
                <a href="#contact" class="nav__link">Contact</a>
                </li>
            </ul>
            <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
    
            <div class="nav__btns">
            <!-- Theme change button -->
            <i class="uil uil-moon change-theme" id="theme-button"></i>
    
            <div class="nav__toggle" id="nav-toggle">
                <i class="uil uil-apps"></i>
            </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      <section class="home" id="home">
        <div class="home__container container grid">
            <div class="home__content">
                <span class="home__small" >
                    Bonjour,
                </span>
                <h1 class="home__title">
                    <span>Je suis </span> SO Kevin Jonas <br>  
                    Développeur Fullstack
                </h1>
                <p class="home__description">
                    Développeur Full Stack spécialisé en Laravel, je conçois des applications web performantes et évolutives. Passionné par le développement mobile, je maîtrise également Ionic, Angular et Flutter pour créer des expériences optimisées sur toutes les plateformes. Avec une forte sensibilité au UI/UX design, je mets un point d'honneur à concevoir des interfaces intuitives et ergonomiques.
                </p>
                <div class="home__btns">
                    <a href="#contact" class="btn">Contactez-moi</a>
                    <a href="#download_cv" class="btn btn-transparent">Téléchager le CV</a>
                </div>
            </div>
            <div class="home__img-wrapper">
                <img src="{{  asset('assets/img/profile.png')}}" class="home__img" alt="">
            </div>
        </div>
      </section>

      <!--==================== ABOUT ====================-->
      <section class="about" id="about"></section>

      <!--==================== QUALIFICATION ====================-->
      <section class="qualification" id="qualification"></section>

      <!--==================== SERVICES ====================-->
      <section class="services" id="services"></section>

      <!--==================== SKILLS ====================-->
      <section class="skills"></section>

      <!--==================== PORTFOLIO ====================-->
      <section class="works" id="works"></section>

      <!--==================== TESTIMONIALS ====================-->
      <section class="testimonials"></section>

      <!--==================== CONTACT ====================-->
      <section class="contact" id="contact"></section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer"></footer>
  </body>
</html>
