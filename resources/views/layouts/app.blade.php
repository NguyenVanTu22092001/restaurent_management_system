<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title> The ORIGINAL Denver in McGregor Square</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon"
        href="{{ asset('media-cdn.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/60808fav-icon.png') }}">
    {{-- <link rel="canonical" href="index.html"> --}}
    <meta name="Revisit-After" content="5 Days">
    <meta name="Distribution" content="Global">
    <meta name="Rating" content="General">
    <meta property="og:site_name" content="The Original Denver | American Restaurant in Denver, CO">
    <meta property="og:title" content="The OG | Craveable Breakfast & Brunch">
    <meta property="og:type" content="website">
    {{-- <meta property="og:url" content="index.html"> --}}
    <meta property="og:description"
        content="The OG features the craveable breakfast and brunch you've been searching for. Located in the heart of Denver's newest playground, McGregor Square, there is always a reason to stick with The OG.">
    <meta property="og:image"
        content="{{ asset('images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/850Logo_primary1dd2.jpg') }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="The OG | Craveable Breakfast & Brunch">
    <meta name="twitter:description"
        content="The OG features the craveable breakfast and brunch you've been searching for. Located in the heart of Denver's newest playground, McGregor Square, there is always a reason to stick with The OG.">
    <meta name="twitter:image"
        content="{{ asset('images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/850Logo_primary1dd2.jpg') }}">
    <script type="text/javascript"
        src="{{ asset('theme-assets.getbento.com/sensei/e013a28.sensei/assets/js/head.min.js') }}"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Roboto:300", "Cabin:700"]
            }
        });
    </script>
    <link rel="stylesheet"
        href="http://assets-cdn-refresh.getbento.com/stylesheet/theogdenver-v2-copy/1/scss/main.7a8c4c35dec29bfa908f0214a2cc1aa2.scss" />
    <script type="text/javascript">
        Modernizr.addTest("maybemobile", function() {
            return (Modernizr.touchevents && Modernizr.mq("only screen and (max-width: 768px)")) ? true : false;
        });
    </script>
    {{-- <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            '../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2113845388670333');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=2113845388670333&amp;ev=PageView&amp;noscript=1" />
    </noscript> --}}
    {{-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WNH76ZF');
    </script>
    <script>
        ! function() {
            var t = function() {
                var t = document.createElement("script");
                t.src = "../ws.audioeye.com/ae.js", t.type = "text/javascript", t.setAttribute("async", ""), document
                    .getElementsByTagName("body")[0].appendChild(t)
            };
            "complete" !== document.readyState ? window.addEventListener ? window.addEventListener("load", t) : window
                .attachEvent && window.attachEvent("onload", t) : t()
        }();
    </script> --}}




    <style>
        body:before {
            content: "";
            display: block;
            margin: auto;
            position: fixed;
            left: -1px;
            width: calc(100% + 1px);
            height: 100%;
            top: 0;
            border-width: 69px;
            border-image: url(https://images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/1426855483border.png);
            border-image-slice: 110;
            border-style: solid;
            border-image-repeat: stretch;
            z-index: 999;
            pointer-events: none;
        }




        /* Base styles for larger screens */
        .mySlides {
            display: none;
        }

        img {
            width: 100%;
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4;
            }

            to {
                opacity: 1;
            }
        }

        /* On smaller screens, adjust image height for mobile */
        @media only screen and (max-width: 768px) {

            .prev,
            .next,
            .text {
                font-size: 14px;
                /* Adjust font size for mobile screens */
            }

            /* Adjust the height of the images for mobile screens */
            img {
                max-height: 300px;
                /* You can adjust the max height as needed */
                width: auto;
            }
        }

        .form-control-group.has-icon-right .form-control {
            padding-right: 0.8rem;
        }
    </style>
</head>

