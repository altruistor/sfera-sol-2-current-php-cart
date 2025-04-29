<?php include 'products.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="cz">
  <head>
    <meta charset="utf-8" />
    <title>SFERA Solutions s.r.o.</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!-- AOS CSS -->

    
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.min.css" />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- google font -->
    <link
      href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800"
      rel="stylesheet"
      type="text/css"
    />

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

    <!-- custom css -->
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>

    <!-- start navigation -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container" >
        <img src="./images/LogoSfera.png" class="icon-logo" id="icon-logo" />
  
     <div class="navbar-brand mx-auto position-absolute top-50 start-50 translate-middle d-none d-lg-block">
      <img src="./images/LogoSfera.png" class="icon-logo" alt="Sfera Logo" />
    </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home" data-i18n="nav-home">Domů</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about" data-i18n="nav-about">O nás</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact" data-i18n="nav-contact">Kontakt</a>
            </li>
          </ul>



          <!-- Lang switchers -->
          <div class="d-flex align-items-center gap-2">
        
            <button class="btn btn-outline-dark btn-lg" style="--bs-btn-border-color: none" onclick="setLanguage('cs')">🇨🇿</button>
            <button class="btn btn-outline-dark btn-lg" style="--bs-btn-border-color: none" onclick="setLanguage('en')">🇬🇧</button>
            <button class="btn btn-outline-dark btn-lg" style="--bs-btn-border-color: none" onclick="setLanguage('ua')">🇺🇦</button>
            <div class="position-relative" style="width: 36px; height: 36px;">
    <a href="cart.php" class="d-block">
      <img src="images/cart-icon.png" alt="Košík" style="width: 100%; height: 100%; object-fit: contain;">
      <?php if (!empty($_SESSION['cart'])): ?>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
          <?= array_sum(array_column($_SESSION['cart'], 'quantity')) ?>
        </span>
      <?php endif; ?>
    </a>
  </div>
          </div>

          
        </div>
      </div>
    </nav>

    <!-- <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <img src="./images/LogoSfera.png" class="icon-logo" id="icon-logo" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav> -->

    <!-- <nav
      class="navbar fixed-top navbar-light bg-light navbar-fixed-top"
      role="navigation"
    >
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <button
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-collapse"
          >
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
          </button>
          <img src="./images/LogoSfera.png" class="icon-logo" id="icon-logo" />
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right text-uppercase">
            <li><a href="#home">Domů</a></li>
            <li><a href="#header-feature">Služby</a></li>
            <li><a href="#download">Stáhnout</a></li>
            <li><a href="#contact">Kontakty</a></li>
          </ul>
        </div>
      </div>
    </nav> -->
    <!-- end navigation -->
    <!-- start home -->
    <section id="home">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10" data-aos="fade-up" data-aos-duration="1500">
              <img class="logo-full-hero" src="./images/logoSferaColor.png" id="logo-hero"/>
              <h1 class="text-upper" id="visibile-icon" data-i18n="welcome">
                Odbornost v kybernetické bezpečnosti je základ našich řešení
              </h1>
              <p class="tm-white" data-i18n="welcome-content">
                Více než 30 let se pohybujeme na špičce v oblasti kybernetické
                bezpečnosti. Vyvíjeli jsme zabezpečené komunikační systémy pro
                vládní instituce a projektovali chráněné sítě od základů. Tyto
                projekty nás naučily nejen zvládat technické výzvy, ale také
                myslet komplexně na bezpečnost každého detailu. Naše hluboké
                znalosti v této oblasti nyní přenášíme i do budování systémů
                videodohledu.
              </p>
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- end home -->
    <!-- start divider -->
    <section id="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-12" data-aos="fade-down" data-aos-duration="1500">
            
            <section id="about"><h3 class="text-uppercase" data-i18n="about-header">O nás</h3>
            <p data-i18n="about-content-1">
              Díky našim zkušenostem v kybernetické bezpečnosti je budování
              systémů videodohledu naší přirozenou specializací. V dnešní době,
              kdy hrozby přicházejí nejen z fyzického prostředí, ale i z
              digitálního světa, zajišťujeme, že naše systémy jsou odolné vůči
              neoprávněnému přístupu a manipulaci. Ať už jde o ochranu soukromé
              vily, výrobní haly nebo velkého stavebního projektu, navrhujeme
              řešení, která kombinují špičkovou technologii s vysokou úrovní
              zabezpečení.
            </p>
            <p data-i18n="about-content-2">
              Spolupracujeme s předními světovými výrobci technologií pro dohled
              a monitoring. Díky této spolupráci můžeme našim klientům nabídnout
              přístup k nejmodernějším zařízením a integraci nejnovějších trendů
              v oboru. Tyto technologie kombinujeme s naším know-how z oblasti
              kybernetické bezpečnosti, abychom vytvořili systémy, které nejen
              sledují, ale především chrání.
            </p>
            <p data-i18n="about-content-3">
              Naším největším přínosem je schopnost kombinovat zkušenosti z
              kybernetické bezpečnosti s technologiemi videodohledu. To nám
              umožňuje vytvářet systémy, které nejsou jen účinné, ale také
              chráněné proti moderním hrozbám. Obraťte se na nás – postaráme se
              o bezpečnost vašich prostor na všech úrovních.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- end divider -->

    <!-- products -->
    
    <div class="container py-5">
      <div class="position-relative">
  <h2 class="mb-4 text-center">Naše produkty</h2>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <?php foreach ($products as $id => $product): ?>
        <div class="swiper-slide">
          <div class="card h-100" style="width: 18rem; margin: auto;">
            <img src="<?= $product['image'] ?>" class="card-img-top" alt="<?= htmlspecialchars($product['name']) ?>">
            <div class="card-body text-center">
              <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
              <p class="card-text">Cena: <?= $product['price'] ?> Kč</p>
              <form action="add-to-cart.php" method="post">
                <input type="hidden" name="product_id" value="<?= $id ?>">
                <button type="submit" class="btn btn-primary">Přidat do košíku</button>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

    <!-- Кнопки навигации -->

        <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Пагинация (точки снизу) -->
    <div class="swiper-pagination"></div>
  </div>
  </div>
