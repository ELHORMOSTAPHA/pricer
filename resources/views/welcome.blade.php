<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
            integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <!--================= Magnific Popup CSS =================-->
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/vendor/bootstrap.min.css') }}"
        />
        <!--================= Magnific Popup CSS =================-->
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/vendor/fontawesome-5.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/vendor/all.min.css') }}"
        />
        <!--================= Base CSS =================-->
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/vendor/magnific-popup.css') }}"
        />
        <!--================= Inline CSS =================-->
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/vendor/plyr.css') }}"
        />
        <!--================= Splitting CSS =================-->
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/vendor/splitting.css') }}"
        />
        <!--================= Fontello CSS =================-->
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/vendor/socicon.css') }}"
        />
        <!--================= Widgets CSS =================-->
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/vendor/swiper.min.css') }}"
        />
        <!--================= Widgets CSS =================-->
        <link
            rel="stylesheet"
            href="{{ asset('assets/fonts/custom-font.css') }}"
        />
        <!--================= Style CSS =================-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    </head>
    <body
        data-theme="light"
        data-menu="fixed"
        data-footer-effect="on"
        data-footer-corners="on"
    >
        <!--================= Header One Start =================-->
        <!--================= Sticky Menu Start Here =================-->
        <div id="top" class="home"></div>
        <div
            class="main-header js-main-header auto-hide-headermain-header js-main-header auto-hide-header ms-nb--transparent full-width ms-nb--white menu-center"
            id="ms-header"
        >
            <div class="main-header__layout top">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <div class="logo-dark">
                            <a href="index.html">
                                <img
                                    src="{{ asset('assets/media/images/conexus-it-log.png') }}"
                                    alt="Mokko – Creative Portfolio &amp; AgencyWordPress Theme"
                                />
                            </a>
                        </div>
                        <div class="logo-light">
                            <a href="index.html">
                                <img
                                    src="{{ asset('assets/media/images/conexus-it-log.png') }}"
                                    alt="Mokko – Creative Portfolio &amp; AgencyWordPress Theme"
                                />
                            </a>
                        </div>
                    </div>
                    <nav
                        class="main-header__nav js-main-header__nav main-header__default"
                        id="main-header-nav"
                    >
                        <ul id="primary-menu-default" class="navbar-nav">
                            <li class="menu-item menu-item-has-children">
                                <a href="#accueil" title="Home">
                                    <span>Accueil</span>
                                </a>
                                <!-- <ul class="sub-menu">
                                <li class="menu-item current_page_item"> <a href="index-two.html" aria-current="page">Home Portfolio</a></li>
                                <li class="menu-item menu-item-home"><a href="index.html">Full Page Slider</a></li>
                                <li class="menu-item"><a href="index-three.html">Creative Agency</a></li>
                                <li class="menu-item"><a href="index-four.html">Business &amp; Corporate</a></li>
                                <li class="menu-item"><a href="index-five.html">Personal Page</a></li>
                            </ul> -->
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#pourquoi-pricer" title="Work">
                                    <span>Avantages</span>
                                </a>
                                <!-- <ul class="sub-menu">
                                <li class="menu-item"><a href="project-style-1.html">Portfolio: Style 1</a></li>
                                <li class="menu-item"><a href="project-style-2.html">Portfolio: Style 2</a></li>
                                <li class="menu-item"><a href="project-style-3.html">Portfolio: Style 3</a></li>
                                <li class="menu-item"><a href="project-grid-1.html">Portfolio: Grid 1</a></li>
                                <li class="menu-item"><a href="project-grid-2.html">Portfolio: Grid 2</a></li>
                                <li class="menu-item"><a href="project-masonary.html">Portfolio: Masonry</a></li>
                                <li class="menu-item"><a href="project-single.html">Portfolio: Single</a></li>
                            </ul> -->
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#comment-ca-marche" title="Stories">
                                    <span>Comment ça marche</span>
                                </a>
                                <!-- <ul class="sub-menu">
                                <li class="menu-item"><a href="blog.html">Blog</a></li>
                                <li class="menu-item"><a href="blog-card.html">Blog Card</a></li>
                                <li class="menu-item"><a href="blog-card-grid.html">Blog Card Grid</a></li>
                                <li class="menu-item"><a href="blog-list.html">Blog List: Style 1</a></li>
                                <li class="menu-item"><a href="blog-list-right.html">Blog List: Style 2</a></li>
                                <li class="menu-item"><a href="blog-list-random.html">Blog List: Style 3</a></li>
                                <li class="menu-item"><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li class="menu-item"><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li class="menu-item"><a href="blog-single.html">Blog Single</a></li>
                            </ul> -->
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#cas-usage" title="Shop">
                                    <span>Cas d'usage</span>
                                </a>
                                <!-- <ul class="sub-menu">
                                <li class="menu-item"><a href="shop.html">Shop</a></li>
                                <li class="menu-item"><a href="single-product.html">Single Product</a></li>
                                <li class="menu-item"><a href="checkout.html">Checkout</a></li>
                                <li class="menu-item"><a href="cart.html">Cart</a></li>
                                <li class="menu-item"><a href="account.html">My account</a></li>
                            </ul> -->
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#realisations" title="Contacts">
                                    <span>Réalisations</span>
                                </a>
                                <!-- <ul class="sub-menu">
                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                                <li class="menu-item"><a href="contact-2.html">Contact 2</a></li>
                                <li class="menu-item"><a href="contact-3.html">Contact 3</a></li>
                            </ul> -->
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#contact" title="Contacts">
                                    <span>Contacter</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="main-header__widgets">
                        <div class="main-header--widgets">
                            <!-- <div class="ms_theme_mode ms-h_w">
                            <div class="ms_tm--inner">
                                <div class="theme-toggle" id="theme-toggle">
                                    <input type="checkbox" id="switcher" class="check" checked="">
                                    <svg class="sun-and-moon" aria-hidden="true" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <mask class="moon" id="moon-mask">
                                            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
                                            <circle cx="24" cy="10" r="6" fill="black"></circle>
                                        </mask>
                                        <circle class="sun" cx="12" cy="12" r="6" mask="url(#moon-mask)"
                                            fill="currentColor"></circle>
                                        <g class="sun-beams" stroke="currentColor">
                                            <line x1="12" y1="1" x2="12" y2="3"></line>
                                            <line x1="12" y1="21" x2="12" y2="23"></line>
                                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                            <line x1="1" y1="12" x2="3" y2="12"></line>
                                            <line x1="21" y1="12" x2="23" y2="12"></line>
                                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div> -->
                            <div
                                class="ms-contact-btn ms-h_w"
                                style="z-index: 9999"
                            >
                                <div class="ms-hc--inner">
                                    <a
                                        class="btn btn-mokko btn--sm btn--primary"
                                        href="#contact"
                                    >
                                        <div class="ms-btn__text">
                                            Contacter
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- <div class="header__search-icon ms-h_w">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#4F5663" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path d="M21 21L16.65 16.65" stroke="#4F5663" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="header__search-modal data-scroll-section">

                            <button class="header__search--close-btn">
                                <svg class="icon icon--sm" viewBox="0 0 24 24">
                                    <title>Close modal window</title>
                                    <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="3" y1="3" x2="21" y2="21"></line>
                                        <line x1="21" y1="3" x2="3" y2="21"></line>
                                    </g>
                                </svg>
                            </button>

                            <div class="header__search--inner">

                                <form role="search" method="get" class="searchform" action="#">
                                    <div class="ms-search-widget">
                                        <input type="search" placeholder="Search..." value="" name="s" class="search-field" required>
                                        <button aria-label="Search" class="ms-search--btn" type="submit"></button>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                        </div>
                    </div>

                    <button
                        class="main-header__nav-trigger js-main-header__nav-trigger menu-default"
                        aria-label="Toggle menu"
                        aria-expanded="false"
                        aria-controls="main-header-nav"
                    >
                        <i
                            class="main-header__nav-trigger-icon"
                            aria-hidden="true"
                        ></i>
                    </button>
                </div>
            </div>
        </div>
        <!--================= Header End Here =================-->
        <!--================= Header One End =================-->
        <!--================= Mobile Menu Start Here =================-->

        <!--================= Mobile Menu Start Here =================-->

        <main class="ms-main">
            <div class="ms-page-content">
                <section class="ms-hero hero-video d-block" id="accueil">
                    <div class="hero-overlay bg-gif"></div>
                    <div class="video-container">
                        <video
                            autoplay=""
                            loop=""
                            muted=""
                            class="parallax-video background-video"
                            id="video"
                        >
                            <source
                                src="{{ asset('assets/media/videos/triller.mp4') }}"
                                type="video/mp4"
                            />
                        </video>
                    </div>
                    <!-- <div class="ms-hc">
                    <div class="ms-hc--inner">
                        <h1 class="ms-hero-title">Creative &amp; <br>production house.</h1>
                    </div>
                </div> -->
                    <div class="ms-hc">
                        <div class="ms-hc--inner">
                            <a
                                class="btn btn-mokko btn--sm btn--primary"
                                href="#film"
                            >
                                <div class="ms-btn__text">
                                    Regardez le film en entier
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="arrow-annimation">
                        <svg
                            class="css-11w1eaq-Icon-Svg e10fsun60"
                            height="15"
                            width="15"
                            viewBox="0 0 15 15"
                            xmlns="http://www.w3.org/2000/svg"
                            role="img"
                            aria-hidden="true"
                            alt=""
                        >
                            <path
                                d="M12.1,11.6L7,6.2l-5.1,5.3L0,9.8l7-7.3l7,7.3L12.1,11.6z"
                            ></path>
                        </svg>
                    </div>
                </section>
                <section
                    class="wrapper"
                    style="background-color: var(--color-bg1)"
                    id="pourquoi-pricer"
                >
                    <div
                        class="shape"
                        style="
                            background-image: url('{{ asset('assets/images/shapes/shape2.svg') }}');
                        "
                    ></div>
                    <div class="appear" style="margin-bottom: 100px">
                        <h1 class="wrapper-title">
                            pourqoi
                            <span style="color: var(--color-primary)">
                                pricer
                            </span>
                            ?
                        </h1>
                        <p>
                            <span>
                                <i
                                    class="fa-solid fa-arrow-down"
                                    style="transform: rotate(-90deg)"
                                ></i>
                            </span>
                            Un impact direct sur le quotidien magasin :
                            fiabilité opérationnelle, productivité et cohérence
                            prix rayon/caisse.
                        </p>
                    </div>
                    <!-- cards grid -->
                    <div class="why-pricer-grid">
                        <!-- 01 -->
                        <div class="why-pricer-card">
                            <div class="card-top">
                                <div class="card-icon">
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="hsl(115,55%,35%)"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path
                                            d="M13 2L3 14h8l-1 8 10-12h-8l1-8z"
                                        />
                                    </svg>
                                </div>
                                <span class="card-number">01</span>
                            </div>
                            <h3 class="card-title">Mise à jour instantanée</h3>
                            <p class="card-description">
                                Les changements de prix sont centralisés et
                                déployés rapidement, sans tâches manuelles
                                répétitives.
                            </p>
                        </div>

                        <!-- 02 -->
                        <div class="why-pricer-card">
                            <div class="card-top">
                                <div class="card-icon">
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="hsl(115,55%,35%)"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path
                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                                        />
                                        <polyline points="14,2 14,8 20,8" />
                                    </svg>
                                </div>
                                <span class="card-number">02</span>
                            </div>
                            <h3 class="card-title">Moins d'erreurs</h3>
                            <p class="card-description">
                                Réduction des écarts entre prix en rayon et prix
                                en caisse, et meilleure conformité d'affichage.
                            </p>
                        </div>

                        <!-- 03 -->
                        <div class="why-pricer-card">
                            <div class="card-top">
                                <div class="card-icon">
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="hsl(115,55%,35%)"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <circle cx="12" cy="12" r="10" />
                                        <polyline points="12,6 12,12 16,14" />
                                    </svg>
                                </div>
                                <span class="card-number">03</span>
                            </div>
                            <h3 class="card-title">Gain de temps</h3>
                            <p class="card-description">
                                Fini l'impression, la découpe et le remplacement
                                manuel : vos équipes se concentrent sur le
                                client.
                            </p>
                        </div>

                        <!-- 04 -->
                        <div class="why-pricer-card">
                            <div class="card-top">
                                <div class="card-icon">
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="hsl(115,55%,35%)"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <rect
                                            x="3"
                                            y="3"
                                            width="7"
                                            height="7"
                                        />
                                        <rect
                                            x="14"
                                            y="3"
                                            width="7"
                                            height="7"
                                        />
                                        <rect
                                            x="14"
                                            y="14"
                                            width="7"
                                            height="7"
                                        />
                                        <rect
                                            x="3"
                                            y="14"
                                            width="7"
                                            height="7"
                                        />
                                    </svg>
                                </div>
                                <span class="card-number">04</span>
                            </div>
                            <h3 class="card-title">Expérience client</h3>
                            <p class="card-description">
                                Informations claires, lisibles et cohérentes :
                                un magasin plus moderne et plus fluide.
                            </p>
                        </div>

                        <!-- 05 — wide -->
                        <div class="why-pricer-card">
                            <div class="card-top">
                                <div class="card-icon">
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="hsl(115,55%,35%)"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path
                                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"
                                        />
                                        <polyline
                                            points="3.27,6.96 12,12.01 20.73,6.96"
                                        />
                                        <line
                                            x1="12"
                                            y1="22.08"
                                            x2="12"
                                            y2="12"
                                        />
                                    </svg>
                                </div>
                                <span class="card-number">05</span>
                            </div>
                            <h3 class="card-title">Solution robuste</h3>
                            <p class="card-description">
                                Conçue pour le retail : scalable, durable et
                                adaptée aux contraintes terrain (volume,
                                rotation, promo).
                            </p>
                        </div>

                        <!-- 06 — wide -->
                        <div class="why-pricer-card">
                            <div class="card-top">
                                <div class="card-icon">
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="hsl(115,55%,35%)"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <line x1="18" y1="20" x2="18" y2="10" />
                                        <line x1="12" y1="20" x2="12" y2="4" />
                                        <line x1="6" y1="20" x2="6" y2="14" />
                                    </svg>
                                </div>
                                <span class="card-number">06</span>
                            </div>
                            <h3 class="card-title">
                                Pilotage &amp; visibilité
                            </h3>
                            <p class="card-description">
                                Suivi du parc, supervision, accompagnement : une
                                mise en production maîtrisée et évolutive.
                            </p>
                        </div>
                    </div>
                </section>
                <!-- Comment ça marche -->
                <section
                    class="wrapper text-white"
                    style="background-color: var(--color-bg2)"
                    id="comment-ca-marche"
                >
                    <div
                        class="shape"
                        style="
                            background-image: url('{{ asset('assets/images/shapes/shape1.svg') }}');
                        "
                    ></div>
                    <div class="appear" style="margin-bottom: 60px">
                        <h1 class="wrapper-title text-white">
                            Comment
                            <span style="color: var(--color-primary)">
                                ça marche
                            </span>
                        </h1>
                        <p>
                            Découvrez comment nous avons transformé les
                            opérations de nos clients grâce à des solutions
                            innovantes et adaptées à leurs besoins spécifiques.
                        </p>
                    </div>
                    <!-- steps -->
                    <div class="steps-grid">
                        <!-- étape 1 -->
                        <div class="step-card appear">
                            <span class="step-number">étape 1</span>
                            <div class="step-content">
                                <div class="step-icon">
                                    <!-- search/diagnostic icon -->
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <circle cx="11" cy="11" r="8" />
                                        <line
                                            x1="21"
                                            y1="21"
                                            x2="16.65"
                                            y2="16.65"
                                        />
                                    </svg>
                                </div>
                                <div class="step-title">
                                    Étude &amp; dimensionnement
                                </div>
                                <p class="step-text">
                                    Audit du magasin, estimation du besoin
                                    (linéaire, catégories, contraintes), et
                                    proposition d’un périmètre réaliste et
                                    optimisé.
                                </p>
                                <div class="step-tags">
                                    <span class="step-tag">Audit</span>
                                    <span class="step-tag">Analyse</span>
                                    <span class="step-tag">Cadrage</span>
                                </div>
                            </div>
                        </div>

                        <!-- étape 2 -->
                        <div class="step-card appear">
                            <span class="step-number">étape 2</span>
                            <div class="step-content">
                                <div class="step-icon">
                                    <!-- settings/deploy icon -->
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <polyline points="16 18 22 12 16 6" />
                                        <polyline points="8 6 2 12 8 18" />
                                    </svg>
                                </div>
                                <div class="step-title">
                                    Déploiement &amp; configuration
                                </div>
                                <p class="step-text">
                                    Installation des étiquettes, stations et
                                    accessoires, configuration du système, et
                                    préparation des flux de mise à jour.
                                </p>
                                <div class="step-tags">
                                    <span class="step-tag">Déploiement</span>
                                    <span class="step-tag">Intégration</span>
                                    <span class="step-tag">Formation</span>
                                </div>
                            </div>
                        </div>

                        <!-- étape 3 -->
                        <div class="step-card appear">
                            <span class="step-number">étape 3</span>
                            <div class="step-content">
                                <div class="step-icon">
                                    <!-- chart/optimisation icon -->
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <polyline
                                            points="22 12 18 12 15 21 9 3 6 12 2 12"
                                        />
                                    </svg>
                                </div>
                                <div class="step-title">
                                    Mise en production &amp; accompagnement
                                </div>
                                <p class="step-text">
                                    Formation, tests, mise en service
                                    progressive si nécessaire, puis support et
                                    maintenance pour sécuriser l’exploitation.
                                </p>
                                <div class="step-tags">
                                    <span class="step-tag">KPIs</span>
                                    <span class="step-tag">Reporting</span>
                                    <span class="step-tag">Itération</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ms-hero four">
                    <div
                        class="ms-parallax jarallax-img"
                        style="
                            background-image: url({{ asset('assets/media/images/image2.jpeg') }});
                        "
                        data-speed="0.7"
                        data-type="scroll"
                    ></div>
                    <div class="ms-hc">
                        <div class="ms-hc--inner">
                            <h2 class="ms-hero-title">
                                Plus de 15 ans d'expérience
                                <br />
                                dans le secteur
                            </h2>
                        </div>
                    </div>
                </section>
                <!-- Cas d'usage -->
                <section
                    class="wrapper"
                    style="background-color: var(--color-bg1)"
                    id="cas-usage"
                >
                    <div
                        class="shape"
                        style="
                            background-image: url('{{ asset('assets/images/shapes/shape2.svg') }}');
                        "
                    ></div>
                    <div class="appear">
                        <h1 class="wrapper-title">Cas d'usage</h1>
                        <p>
                            Des scénarios concrets adaptés aux besoins terrain.
                        </p>
                    </div>

                    <!-- grid -->
                    <div class="usage-grid">
                        <!-- 1 — Pharmacies -->
                        <div class="usage-card">
                            <div class="card-icon">
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2z"
                                    />
                                    <path d="M12 8v8M8 12h8" />
                                </svg>
                            </div>
                            <div class="card-title">
                                Pharmacies &amp; parapharmacies
                            </div>
                            <p class="card-text">
                                Affichage clair, mise à jour rapide des
                                promotions et gain de temps en période de rush.
                            </p>
                            <span class="card-tag">Santé &amp; beauté</span>
                        </div>

                        <!-- 2 — Supermarchés -->
                        <div class="usage-card">
                            <div class="card-icon">
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"
                                    />
                                    <line x1="3" y1="6" x2="21" y2="6" />
                                    <path d="M16 10a4 4 0 0 1-8 0" />
                                </svg>
                            </div>
                            <div class="card-title">Supermarchés</div>
                            <p class="card-text">
                                Gestion des changements massifs, promotions,
                                rayons à forte rotation et cohérence entre le
                                rayon et la caisse.
                            </p>
                            <span class="card-tag">Grande distribution</span>
                        </div>

                        <!-- 3 — Magasins spécialisés (dark) -->
                        <div class="usage-card usage-card--dark">
                            <div class="card-icon">
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <rect
                                        x="2"
                                        y="3"
                                        width="20"
                                        height="14"
                                        rx="2"
                                    />
                                    <line x1="8" y1="21" x2="16" y2="21" />
                                    <line x1="12" y1="17" x2="12" y2="21" />
                                </svg>
                            </div>
                            <div class="card-title">Magasins spécialisés</div>
                            <p class="card-text">
                                Électroménager, bricolage, décoration…
                                informations prix et promotions alignées et
                                faciles à piloter.
                            </p>
                            <span class="card-tag">Spécialisé</span>
                        </div>

                        <!-- 4 — Optimisation étiquettes (wide, dark) -->
                        <div
                            class="usage-card usage-card--dark usage-card--wide"
                        >
                            <div class="card-icon">
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <polyline
                                        points="22 12 18 12 15 21 9 3 6 12 2 12"
                                    />
                                </svg>
                            </div>
                            <div class="card-title">
                                Optimisation du nombre d'étiquettes
                            </div>
                            <p class="card-text">
                                Pour optimiser le budget, il est possible (selon
                                la configuration du rayon) de déployer une
                                étiquette pour deux produits. Une optimisation
                                encore plus poussée peut être envisagée avec des
                                formats permettant d'afficher jusqu'à quatre
                                produits. Ces optimisations se valident après
                                une étude terrain et la définition du périmètre
                                (linéaire, lisibilité, typologie de produits).
                            </p>
                            <span class="card-tag">Budget &amp; ROI</span>
                        </div>

                        <!-- 5 — Rails & supports -->
                        <div class="usage-card">
                            <div class="card-icon">
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <line x1="3" y1="6" x2="21" y2="6" />
                                    <line x1="3" y1="12" x2="21" y2="12" />
                                    <line x1="3" y1="18" x2="21" y2="18" />
                                </svg>
                            </div>
                            <div class="card-title">Rails &amp; supports</div>
                            <p class="card-text">
                                Les rails et supports adaptés peuvent être
                                fournis via nos partenaires au Maroc. Un devis
                                complémentaire est établi selon le métrage et le
                                type de linéaire.
                            </p>
                            <span class="card-tag">Infrastructure</span>
                        </div>
                    </div>
                </section>
                <!-- realisations -->
                <section
                    class="wrapper"
                    style="background-color: var(--color-bg2); color: white"
                    id="realisations"
                >
                    <div
                        class="shape"
                        style="
                            background-image: url('{{ asset('assets/images/shapes/shape1.svg') }}');
                        "
                    ></div>
                    <div class="appear">
                        <h1 class="wrapper-title text-white">Réalisations</h1>
                        <p>
                            Remplace les liens ci-dessous par tes 2 liens vers
                            des réalisations Pricer dans le monde.
                        </p>
                    </div>

                    <div class="realisations-grid">
                        <!-- LEFT — Inspiration & références -->
                        <div class="panel">
                            <div class="panel-title">
                                Inspiration &amp; références
                            </div>
                            <p class="panel-subtitle">
                                Découvrez des déploiements Pricer dans des
                                réseaux retail exigeants et observez les gains
                                opérationnels possibles.
                            </p>

                            <div class="link-list">
                                <a href="#" class="link-row">
                                    <div class="link-row-left">
                                        <span class="link-icon">
                                            <svg
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path
                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"
                                                />
                                                <path
                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"
                                                />
                                            </svg>
                                        </span>
                                        Réalisation Pricer #1 (à remplacer)
                                    </div>
                                    <span class="arrow-icon">
                                        <svg
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <line
                                                x1="5"
                                                y1="12"
                                                x2="19"
                                                y2="12"
                                            />
                                            <polyline
                                                points="12 5 19 12 12 19"
                                            />
                                        </svg>
                                    </span>
                                </a>

                                <a href="#" class="link-row">
                                    <div class="link-row-left">
                                        <span class="link-icon">
                                            <svg
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path
                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"
                                                />
                                                <path
                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"
                                                />
                                            </svg>
                                        </span>
                                        Réalisation Pricer #2 (à remplacer)
                                    </div>
                                    <span class="arrow-icon">
                                        <svg
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <line
                                                x1="5"
                                                y1="12"
                                                x2="19"
                                                y2="12"
                                            />
                                            <polyline
                                                points="12 5 19 12 12 19"
                                            />
                                        </svg>
                                    </span>
                                </a>
                            </div>

                            <div class="tip">
                                <span class="tip-dot"></span>
                                Astuce : tu peux ajouter une galerie photos ESL
                                (Elementor) juste au-dessus.
                            </div>
                        </div>

                        <!-- RIGHT — Notre accompagnement -->
                        <div class="panel">
                            <div class="panel-title">Notre accompagnement</div>
                            <p class="panel-subtitle">
                                Conexus IT gère le projet de bout en bout :
                            </p>

                            <div class="accomp-list">
                                <div class="accomp-item">
                                    <div class="accomp-bar"></div>
                                    <div class="accomp-body">
                                        <div class="accomp-title">
                                            Étude &amp; cadrage
                                        </div>
                                        <div class="accomp-text">
                                            Audit, dimensionnement, planning et
                                            périmètre.
                                        </div>
                                    </div>
                                </div>

                                <div class="accomp-item">
                                    <div class="accomp-bar"></div>
                                    <div class="accomp-body">
                                        <div class="accomp-title">
                                            Fourniture &amp; installation
                                        </div>
                                        <div class="accomp-text">
                                            ESL, stations, accessoires, pose et
                                            configuration.
                                        </div>
                                    </div>
                                </div>

                                <div class="accomp-item">
                                    <div class="accomp-bar"></div>
                                    <div class="accomp-body">
                                        <div class="accomp-title">
                                            Formation &amp; support
                                        </div>
                                        <div class="accomp-text">
                                            Prise en main, assistance,
                                            maintenance.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- contact form -->
                <section
                    class="wrapper"
                    style="
                        background-color: var(--color-bg1);
                        margin-bottom: !important 0;
                    "
                >
                    <div
                        class="shape"
                        style="
                            background-image: url('{{ asset('assets/images/shapes/shape2.svg') }}');
                        "
                    ></div>
                    <div class="appear">
                        <h1 class="wrapper-title">Contactez-nous</h1>
                        <p>
                            Vous avez une question ou souhaitez en savoir plus
                            sur nos solutions ? N'hésitez pas à nous contacter
                            pour discuter de vos besoins et découvrir comment
                            nous pouvons vous aider à transformer votre
                            activité.
                        </p>
                    </div>
                </section>
                <!-- ── VIDEO + FORM ── -->
                <section class="contact-section" id="contact">
                    <!-- video background -->
                    <video
                        autoplay
                        loop
                        muted
                        playsinline
                        class="background-video"
                    >
                        <source
                            src="{{ asset('assets/media/videos/video_2.mp4') }}"
                            type="video/mp4"
                        />
                    </video>

                    <!-- frosted glass form -->
                    <div class="form-panel">
                        <!-- shape -->

                        <div class="form-panel-title">
                            Recevoir une démo + une estimation rapide
                        </div>
                        <p class="form-panel-sub">
                            Remplis ce formulaire (2 minutes). Tu peux aussi
                            passer par WhatsApp pour aller plus vite.
                        </p>

                        <form
                            style="position: relative"
                            action="{{ route('contact.submit') }}"
                            method="POST"
                            id="contact-form"
                        >
                            @csrf
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="nom">Nom &amp; prénom</label>
                                    <input
                                        type="text"
                                        id="nom"
                                        name="nom"
                                        placeholder="Ex : Ghizlane Darbane"
                                    />
                                    <small
                                        id="nom-error"
                                        class="field-error"
                                        style="
                                            color: #dc3545;
                                            display: block;
                                            margin-top: 6px;
                                        "
                                    ></small>
                                </div>
                                <div class="form-group">
                                    <label for="societe">Société</label>
                                    <input
                                        type="text"
                                        id="societe"
                                        name="societe"
                                        placeholder="Ex : Nom de votre enseigne"
                                    />
                                    <small
                                        id="societe-error"
                                        class="field-error"
                                        style="
                                            color: #dc3545;
                                            display: block;
                                            margin-top: 6px;
                                        "
                                    ></small>
                                </div>

                                <div class="form-group">
                                    <label for="ville">Ville</label>
                                    <input
                                        type="text"
                                        id="ville"
                                        name="ville"
                                        placeholder="Ex : Casablanca"
                                    />
                                </div>

                                <div class="form-group">
                                    <label for="type">Type de magasin</label>
                                    <select id="type" name="type">
                                        <option value="" disabled selected>
                                            Choisir…
                                        </option>
                                        <option>
                                            Pharmacie / Parapharmacie
                                        </option>
                                        <option>Supermarché</option>
                                        <option>Magasin spécialisé</option>
                                        <option>Autre</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="surface">
                                        Surface (approx.)
                                    </label>
                                    <input
                                        type="text"
                                        id="surface"
                                        name="surface"
                                        placeholder="Ex : 120 m²"
                                    />
                                </div>

                                <div class="form-group">
                                    <label for="etiquettes">
                                        Nombre d'étiquettes estimé
                                    </label>
                                    <input
                                        type="text"
                                        id="etiquettes"
                                        name="etiquettes"
                                        placeholder="Ex : 800"
                                    />
                                </div>

                                <div class="form-group">
                                    <label for="tel">Téléphone</label>
                                    <input
                                        type="tel"
                                        id="tel"
                                        name="tel"
                                        placeholder="Ex : +212 6XX XX XX XX"
                                    />
                                    <small
                                        id="tel-error"
                                        class="field-error"
                                        style="
                                            color: #dc3545;
                                            display: block;
                                            margin-top: 6px;
                                        "
                                    ></small>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        placeholder="Ex : contact@entreprise.ma"
                                    />
                                </div>

                                <div class="form-group full">
                                    <label for="message">Message</label>
                                    <textarea
                                        id="message"
                                        name="message"
                                        placeholder="Décris ton besoin : rayons concernés, promo fréquentes, contraintes…"
                                    ></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <!-- Submit -->
                                <button type="submit" class="btn btn-primary">
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    Envoyer ma demande
                                </button>

                                <!-- WhatsApp -->
                                <a
                                    href="https://wa.me/212661220585"
                                    target="_blank"
                                    class="btn btn-whatsapp"
                                >
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <path
                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"
                                        />
                                    </svg>
                                    WhatsApp
                                </a>

                                <!-- Email -->
                                <a
                                    href="mailto:contact@conexus-it.ma"
                                    class="btn btn-email"
                                >
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                                        />
                                        <polyline points="22,6 12,13 2,6" />
                                    </svg>
                                    Email
                                </a>
                            </div>

                            <p class="form-legal">
                                En envoyant ce formulaire, vous acceptez d'être
                                contacté(e) par Conexus IT pour le traitement de
                                votre demande. Nous n'utilisons pas vos
                                informations à des fins autres que la prise de
                                contact liée à ce projet.
                            </p>
                            <div
                                class="shape"
                                style="
                                    background-image: url('{{ asset('assets/images/shapes/shape2.svg') }}');
                                "
                            ></div>
                        </form>
                    </div>
                </section>
            </div>
        </main>

        <!--================= Footer Area Start Here =================-->
        <!-- <footer class="ms-footer ms-footer--template">
            <div class="container footer-container" data-parallax="on">
                <div class="footer-inner">
                    <div class="footer-title text-center">
                        <h2>Have an idea? Let’s build it!</h2>
                        <a
                            class="ms-sl"
                            role="button"
                            data-transition="no"
                            data-style="no"
                            href="mailto:mokko@theme.me"
                            target="hidden-iframe"
                        >
                            <span class="ms-btn__icon link ms-btn__icon--left">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="88"
                                    height="88"
                                    viewBox="0 0 88 88"
                                    fill="none"
                                >
                                    <path
                                        d="M79 64H32.3333C19.4455 64 9 53.4352 9 40.4V5"
                                        stroke="#747474"
                                        stroke-width="8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path
                                        d="M60 44L79 63.5001L60 83"
                                        stroke="#747474"
                                        stroke-width="8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                </svg>
                            </span>
                            mokko@theme.me
                        </a>
                    </div>
                    <div class="footer-bottom-area">
                        <ul class="footer-nav-area">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="shop.html">Shop</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                        <div class="copyright-area">
                            <div class="inner">
                                <div class="logo-icon">
                                    <img
                                        src="{{ asset('assets/images/logo/mokko_icon.png') }}"
                                        alt=""
                                    />
                                </div>
                                <div class="content">
                                    <p class="top">
                                        2024 © ALL RIGHTS RESERVED
                                    </p>
                                    <p class="bottom">
                                        MOKKO is an Premium Portfolio WordPress
                                        <br />
                                        Theme created by MadSparrow
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="social-area">
                            <ul class="area-inner">
                                <li>
                                    <a
                                        class="btn btn-default btn--sm btn--primary"
                                        role="button"
                                        href="#"
                                        target="_blank"
                                    >
                                        <div class="ms-btn__text">Facebook</div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="btn btn-default btn--sm btn--primary"
                                        role="button"
                                        href="#"
                                        target="_blank"
                                    >
                                        <div class="ms-btn__text">
                                            X / Twitter
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="btn btn-default btn--sm btn--primary"
                                        role="button"
                                        href="#"
                                        target="_blank"
                                    >
                                        <div class="ms-btn__text">
                                            Instagram
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->

        <!-- ── CTA BANNER (sits on light bg, transitions into dark footer) ── -->
        <div class="cta-wrapper">
            <div class="cta-wordmark">Conexus IT</div>

            <div class="cta-panel">
                <div class="cta-left">
                    <h2>
                        Prêt à moderniser
                        <br />
                        votre
                        <span>étiquetage</span>
                        ?
                    </h2>
                    <p>
                        Contactez-nous pour une démo personnalisée et une
                        estimation rapide adaptée à votre réseau de magasins.
                    </p>
                </div>
                <div class="cta-right">
                    <div class="cta-actions">
                        <a href="#contact" class="btn btn-primary">
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path
                                    d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
                                />
                            </svg>
                            Demander une démo
                        </a>
                        <a
                            href="https://wa.me/212661220585"
                            class="btn btn-ghost"
                            target="_blank"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                width="16"
                                height="16"
                            >
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"
                                />
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── FOOTER ── -->
        <footer>
            <div class="footer-main">
                <!-- brand -->
                <div class="footer-brand">
                    <img
                        src="{{ asset('assets/media/images/conexus-it-log.png') }}"
                        alt="Conexus IT Solutions"
                    />
                    <p>
                        Spécialiste en étiquetage électronique Pricer au Maroc —
                        solutions pour pharmacies, supermarchés et magasins
                        spécialisés.
                    </p>
                    <div class="social-row">
                        <!-- LinkedIn -->
                        <a href="#" class="social-btn" title="LinkedIn">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"
                                />
                                <rect x="2" y="9" width="4" height="12" />
                                <circle cx="4" cy="4" r="2" />
                            </svg>
                        </a>
                        <!-- WhatsApp -->
                        <a href="#" class="social-btn" title="WhatsApp">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"
                                />
                            </svg>
                        </a>
                        <!-- Email -->
                        <a
                            href="mailto:contact@conexus-it.ma"
                            class="social-btn"
                            title="Email"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path
                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                                />
                                <polyline points="22,6 12,13 2,6" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Solutions -->
                <div class="footer-col">
                    <h4>Solutions</h4>
                    <ul>
                        <li><a href="#">Étiquettes ESL Pricer</a></li>
                        <li><a href="#">Stations de base</a></li>
                        <li><a href="#">Rails &amp; supports</a></li>
                        <li><a href="#">Logiciel de gestion</a></li>
                        <li><a href="#">Intégration caisse</a></li>
                    </ul>
                </div>

                <!-- Entreprise -->
                <div class="footer-col">
                    <h4>Entreprise</h4>
                    <ul>
                        <li><a href="#accueil">À propos</a></li>
                        <li><a href="#realisations">Réalisations</a></li>
                        <li><a href="#cas-usage">Cas d'usage</a></li>
                        <li>
                            <a href="#comment-ca-marche">Comment ça marche</a>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#contact">Documentation</a></li>
                        <li><a href="#contact">Demander une démo</a></li>
                        <li>
                            <a href="https://wa.me/212661220585">WhatsApp</a>
                        </li>
                        <li>
                            <a href="mailto:g.darbane@conexusit.ma">
                                Email direct
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- bottom bar -->
            <div class="footer-bottom">
                <div class="status-pill">
                    <span class="status-dot"></span>
                    Disponible pour votre projet
                </div>
                <span class="footer-copy">
                    © <?php echo date('Y'); ?> Conexus IT Solutions. Tous
                    droits réservés.
                </span>
                <div class="footer-legal">
                    <a href="#">Politique de confidentialité</a>
                    <a href="#">Mentions légales</a>
                </div>
            </div>
        </footer>
        <!--================= Footer Area End Here =================-->

        <!--================= Script Start Here =================-->
        <a class="back-to-top js-back-to-top" data-scroll-to href="#top">
            <div class="ms-btt--text">Back to top</div>
            <div class="ms-btt--inner">
                <svg
                    class="ms-btt-i"
                    enable-background="new 0 0 96 96"
                    height="96px"
                    id="arrow_up"
                    version="1.1"
                    viewBox="0 0 96 96"
                    width="96px"
                    xml:space="preserve"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                    <path
                        d="M52,84V21.656l21.457,21.456c1.561,1.562,4.095,1.562,5.656,0.001c1.562-1.562,1.562-4.096,0-5.658L50.829,9.172l0,0  c-0.186-0.186-0.391-0.352-0.609-0.498c-0.101-0.067-0.21-0.114-0.315-0.172c-0.124-0.066-0.242-0.142-0.373-0.195  c-0.135-0.057-0.275-0.089-0.415-0.129c-0.111-0.033-0.216-0.076-0.331-0.099C48.527,8.027,48.264,8,48.001,8l0,0  c-0.003,0-0.006,0.001-0.009,0.001c-0.259,0.001-0.519,0.027-0.774,0.078c-0.12,0.024-0.231,0.069-0.349,0.104  c-0.133,0.039-0.268,0.069-0.397,0.123c-0.139,0.058-0.265,0.136-0.396,0.208c-0.098,0.054-0.198,0.097-0.292,0.159  c-0.221,0.146-0.427,0.314-0.614,0.501L16.889,37.456c-1.562,1.562-1.562,4.095-0.001,5.657c1.562,1.562,4.094,1.562,5.658,0  L44,21.657V84c0,2.209,1.791,4,4,4S52,86.209,52,84z"
                    />
                </svg>
            </div>
        </a>

        <!-- ══ CHAT TOGGLE BUTTON ══ -->
        <button
            id="chat-toggle"
            title="Discuter avec nous"
            aria-label="Ouvrir le chat"
        >
            <!-- Chat icon -->
            <!-- <div
                class="chat-icon"
                style="
                    background-color: black;
                    background-image: url('{{ asset('assets/media/images/chat_bot.svg') }}');
                "
            ></div> -->
            <img
                class="chat-icon"
                src="{{ asset('assets/media/images/chat_bot.svg') }}"
                alt="Chat Bot"
            />
        </button>

        <!-- ══ CHAT WINDOW ══ -->
        <div id="chat-window" role="dialog" aria-label="Chat Conexus IT">
            <!-- Header -->
            <div class="chat-header">
                <div class="chat-header-avatar">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                        />
                    </svg>
                </div>
                <div class="chat-header-info">
                    <div class="chat-header-name">Assistant Conexus IT</div>
                    <div class="chat-header-status">
                        En ligne · Répond instantanément
                    </div>
                </div>
                <button
                    class="chat-close"
                    onclick="closeChat()"
                    aria-label="Fermer"
                >
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"
                        />
                    </svg>
                </button>
            </div>

            <!-- Messages -->
            <div id="chat-messages"></div>

            <!-- Input -->
            <div class="chat-input-area">
                <textarea
                    id="chat-input"
                    placeholder="Posez votre question…"
                    rows="1"
                    onkeydown="handleKey(event)"
                    oninput="autoResize(this)"
                ></textarea>
                <button id="chat-send" onclick="sendMessage()" title="Envoyer">
                    <svg viewBox="0 0 24 24">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
                    </svg>
                </button>
            </div>
            <div class="chat-footer">
                Propulsé par
                <span>Conexus IT</span>
                × IA
            </div>
        </div>

        <!-- ════════════════════════════════════════
     SUCCESS MODAL