<body class="has-hero-intent has-hospitality has-mobi-footer boxes-location-template has-nav-address-bar">
    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900"> --}}
    {{-- @include('layouts.navigation')
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}}
    <!-- Page Content -->
    <main>
        <div id="cookieConsentContainer">
        </div>
        <div class="site-notifications">
        </div>
        <header class="site-header" style="margin-bottom: 150px;">
            <a href="#main-content" class="skip">Skip to main content</a>
            <div class="site-header-desktop">
                <div class="site-header-desktop-secondary">
                    <div class="container">
                        <div class="row">
                            {{-- <div class="site-location">
                                <a href="https://maps.google.com/?cid=17981716346260106472"
                                    class="site-location__address" target="_blank" rel="noopener" data-bb-track="button"
                                    data-bb-track-on="click" data-bb-track-category="Address"
                                    data-bb-track-action="Click" data-bb-track-label="Header"><span>1600 20th
                                        St,</span> <span> Denver, CO
                                        80202</span></a>
                                <a class="site-location__tel" href="tel:720.769.1414" data-bb-track="button"
                                    data-bb-track-on="click" data-bb-track-category="Phone Number"
                                    data-bb-track-action="Click" data-bb-track-label="Header">720.769.1414</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="site-header-desktop-primary" data-header-sticky>
                    <div class="container">
                        <div class="site-logo">
                            <a class="site-logo__btn" href="/">
                                <img class="site-logo__expanded"
                                    src="../images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/850Logo_primary.png"
                                    alt="The Original Denver Home" />
                                <img class="site-logo__collapsed"
                                    src="../images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/79279logosticky.png"
                                    alt="icon" />
                            </a>
                        </div>
                        <nav class="site-nav">
                            <ul class="site-nav-menu" data-menu-type="desktop">
                                <li>
                                    <a class="site-nav-link " href="/">
                                        Home</a>
                                </li>

                                <li>
                                    <a class="site-nav-link " href="/menus">Menus</a>
                                </li>
                                {{-- <li>
                                    <a class="site-nav-link " href="/location">
                                        Location</a>
                                </li>
                                <li>
                                    <a class="site-nav-link " href="/ourstory">Our Story</a>
                                </li> --}}
                                @if (Auth::check())
                                    <li>
                                        <a class="site-nav-link" href="/profile">Profile</a>
                                    </li>
                                    <li>
                                        <div
                                            style="transition: all .2s ease-in-out 0s;
                                    display: inline-block;
                                    color: #1C2C59;     padding: 0.5em 0.5em;text-decoration: none;position: relative;     touch-action: manipulation;">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="route('logout')"
                                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                                    {{ __('Log Out') }}</a>
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <li>
                                        <a class="site-nav-link " href="/login">Login</a>
                                    </li>
                                    <li>
                                        <a class="site-nav-link   " href="/register">Register</a>
                                    </li>
                                @endif
                                <li>
                                    <a class="btn btn-brand  " href="/reservation">Reservation</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="site-header-mobi" aria-label="Navigation Menu Modal">
                <div class="site-logo">
                    <a class="site-logo__btn" href="/">
                        <img src="../images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/850Logo_primary.png"
                            alt="The Original Denver Home" />
                        <img src="../images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/79279logosticky.png"
                            alt="icon" />
                    </a>
                </div>
                {{-- <div class="site-location">
                    <a href="https://maps.google.com/?cid=17981716346260106472" class="site-location__address"
                        target="_blank" rel="noopener" data-bb-track="button" data-bb-track-on="click"
                        data-bb-track-category="Address" data-bb-track-action="Click"
                        data-bb-track-label="Header"><span>1600 20th St,</span> <span> Denver, CO 80202</span></a>
                    <a class="site-location__tel" href="tel:720.769.1414" data-bb-track="button"
                        data-bb-track-on="click" data-bb-track-category="Phone Number" data-bb-track-action="Click"
                        data-bb-track-label="Header">720.769.1414</a>
                </div> --}}
                {{-- <button type="button" class="nav-toggle-btn" aria-controls="SiteHeaderMobilePanel"
                    aria-expanded="falses">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="nav-toggle-btn__line"></span>
                    <span class="nav-toggle-btn__line"></span>
                    <span class="nav-toggle-btn__line"></span>
                </button> --}}
                <div id="SiteHeaderMobilePanel" class="site-header-mobi-panel">
                    {{-- <div id="SiteHeaderMobilePanel"
                    class="site-header-mobi-panel site-header-mobi-panel--show
                    site-header-mobi-panel--open"> --}}
                    <div class="site-header-mobi-panel__inner">
                        <nav class="site-nav" aria-label="Navigation Menu">
                            <ul class="site-nav-menu" data-menu-type="mobile">
                                <li>
                                    <a class="site-nav-link " href="/">
                                        Home</a>
                                </li>

                                <li>
                                    <a class="site-nav-link " href="/menus">Menus</a>
                                </li>
                                {{-- <li>
                                    <a class="site-nav-link " href="/ourstory">Our Story</a>
                                </li>
                                <li>
                                    <a class="site-nav-link " href="/location">
                                        Location</a>
                                </li> --}}
                                {{-- <li>
                                    <a class="site-nav-link " href="happenings/index.html">Happenings</a>
                                </li> --}}
                                @if (Auth::check())
                                    <li>
                                        <a class="site-nav-link" href="/profile">Profile</a>
                                    </li>
                                    <li>
                                        <div
                                            style="transition: all .2s ease-in-out 0s;
                                        display: inline-block;
                                        color: #1C2C59;     padding: 0.5em 0.5em;text-decoration: none;position: relative;     touch-action: manipulation;">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="route('logout')"
                                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                                    {{ __('Log Out') }}</a>
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <li>
                                        <a class="site-nav-link " href="/login">Login</a>
                                    </li>
                                    <li>
                                        <a class="site-nav-link   " href="/register">Register</a>
                                    </li>
                                @endif
                                {{-- <li>
                                    <a class="site-nav-link" href="https://sagehospitality.jobs/" target="_blank"
                                        rel="noopener">Join the OG Family</a>
                                </li>
                                <li>
                                    <a class="site-nav-link"
                                        href="https://sagerestaurantconcepts.cardfoundry.com/giftcards.php?action=store"
                                        target="_blank" rel="noopener">Gift Cards</a>
                                </li>
                                <li>
                                    <a class="site-nav-link" href="https://www.sagehospitality.com/privacypolicy/"
                                        target="_blank" rel="noopener">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="site-nav-link" href="press/index.html">Press</a>
                                </li>
                                <li>
                                    <a class="site-nav-link" href="contact/index.html">Contact</a>
                                </li> --}}
                                <li>
                                    <a class="btn btn-brand  " href="/reservation">Reservation</a>
                                </li>
                                {{-- <li><button type="button" class="" data-popup="inline"
                                        data-popup-src="#popup-reservations-form" tabindex="0"
                                        data-bb-track="button" data-bb-track-on="click"
                                        data-bb-track-category="Reservations Trigger Button"
                                        data-bb-track-action="Click"
                                        data-bb-track-label="Callout, Header">Reservations</button></li>
                                <li><a href="https://signup.e2ma.net/signup/1938343/1927657/" class=""
                                        target="_blank" rel="noopener">Email Signup</a></li> --}}
                            </ul>
                        </nav>
                        <div class="site-social site-social--bordered">
                            <ul class="social-accounts">
                                <li><a href="https://www.facebook.com/The-Original-Denver-105642954670591"
                                        target="_blank" rel="noopener" data-bb-track="button"
                                        data-bb-track-on="click" data-bb-track-category="Social Icons"
                                        data-bb-track-action="Click" data-bb-track-label="Facebook, Header"><span
                                            class="fa fa-facebook" aria-hidden="true"></span><span
                                            class="sr-only">Facebook</span></a></li>
                                <li><a href="https://www.instagram.com/theogdenver/" target="_blank" rel="noopener"
                                        data-bb-track="button" data-bb-track-on="click"
                                        data-bb-track-category="Social Icons" data-bb-track-action="Click"
                                        data-bb-track-label="Instagram, Header"><span class="fa fa-instagram"
                                            aria-hidden="true"></span><span class="sr-only">Instagram</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="site-location">
                            <a href="https://maps.google.com/?cid=17981716346260106472" class="site-location__address"
                                target="_blank" rel="noopener" data-bb-track="button" data-bb-track-on="click"
                                data-bb-track-category="Address" data-bb-track-action="Click"
                                data-bb-track-label="Header"><span>1600 20th
                                    St,</span> <span> Denver, CO 80202</span></a>
                            <a class="site-location__tel" href="tel:720.769.1414" data-bb-track="button"
                                data-bb-track-on="click" data-bb-track-category="Phone Number"
                                data-bb-track-action="Click" data-bb-track-label="Header">720.769.1414</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        {{ $slot }}
        {{-- <footer>
            <div class="site-footer-desktop">
                <div class="site-footer-desktop-primary">
                    <div class="site-footer-desktop-primary__container container">
                        <ul class="social-accounts">
                            <li><a href="https://www.facebook.com/The-Original-Denver-105642954670591" target="_blank"
                                    rel="noopener" data-bb-track="button" data-bb-track-on="click"
                                    data-bb-track-category="Social Icons" data-bb-track-action="Click"
                                    data-bb-track-label="Facebook, Footer"><span class="fa fa-facebook"
                                        aria-hidden="true"></span><span class="sr-only">Facebook</span></a></li>
                            <li><a href="https://www.instagram.com/theogdenver/" target="_blank" rel="noopener"
                                    data-bb-track="button" data-bb-track-on="click"
                                    data-bb-track-category="Social Icons" data-bb-track-action="Click"
                                    data-bb-track-label="Instagram, Footer"><span class="fa fa-instagram"
                                        aria-hidden="true"></span><span class="sr-only">Instagram</span></a></li>
                        </ul>
                        <nav class="site-nav">
                            <ul class="site-nav-menu">
                                <li>
                                    <a class="site-nav-link" href="https://sagehospitality.jobs/" target="_blank"
                                        rel="noopener">Join the OG Family</a>
                                </li>
                                <li>
                                    <a class="site-nav-link"
                                        href="https://sagerestaurantconcepts.cardfoundry.com/giftcards.php?action=store"
                                        target="_blank" rel="noopener">Gift Cards</a>
                                </li>
                                <li>
                                    <a class="site-nav-link" href="https://www.sagehospitality.com/privacypolicy/"
                                        target="_blank" rel="noopener">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="site-nav-link" href="press/index.html">Press</a>
                                </li>
                                <li>
                                    <a class="site-nav-link" href="contact/index.html">Contact</a>
                                </li>
                                <li>
                                    <a class="site-nav-link"
                                        href="https://www.sagehospitalitygroup.com/privacy-policy" target="_blank"
                                        rel="noopener">Privacy Policy</a>
                                </li>
                                <li><a href="https://signup.e2ma.net/signup/1938343/1927657/" class="btn btn-brand"
                                        target="_blank" rel="noopener">Email Signup</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer> --}}
    </main>
    {{-- </div> --}}
    {{-- js to open header moble --}}
    <script>
        const button = document.querySelector('.nav-toggle-btn');
        const targetElement = document.getElementById('SiteHeaderMobilePanel');
        // Add a click event listener to the button
        button.addEventListener('click', () => {
            // Toggle the classes on the target element
            targetElement.classList.toggle('site-header-mobi-panel--show');
            targetElement.classList.toggle('site-header-mobi-panel--open');
        });
    </script>
    {{-- <script type="text/javascript"
        src="{{ asset('theme-assets.getbento.com/sensei/e013a28.sensei/assets/js/foot.libs.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('theme-assets.getbento.com/sensei/e013a28.sensei/assets/js/bentobox.min.js') }}"></script>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNH76ZF" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <script id="alerts-component-script" type="text/javascript"
        src="{{ asset('app-assets.getbento.com/alerts-component/54a47dd/main.js') }}"></script> --}}
</body>

</html>