</div>

<!-- end products -->

    <!-- start feature -->

	<section id="feature1">
        <div class="container"  data-aos="fade-down" data-aos-duration="1500">
          <h2 class="text-uppercase" data-i18n="services-header">Komplexní přístup od návrhu po realizaci</h2>
        

          <div class="row">
            <div
              class="col-md-12"
              
            >
              <p data-i18n="services-content-1">
                Naše společnost poskytuje plný rozsah služeb. Začínáme přípravou projektové dokumentace a návrhem zabezpečeného systému. Pokračujeme výběrem a nákupem zařízení, jeho instalací a konfigurací. Zajistíme také školení personálu, aby systém fungoval přesně podle vašich potřeb a očekávání. Naše řešení vždy zohledňují nejen kvalitu a funkčnost, ale i nejvyšší bezpečnostní standardy.
              </p>
            </div>
          </div>
        </div>

	</section>


  <section class="py-0">
    <div class="row g-0 min-vh-100">
      
      <!-- Левая половина с фоном -->
      <div class="col-md-6 d-flex align-items-center justify-content-center text-white " data-aos="fade-right" data-aos-duration="2000" style="background-color: #1e88e5;">
        <div class="p-5 text-center">
          <h2 class="mb-3">Levý blok</h2>
          <p>
            Celá levá polovina má modré pozadí, растягивается на всю высоту секции.
          </p>
        </div>
      </div>
  
      <!-- Правая половина с фоном -->
      <div class="col-md-6 d-flex align-items-center justify-content-center text-dark" data-aos="fade-left" data-aos-duration="2000" style="background-color: #ffe082;">
        <div class="p-5 text-center">
          <h2 class="mb-3">Pravý blok</h2>
          <p>
            Pravá polovina je světle žlutá, text выровнен по центру по вертикали и горизонтали.
          </p>
        </div>
      </div>
  
    </div>
  </section>

    <!-- start contact -->
    <section id="contact">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">
              <h2 class="text-uppercase" data-i18n="contacts-header">Kontakty</h2>
              <p>
                SFERA Solutions s.r.o.
              </p>
              <p>IČ: 14421844 </p>
			  <p>DIČ: CZ14421844</p>
              <address>
                <p>
                  <i class="fa fa-building"></i>Vysokovská 2982/6, Horní Počernice, 193 00 Praha
                </p>
               
                <p><i class="fa fa-envelope-o"></i><a href="mailto:info@sferasolutions.eu">info@sferasolutions.eu</a></p>
              </address>
            </div>
            

            <div class="col-md-6">
              <div class="contact-form" data-aos="fade-up" data-aos-duration="1500">
                <!-- <form id="contact-form" action="form-handler.php" method="post"> -->
                <form id="contactForm" action="form-handler.php" method="post">
                  <div class="col-md-12">
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                  </div>
                  <div class="col-md-12">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="col-md-12">
                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                  </div>
                  <div class="col-md-12">
                    <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea>
                  </div>

                 
            
                  <!-- Google reCAPTCHA -->
                  <div class="col-md-12" style="margin: 15px 0;">
                    <div class="g-recaptcha" data-sitekey="6LcAYxkrAAAAAMMtylMto09U454NgkhtO-qB85sl"></div>
                  </div>
            
                  <div class="col-md-4">
                    <input type="submit" class="form-control text-uppercase" value="Send">
                  </div>
                </form>
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>
     <!-- modal -->

     <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" data-i18n="modal-thank-you">Děkujeme!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zavřít"></button>
          </div>
          <div class="modal-body" data-i18n="modal-content">
            Vaše zpráva byla úspěšně odeslána.
          </div>
        </div>
      </div>
    </div>
    <!-- end contact -->

    <!-- start footer -->
    <footer>
      <div class="container">
        <div class="row">
          <p>Copyright © 2025 SFERA Solutions s.r.o.</p>
        </div>
      </div>
    </footer>
    <!-- end footer -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="js/lang.js"></script>
    <script src="js/jquery.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/wow.min.js"></script>
    <!-- <script src="js/jquery.singlePageNav.min.js"></script>  -->
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/contact.js"></script>
    <!-- Bootstrap JS (bundle включает и Popper.js) -->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </body>
</html>