════════════════════════════════════════ -->
        <div
            class="modal-overlay"
            id="modal-success"
            role="dialog"
            aria-modal="true"
            aria-labelledby="success-title"
        >
            <div class="modal-box">
                <div class="modal-bar modal-bar--success"></div>
                <div
                    class="modal-inner"
                    style="position: relative; overflow: hidden"
                >
                    <!-- molecule deco -->
                    <svg
                        class="modal-deco"
                        width="90"
                        height="90"
                        viewBox="0 0 90 90"
                        fill="none"
                    >
                        <circle
                            cx="20"
                            cy="45"
                            r="5"
                            stroke="#4ade80"
                            stroke-width="1.5"
                        />
                        <circle
                            cx="70"
                            cy="20"
                            r="5"
                            stroke="#4ade80"
                            stroke-width="1.5"
                        />
                        <circle
                            cx="70"
                            cy="70"
                            r="5"
                            stroke="#4ade80"
                            stroke-width="1.5"
                        />
                        <line
                            x1="25"
                            y1="43"
                            x2="65"
                            y2="22"
                            stroke="#4ade80"
                            stroke-width="1.2"
                        />
                        <line
                            x1="25"
                            y1="47"
                            x2="65"
                            y2="68"
                            stroke="#4ade80"
                            stroke-width="1.2"
                        />
                        <line
                            x1="70"
                            y1="25"
                            x2="70"
                            y2="65"
                            stroke="#4ade80"
                            stroke-width="1.2"
                            stroke-dasharray="3 3"
                        />
                    </svg>

                    <!-- icon -->
                    <div class="modal-icon-wrap modal-icon-wrap--success">
                        <svg
                            class="icon-svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="#4ade80"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </div>

                    <h2 class="modal-title" id="success-title">
                        Demande envoyée !
                    </h2>
                    <p class="modal-text">
                        Merci
                        <strong id="success-name"></strong>
                        votre demande a bien été reçue. Notre équipe vous
                        contactera dans les
                        <strong>24 à 48h</strong>
                        pour organiser votre démo personnalisée.
                    </p>

                    <div class="modal-detail">
                        <span class="detail-dot"></span>
                        Un email de confirmation vous a été envoyé
                    </div>

                    <div class="modal-actions">
                        <button
                            class="modal-btn modal-btn--ghost"
                            onclick="closeModal('success')"
                            aria-label="Fermer"
                        >
                            Fermer
                        </button>
                        <a
                            href="https://wa.me/212661220585"
                            class="modal-btn modal-btn--primary-green"
                            style="
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                gap: 7px;
                                text-decoration: none;
                            "
                            target="_blank"
                        >
                            <svg
                                width="15"
                                height="15"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"
                                />
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ════════════════════════════════════════
     ERROR MODAL
