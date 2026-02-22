<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

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
                                <a href="index-four.html" title="Home">
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
                                <a href="#why-pricer" title="Work">
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
                                <a
                                    href="comment-ca-marche.html"
                                    title="Stories"
                                >
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
                                <a href="cas-usage.html" title="Shop">
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
                                <a href="realisations.html" title="Contacts">
                                    <span>Réalisations</span>
                                </a>
                                <!-- <ul class="sub-menu">
                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                                <li class="menu-item"><a href="contact-2.html">Contact 2</a></li>
                                <li class="menu-item"><a href="contact-3.html">Contact 3</a></li>
                            </ul> -->
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
                                        href="https://theme.madsparrow.me/mokko/portfolio-style-1/"
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
                <section class="ms-hero hero-video d-block" id="4acfd10">
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
                                href="https://theme.madsparrow.me/mokko/portfolio-style-1/"
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
                >
                    <div
                        class="shape"
                        style="
                            background-image: url('{{ asset('assets/images/shapes/shape2.svg') }}');
                        "
                    ></div>
                    <div class="appear" style="margin-bottom: 100px">
                        <h1 class="wrapper-title">pourqoi pricer?</h1>
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
                    <div class="why-pricer-grid">
                        <!-- 01 -->
                        <div class="why-pricer-card appear">
                            <div class="card-top">
                                <div class="card-icon">
                                    <svg
                                        width="38"
                                        height="38"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13 2L3 14h8l-1 8 10-12h-8l1-8z"
                                            fill="none"
                                            stroke="#111110"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </div>
                                <div class="card-number">01</div>
                            </div>
                            <h3 class="card-title">Mise à jour instantanée</h3>
                            <p class="card-description">
                                Les changements de prix sont centralisés et
                                déployés rapidement, sans tâches manuelles
                                répétitives.
                            </p>
                        </div>

                        <!-- 02 -->
                        <div class="why-pricer-card appear">
                            <div class="card-top">
                                <div class="card-icon">
                                    <svg
                                        width="38"
                                        height="38"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                                            stroke="#111110"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <polyline
                                            points="14,2 14,8 20,8"
                                            stroke="#111110"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </div>
                                <div class="card-number">02</div>
                            </div>
                            <h3 class="card-title">Moins d'erreurs</h3>
                            <p class="card-description">
                                Réduction des écarts entre prix en rayon et prix
                                en caisse, et meilleure conformité d'affichage.
                            </p>
                        </div>

                        <!-- 03 -->
                        <div class="why-pricer-card appear">
                            <div class="card-top">
                                <div class="card-icon">
                                    <svg
                                        width="38"
                                        height="38"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <circle
                                            cx="12"
                                            cy="12"
                                            r="10"
                                            stroke="#111110"
                                            stroke-width="2"
                                        />
                                        <polyline
                                            points="12,6 12,12 16,14"
                                            stroke="#111110"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                </div>
                                <div class="card-number">03</div>
                            </div>
                            <h3 class="card-title">Gain de temps</h3>
                            <p class="card-description">
                                Fini l'impression, la découpe et le remplacement
                                manuel : vos équipes se concentrent sur le
                                client.
                            </p>
                        </div>

                        <!-- 04 -->
                        <div class="why-pricer-card appear">
                            <div class="card-top">
                                <div class="card-icon">
                                    <svg
                                        width="38"
                                        height="38"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            x="3"
                                            y="3"
                                            width="7"
                                            height="7"
                                            stroke="#111110"
                                            stroke-width="2"
                                        />
                                        <rect
                                            x="14"
                                            y="3"
                                            width="7"
                                            height="7"
                                            stroke="#111110"
                                            stroke-width="2"
                                        />
                                        <rect
                                            x="14"
                                            y="14"
                                            width="7"
                                            height="7"
                                            stroke="#111110"
                                            stroke-width="2"
                                        />
                                        <rect
                                            x="3"
                                            y="14"
                                            width="7"
                                            height="7"
                                            stroke="#111110"
                                            stroke-width="2"
                                        />
                                    </svg>
                                </div>
                                <div class="card-number">04</div>
                            </div>
                            <h3 class="card-title">Expérience client</h3>
                            <p class="card-description">
                                Informations claires, lisibles et cohérentes :
                                un magasin plus moderne et plus fluide.
                            </p>
                        </div>

                        <!-- 05 -->
                        <div class="why-pricer-card appear">
                            <div class="card-top">
                                <div class="card-icon">
                                    <svg
                                        width="38"
                                        height="38"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"
                                            stroke="#111110"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <polyline
                                            points="7.5,4.21 12,6.81 16.5,4.21"
                                            stroke="#111110"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <polyline
                                            points="7.5,19.79 7.5,14.6 3,12"
                                            stroke="#111110"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <polyline
                                            points="21,12 16.5,14.6 16.5,19.79"
                                            stroke="#111110"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <polyline
                                            points="3.27,6.96 12,12.01 20.73,6.96"
                                            stroke="#111110"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <line
                                            x1="12"
                                            y1="22.08"
                                            x2="12"
                                            y2="12"
                                            stroke="#111110"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </div>
                                <div class="card-number">05</div>
                            </div>
                            <h3 class="card-title">Solution robuste</h3>
                            <p class="card-description">
                                Conçue pour le retail : scalable, durable et
                                adaptée aux contraintes terrain (volume,
                                rotation, promo).
                            </p>
                        </div>

                        <!-- 06 -->
                        <div class="why-pricer-card appear">
                            <div class="card-top">
                                <div class="card-icon">
                                    <svg
                                        width="38"
                                        height="38"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <line
                                            x1="18"
                                            y1="20"
                                            x2="18"
                                            y2="10"
                                            stroke="#111110"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <line
                                            x1="12"
                                            y1="20"
                                            x2="12"
                                            y2="4"
                                            stroke="#111110"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <line
                                            x1="6"
                                            y1="20"
                                            x2="6"
                                            y2="14"
                                            stroke="#111110"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </div>
                                <div class="card-number">06</div>
                            </div>
                            <h3 class="card-title">Pilotage & visibilité</h3>
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
                                Over 15 years of experience
                                <br />
                                in the industry
                            </h2>
                        </div>
                    </div>
                </section>
                <!-- Cas d'usage -->
                <section
                    class="wrapper"
                    style="background-color: var(--color-bg1)"
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
                            Découvrez comment nous avons transformé les
                            opérations de nos clients grâce à des solutions
                            innovantes et adaptées à leurs besoins spécifiques.
                        </p>
                    </div>
                </section>
                <!-- contact form -->
                <section
                    class="wrapper"
                    style="background-color: var(--color-bg1)"
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
            </div>
        </main>

        <!--================= Footer Area Start Here =================-->
        <footer class="ms-footer ms-footer--template">
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
        <script></script>
        <!--================= Script End Here =================-->
        <script></script>
    </body>
</html>