════════════════════════════════════════ -->
        <div
            class="modal-overlay"
            id="modal-error"
            role="dialog"
            aria-modal="true"
            aria-labelledby="error-title"
        >
            <div class="modal-box">
                <div class="modal-bar modal-bar--error"></div>
                <div
                    class="modal-inner"
                    style="position: relative; overflow: hidden"
                >
                    <!-- molecule deco (red tint) -->
                    <svg
                        class="modal-deco"
                        width="90"
                        height="90"
                        viewBox="0 0 90 90"
                        fill="none"
                    >
                        <circle
                            cx="20"
                            cy="45"
                            r="5"
                            stroke="#f87171"
                            stroke-width="1.5"
                        />
                        <circle
                            cx="70"
                            cy="20"
                            r="5"
                            stroke="#f87171"
                            stroke-width="1.5"
                        />
                        <circle
                            cx="70"
                            cy="70"
                            r="5"
                            stroke="#f87171"
                            stroke-width="1.5"
                        />
                        <line
                            x1="25"
                            y1="43"
                            x2="65"
                            y2="22"
                            stroke="#f87171"
                            stroke-width="1.2"
                        />
                        <line
                            x1="25"
                            y1="47"
                            x2="65"
                            y2="68"
                            stroke="#f87171"
                            stroke-width="1.2"
                        />
                        <line
                            x1="70"
                            y1="25"
                            x2="70"
                            y2="65"
                            stroke="#f87171"
                            stroke-width="1.2"
                            stroke-dasharray="3 3"
                        />
                    </svg>

                    <!-- icon -->
                    <div class="modal-icon-wrap modal-icon-wrap--error">
                        <svg
                            class="icon-svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="#f87171"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </div>

                    <h2 class="modal-title" id="error-title">Erreur d'envoi</h2>
                    <p class="modal-text">
                        Désolé, une erreur est survenue lors de l'envoi de votre
                        message. Veuillez réessayer ou nous contacter
                        directement via WhatsApp ou email.
                    </p>

                    <!-- contact fallback -->
                    <div
                        style="
                            background: rgba(248, 113, 113, 0.07);
                            border: 1px solid rgba(248, 113, 113, 0.2);
                            border-radius: 12px;
                            padding: 14px 18px;
                            margin-bottom: 28px;
                            text-align: left;
                        "
                    >
                        <p
                            style="
                                font-size: 0.75rem;
                                color: rgba(255, 255, 255, 0.35);
                                margin-bottom: 6px;
                                text-transform: uppercase;
                                letter-spacing: 0.06em;
                                font-weight: 600;
                            "
                        >
                            Contact direct
                        </p>
                        <a
                            href="mailto:	g.darbane@conexusit.ma"
                            style="
                                font-size: 0.85rem;
                                color: #f87171;
                                text-decoration: none;
                                font-weight: 600;
                                display: block;
                                margin-bottom: 4px;
                            "
                        >
                            g.darbane@conexusit.ma
                        </a>
                        <a
                            href="tel:+212661220585"
                            style="
                                font-size: 0.85rem;
                                color: rgba(255, 255, 255, 0.55);
                                text-decoration: none;
                            "
                        >
                            +212 661 220 585
                        </a>
                    </div>

                    <div class="modal-actions">
                        <button
                            class="modal-btn modal-btn--ghost"
                            onclick="closeModal('error')"
                        >
                            Annuler
                        </button>
                        <button
                            class="modal-btn modal-btn--primary-red"
                            onclick="
                                closeModal('error');
                                document
                                    .querySelector('form')
                                    ?.dispatchEvent(new Event('retry'));
                            "
                        >
                            Réessayer
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!--================= jquery latest version =================-->
        <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
        <!--================= fslightbox JS =================-->
        <script src="{{ asset('assets/js/vendor/fslightbox.js') }}"></script>
        <!--================= Gsap JS =================-->
        <script src="{{ asset('assets/js/vendor/gsap.min.js') }}"></script>
        <!--================= Isotop pkgd JS =================-->
        <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
        <!--================= Isotop pkgd JS =================-->
        <script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
        <!--================= Jarallax Video JS =================-->
        <script src="{{ asset('assets/js/vendor/jarallax-video.min.js') }}"></script>
        <!--================= Jarallax JS =================-->
        <script src="{{ asset('assets/js/vendor/jarallax.min.js') }}"></script>
        <!--================= Gallery JS =================-->
        <script src="{{ asset('assets/js/vendor/jquery.justifiedGallery.min.js') }}"></script>
        <!--================= Miodernizr JS =================-->
        <script src="{{ asset('assets/js/vendor/modernizr.js') }}"></script>
        <!--================= Splitting JS =================-->
        <script src="{{ asset('assets/js/vendor/splitting.min.js') }}"></script>
        <!--================= Splitting JS =================-->
        <script src="{{ asset('assets/js/vendor/splittext.js') }}"></script>
        <!--================= ScrollMagic JS =================-->
        <script src="{{ asset('assets/js/vendor/scrollmagic.js') }}"></script>
        <!--================= ScrollMagic JS =================-->
        <script src="{{ asset('assets/js/vendor/animate-scrollmagic.js') }}"></script>
        <!--================= ScrollMagic JS =================-->
        <script src="{{ asset('assets/js/vendor/smooth-scroll.js') }}"></script>
        <!--================= ScrollMagic JS =================-->
        <script src="{{ asset('assets/js/vendor/magnific-popup.js') }}"></script>
        <!--================= Locomotive JS =================-->
        <script src="{{ asset('assets/js/vendor/locomotive-scroll.min.js') }}"></script>
        <!--================= Locomotive JS =================-->
        <script src="{{ asset('assets/js/vendor/effect-material.min.js') }}"></script>
        <!--================= Locomotive JS =================-->
        <script src="{{ asset('assets/js/vendor/triple-slider.js') }}"></script>
        <!--================= Plyr JS =================-->
        <script src="{{ asset('assets/js/vendor/plyr.js') }}"></script>
        <!--================= Plyr JS =================-->
        <script src="{{ asset('assets/js/vendor/scrolltrigger.min.js') }}"></script>
        <!--================= Swiper Bundle JS =================-->
        <script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
        <!--================= Bootstrap JS =================-->
        <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
        <!--================= Video JS =================-->
        <script src="{{ asset('assets/js/vendor/video-background.js') }}"></script>
        <!--================= Main JS =================-->
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script>
            (() => {
                const navLinks = Array.from(
                    document.querySelectorAll(
                        '#primary-menu-default > li > a[href^="#"]'
                    )
                );

                const sections = navLinks
                    .map((link) => {
                        const hash = link.getAttribute('href');
                        if (!hash || hash === '#') return null;

                        const section = document.querySelector(hash);
                        if (!section) return null;

                        return {
                            hash,
                            link,
                            item: link.closest('li'),
                            section,
                        };
                    })
                    .filter(Boolean);

                if (!sections.length) return;

                const setActive = (activeHash) => {
                    sections.forEach(({ hash, link, item }) => {
                        const isActive = hash === activeHash;
                        link.classList.toggle('active', isActive);
                        item?.classList.toggle('active', isActive);
                        item?.classList.toggle('current_page_item', isActive);

                        if (isActive) {
                            link.setAttribute('aria-current', 'page');
                        } else {
                            link.removeAttribute('aria-current');
                        }
                    });
                };

                const detectActiveSection = () => {
                    const header = document.getElementById('ms-header');
                    const headerHeight = header?.offsetHeight || 0;
                    const topSafeArea = headerHeight + 20;
                    const viewportHeight = window.innerHeight;
                    const detectionLine =
                        topSafeArea + (viewportHeight - topSafeArea) * 0.35;
                    let active = sections.find(({ section }) => {
                        const rect = section.getBoundingClientRect();
                        return (
                            rect.top <= detectionLine &&
                            rect.bottom >= detectionLine
                        );
                    });
                    sections.forEach(({ link, item }) => {
                        link.classList.remove('active');
                        item?.classList.remove('active', 'current_page_item');
                        link.removeAttribute('aria-current');
                    });
                    if (active) {
                        setActive(active.hash);
                    }
                };

                let ticking = false;
                const onScroll = () => {
                    if (ticking) return;

                    window.requestAnimationFrame(() => {
                        detectActiveSection();
                        ticking = false;
                    });

                    ticking = true;
                };

                navLinks.forEach((link) => {
                    link.addEventListener('click', () => {
                        const targetHash = link.getAttribute('href');
                        if (targetHash && targetHash !== '#') {
                            setActive(targetHash);
                        }
                    });
                });

                window.addEventListener('scroll', onScroll, { passive: true });
                window.addEventListener('resize', detectActiveSection);
                window.addEventListener('load', detectActiveSection);

                detectActiveSection();
            })();
        </script>
        <script></script>
        <!--================= Script End Here =================-->
        <script></script>

        <script>
            const toggle = document.getElementById('chat-toggle');
            const win = document.getElementById('chat-window');
            const messages = document.getElementById('chat-messages');
            const input = document.getElementById('chat-input');
            const sendBtn = document.getElementById('chat-send');

            let isOpen = false;

            // Quick replies shown after welcome message
            const quickReplies = [
                'Nos services',
                'Comment ça marche ?',
                'Demander une démo',
                'Nous contacter',
            ];

            /* ── Open / Close ── */
            toggle.addEventListener('click', () =>
                isOpen ? closeChat() : openChat()
            );

            function openChat() {
                isOpen = true;
                win.classList.add('open');
                toggle.classList.add('open');
                // Show welcome message once
                if (messages.children.length === 0) showWelcome();
                setTimeout(() => input.focus(), 300);
            }

            function closeChat() {
                isOpen = false;
                win.classList.remove('open');
                toggle.classList.remove('open');
            }

            /* ── Welcome ── */
            function showWelcome() {
                addBotMessage(
                    "Bonjour ! 👋 Je suis l'assistant de <strong>Conexus IT</strong>.<br>Comment puis-je vous aider aujourd'hui ?",
                    quickReplies
                );
            }

            /* ── Add messages ── */
            function addBotMessage(html, replies = []) {
                const wrap = document.createElement('div');
                wrap.className = 'msg msg-bot';

                const bubble = document.createElement('div');
                bubble.className = 'msg-bubble';
                bubble.innerHTML = html;
                wrap.appendChild(bubble);

                const time = document.createElement('div');
                time.className = 'msg-time';
                time.textContent = now();
                wrap.appendChild(time);

                if (replies.length) {
                    const qr = document.createElement('div');
                    qr.className = 'quick-replies';
                    replies.forEach((r) => {
                        const btn = document.createElement('button');
                        btn.className = 'quick-reply-btn';
                        btn.textContent = r;
                        btn.onclick = () => {
                            qr.remove();
                            handleQuickReply(r);
                        };
                        qr.appendChild(btn);
                    });
                    wrap.appendChild(qr);
                }

                messages.appendChild(wrap);
                scroll();
            }

            function addUserMessage(text) {
                const wrap = document.createElement('div');
                wrap.className = 'msg msg-user';
                wrap.innerHTML = `
      <div class="msg-bubble">${escHtml(text)}</div>
      <div class="msg-time">${now()}</div>
    `;
                messages.appendChild(wrap);
                scroll();
            }

            function showTyping() {
                const el = document.createElement('div');
                el.className = 'msg msg-bot';
                el.id = 'typing';
                el.innerHTML = `
      <div class="typing-indicator">
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
      </div>`;
                messages.appendChild(el);
                scroll();
                return el;
            }

            /* ── Send ── */
            async function sendMessage() {
                const text = input.value.trim();
                if (!text || sendBtn.disabled) return;

                addUserMessage(text);
                input.value = '';
                autoResize(input);

                sendBtn.disabled = true;
                const typingEl = showTyping();

                try {
                    const res = await fetch('/chatbot', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN':
                                document.querySelector(
                                    'meta[name="csrf-token"]'
                                )?.content || '',
                        },
                        body: JSON.stringify({ message: text }),
                    });
                    const data = await res.json();
                    console.log('Bot reply:', data.reply);
                    typingEl.remove();
                    addBotMessage(data.reply);
                } catch {
                    typingEl.remove();
                    addBotMessage(
                        'Désolé, une erreur est survenue. Veuillez réessayer ou nous <a href="#contact" style="color:#5be584">contacter directement</a>.'
                    );
                }

                sendBtn.disabled = false;
                input.focus();
            }

            function handleQuickReply(text) {
                addUserMessage(text);
                sendBtn.disabled = true;
                const typingEl = showTyping();

                // Simulate for demo — in production this calls /chatbot too
                setTimeout(() => {
                    typingEl.remove();
                    const replies = {
                        'Nos services':
                            "Nous proposons des solutions d'étiquetage électronique de rayon (ESL) pour le retail : mise à jour instantanée des prix, réduction des erreurs, gain de temps et amélioration de l'expérience client. 🛒",
                        'Comment ça marche ?':
                            "C'est simple : nos étiquettes ESL sont connectées à votre système de caisse. Lorsqu'un prix change, il est mis à jour automatiquement sur tous les rayons en quelques secondes. 🔄",
                        'Demander une démo':
                            'Nous serions ravis de vous faire une démo ! Laissez-nous votre email ou rendez-vous sur notre page <strong>Contact</strong> et notre équipe vous répondra sous 24h. 📩',
                        'Nous contacter':
                            'Vous pouvez nous contacter via le formulaire sur notre site ou directement à <strong>g.darbane@conexusit.ma</strong>. Nous répondons en moins de 24h ! ✉️',
                    };
                    addBotMessage(
                        replies[text] ||
                            'Merci pour votre question ! Notre équipe va vous répondre rapidement.'
                    );
                    sendBtn.disabled = false;
                }, 1200);
            }

            /* ── Helpers ── */
            function handleKey(e) {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    sendMessage();
                }
            }
            function autoResize(el) {
                el.style.height = 'auto';
                el.style.height = Math.min(el.scrollHeight, 100) + 'px';
            }
            function scroll() {
                setTimeout(
                    () => (messages.scrollTop = messages.scrollHeight),
                    50
                );
            }
            function now() {
                return new Date().toLocaleTimeString('fr-FR', {
                    hour: '2-digit',
                    minute: '2-digit',
                });
            }
            function escHtml(t) {
                return t
                    .replace(/&/g, '&amp;')
                    .replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;');
            }
        </script>
        <script>
            function showModal(type, name = '') {
                // inject client name into success message if provided
                if (type === 'success' && name) {
                    const el = document.getElementById('success-name');
                    if (el) el.textContent = name + ', ';
                }

                const overlay = document.getElementById('modal-' + type);
                if (!overlay) return;

                // re-trigger icon draw animation by cloning paths
                overlay
                    .querySelectorAll(
                        '.icon-svg path, .icon-svg polyline, .icon-svg line'
                    )
                    .forEach((el) => {
                        el.style.animation = 'none';
                        el.offsetHeight; // reflow
                        el.style.animation = '';
                    });

                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';

                // auto-close success after 6s
                if (type === 'success') {
                    setTimeout(() => closeModal('success'), 6000);
                }
            }

            function closeModal(type) {
                const overlay = document.getElementById('modal-' + type);
                if (!overlay) return;
                overlay.classList.remove('active');
                document.body.style.overflow = '';
                document.getElementById('contact-form').scrollIntoView({
                    behavior: 'smooth',
                    block: 'center',
                });
                console.log(
                    'Modal closed, scroll to contact form',
                    document.getElementById('contact-form')
                );
            }

            // close on overlay click
            document.querySelectorAll('.modal-overlay').forEach((overlay) => {
                overlay.addEventListener('click', (e) => {
                    if (e.target === overlay) {
                        overlay.classList.remove('active');
                        document.body.style.overflow = '';
                        document.getElementById('contact-form').scrollIntoView({
                            behavior: 'smooth',
                            block: 'center',
                        });
                    }
                });
            });

            // close on Escape
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    document
                        .querySelectorAll('.modal-overlay.active')
                        .forEach((o) => {
                            o.classList.remove('active');
                            document.body.style.overflow = '';
                        });
                    document.getElementById('contact-form').scrollIntoView({
                        behavior: 'smooth',
                        block: 'center',
                    });
                }
            });
        </script>
        <script>
            document
                .getElementById('contact-form')
                .addEventListener('submit', function (e) {
                    e.preventDefault();
                    let isValid = true;

                    // Clear previous errors
                    document
                        .querySelectorAll('.field-error')
                        .forEach((el) => (el.textContent = ''));
                    document
                        .querySelectorAll('input, textarea, select')
                        .forEach((el) => (el.style.borderColor = ''));

                    // ── Nom & Prénom (required) ──────────────────────────────
                    const nom = document.getElementById('nom');
                    const nomError = document.getElementById('nom-error');
                    if (!nom.value.trim()) {
                        nomError.appendChild(
                            document.createTextNode('Le nom est obligatoire.')
                        );
                        nom.style.borderColor = '#dc3545';
                        isValid = false;
                    }

                    // ── Téléphone (required + Moroccan format) ───────────────
                    const tel = document.getElementById('tel');
                    const telError = document.getElementById('tel-error');
                    // Accepts: 06XXXXXXXX | 07XXXXXXXX | 05XXXXXXXX
                    // Also accepts international: +2126... / 002126...
                    const moroccanRegex =
                        /^(?:0[567]\d{8}|(?:\+212|00212)[567]\d{8})$/;
                    const telClean = tel.value.trim().replace(/\s+/g, '');
                    console.log('Cleaned phone:', telClean);
                    if (!telClean) {
                        telError.textContent =
                            'Le numéro de téléphone est obligatoire.';
                        tel.style.borderColor = '#dc3545';
                        isValid = false;
                    } else if (!moroccanRegex.test(telClean)) {
                        telError.textContent =
                            'Numéro invalide. Il doit commencer par 05, 06 ou 07 (ex: 0612345678).';
                        tel.style.borderColor = '#dc3545';
                        isValid = false;
                    }

                    // ── Email (required + format) ────────────────────────────
                    const email = document.getElementById('email');
                    // Add error small tag dynamically if it doesn't exist
                    let emailError = document.getElementById('email-error');
                    if (!emailError) {
                        emailError = document.createElement('small');
                        emailError.id = 'email-error';
                        emailError.className = 'field-error';
                        emailError.style.cssText =
                            'color:#dc3545; display:block; margin-top:6px;';
                        email.insertAdjacentElement('afterend', emailError);
                    }

                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!email.value.trim()) {
                        emailError.textContent =
                            "L'adresse email est obligatoire.";
                        email.style.borderColor = '#dc3545';
                        isValid = false;
                    } else if (!emailRegex.test(email.value.trim())) {
                        emailError.textContent =
                            "L'adresse email n'est pas valide.";
                        email.style.borderColor = '#dc3545';
                        isValid = false;
                    }

                    // ── Block submit if invalid ──────────────────────────────
                    if (!isValid) {
                        // Scroll to first error
                        const firstError = document.querySelector(
                            '.field-error:not(:empty)'
                        );
                        if (firstError)
                            firstError.scrollIntoView({
                                behavior: 'smooth',
                                block: 'center',
                            });
                    } else {
                        //prepare data as an object
                        const formData = {
                            nom: nom.value.trim() || null,
                            societe:
                                document
                                    .getElementById('societe')
                                    .value.trim() || null,
                            tel: tel.value.trim() || null,
                            email: email.value.trim() || null,
                            message:
                                document
                                    .getElementById('message')
                                    .value.trim() || null,
                            ville:
                                document.getElementById('ville').value.trim() ||
                                null,
                            type:
                                document.getElementById('type').value.trim() ||
                                null,
                            surface:
                                document
                                    .getElementById('surface')
                                    .value.trim() || null,
                            etiquettes:
                                document
                                    .getElementById('etiquettes')
                                    .value.trim() || null,
                        };
                        fetch('/contact', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN':
                                    document.querySelector(
                                        'meta[name="csrf-token"]'
                                    )?.content || '',
                            },
                            body: JSON.stringify(formData),
                        })
                            .then((res) => {
                                if (res.ok) {
                                    showModal('success', formData.name);
                                    this.reset();
                                } else {
                                    throw new Error('Erreur lors de l’envoi.');
                                }
                            })
                            .catch(() => {
                                showModal('error');
                            });
                    }
                });

            // ── Live feedback: clear error on input ─────────────────────
            ['nom', 'tel', 'email'].forEach((id) => {
                const el = document.getElementById(id);
                el.addEventListener('input', function () {
                    this.style.borderColor = '';
                    const err = document.getElementById(`${id}-error`);
                    if (err) err.textContent = '';
                });
            });
        </script>
        <script>
            // function closeMenu() {
            //     const nav = document.getElementById('main-header-nav');
            //     const button = document.querySelector(
            //         '.js-main-header__nav-trigger'
            //     );
            //     if (nav.classList.contains('main-header__nav--is-visible')) {
            //         nav.classList.remove('main-header__nav--is-visible');
            //         document.body.style.overflow = '';
            //     }
            // }
        </script>
    </body>
</html>
