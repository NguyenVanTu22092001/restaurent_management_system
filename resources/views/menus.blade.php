<x-app-layout>
    <div class="site-content">
        <main class="site-content__main page-id--614003">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="/images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/598490243-From-the-Hip-Photo388a.jpg"
                        style="width:100%;height: 700px;">
                </div>
                <div class="mySlides fade">
                    <img src="/images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/94911Website_Header_Images388a.jpg"
                        style="width:100%; height: 700px;">
                </div>
                <div class="mySlides fade">
                    <img src="/images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/895690096-From-the-Hip-Photo388a.jpg"
                        style="width:100%; height: 700px;">
                </div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            {{-- <span id="main-content" class="sr-only">Main content starts here, tab to start navigating</span>
            <section id="hero" aria-label="hero-section" class="hero hero--gallery hero--scrollable revealable">
                <div class="hero__content container">
                    <h1>Menus</h1>
                </div>
                <button type="button" class="hero__scroll-btn arrow-btn arrow-btn--down">
                    <span class="sr-only">Scroll Down to Content</span>
                </button>
                <div class="gallery gallery--fit">
                    <li>
                        <div role="img" aria-label="a person sitting at a table with a plate of food"
                            class="gallery__item gallery__item-fallback"
                            style="background-image: url('../../images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/44830237-From-the-Hip-Photo388a.jpg?w=1200&amp;fit=crop&amp;auto=compress,format&amp;crop=focalpoint&amp;fp-x=0.5&amp;fp-y=0.5'); background-position:
  50.0% 50.0%
;">
                        </div>
                        <span class="sr-only">Slide 1 of 6</span>
                    </li>
                    <li>
                        <div role="img" aria-label="a plate of food on a table"
                            class="gallery__item gallery__item-fallback"
                            style="background-image: url('../../images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/658200274-From-the-Hip-Photo388a.jpg?w=1200&amp;fit=crop&amp;auto=compress,format&amp;crop=focalpoint&amp;fp-x=0.5&amp;fp-y=0.5'); background-position:
  50.0% 50.0%
;">
                        </div>
                        <span class="sr-only">Slide 2 of 6</span>
                    </li>
                    <li>
                        <div role="img" aria-label="a plate of food sitting on a table"
                            class="gallery__item gallery__item-fallback"
                            style="background-image: url('../../images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/499600357-From-the-Hip-Photo388a.jpg?w=1200&amp;fit=crop&amp;auto=compress,format&amp;crop=focalpoint&amp;fp-x=0.5&amp;fp-y=0.5'); background-position:
  50.0% 50.0%
;">
                        </div>
                        <span class="sr-only">Slide 3 of 6</span>
                    </li>
                    <li>
                        <div role="img" aria-label="a woman sitting at a table with a plate of food"
                            class="gallery__item gallery__item-fallback"
                            style="background-image: url('../../images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/475290324-From-the-Hip-Photo388a.jpg?w=1200&amp;fit=crop&amp;auto=compress,format&amp;crop=focalpoint&amp;fp-x=0.5&amp;fp-y=0.5'); background-position:
  50.0% 50.0%
;">
                        </div>
                        <span class="sr-only">Slide 4 of 6</span>
                    </li>
                    <li>
                        <div role="img" aria-label="Pancakes" class="gallery__item gallery__item-fallback"
                            style="background-image: url('../../images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/337960226-From-the-Hip-Photo388a.jpg?w=1200&amp;fit=crop&amp;auto=compress,format&amp;crop=focalpoint&amp;fp-x=0.5&amp;fp-y=0.5'); background-position:
  50.0% 50.0%
;">
                        </div>
                        <span class="sr-only">Slide 5 of 6</span>
                    </li>
                    <li>
                        <div role="img" aria-label="a person holding a plate of food"
                            class="gallery__item gallery__item-fallback"
                            style="background-image: url('../../images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/533260268-From-the-Hip-Photo388a.jpg?w=1200&amp;fit=crop&amp;auto=compress,format&amp;crop=focalpoint&amp;fp-x=0.5&amp;fp-y=0.5'); background-position:
  50.0% 50.0%
;">
                        </div>
                        <span class="sr-only">Slide 6 of 6</span>
                    </li>
                </div>
                <div id="motion-elements-control-section">
                    <button class='btn fa fa-play play-motion ada-motion-toggle-btns hide-motion' data-action='play'>
                        <span class='sr-only'>hero gallery paused, press to play images slides</span>
                    </button>
                    <button class='btn fa fa-pause pause-motion ada-motion-toggle-btns' data-action='pause'>
                        <span class='sr-only'>Playing hero gallery, press to pause images slides</span>
                    </button>
                </div>
            </section> --}}
            <section id="menus" aria-label="menus-section" class="content revealable">
                <div class="tabs">
                    <ul class="tabs-nav" role="tablist">
                        <li role="presentation">
                            <a id="tab-brunch" class="btn btn-tabs active" href="#brunch" role="tab"
                                aria-controls="brunch" aria-selected="true" data-order="1" tabindex="0">Brunch</a>
                        </li>
                        <li role="presentation">
                            <a id="tab-drinks" class="btn btn-tabs" href="#drinks" role="tab" aria-controls="drinks"
                                aria-selected="false" data-order="2" tabindex="-1">Drinks</a>
                        </li>
                    </ul>
                    <div class="tabs-content">
                        <section id="brunch" class="tabs-panel tabs-panel--active tabs-panel--show" role="tabpanel"
                            aria-labelledby="tab-brunch" aria-selected="true">
                            <div class="menu-description container-sm">
                                <p>Available <strong>EVERY DAY OF THE WEEK</strong> 7am - 3pm</p>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <section class="menu-section">
                                            <div class="menu-section__header">
                                                <h2>Shareables</h2>
                                            </div>
                                            <ul>
                                                @foreach ($shareables as $shareable)
                                                    <li class="menu-item">

                                                        <p class="menu-item__heading">{{ $shareable->name }}</p>
                                                        {{--
                                                        <img src="{{ Storage::url($shareable->image) }}"
                                                            class="w-16 h-16 rounded"> --}}

                                                        <p>{{ $shareable->description }}</p>
                                                        <p class="menu-item__details menu-item__details--price">
                                                            <strong><span
                                                                    class="menu-item__currency">$</span>{{ $shareable->special_price }}</strong>
                                                            @if ($shareable->price != $shareable->special_price)
                                                                <strong><span
                                                                        class="menu-item__currency">$</span>{{ $shareable->price }}</strong>
                                                            @endif
                                                        </p>
                                                    </li>
                                                @endforeach



                                            </ul>
                                        </section>
                                        <section class="menu-section">
                                            <div class="menu-section__header">
                                                <h2>Soups and Salads</h2>
                                            </div>
                                            <ul>
                                                @foreach ($salads as $salad)
                                                    <li class="menu-item">
                                                        <p class="menu-item__heading">KALE CRUNCH SALAD</p>
                                                        <p>Napa Cabbage, Spring Greens, Kale, Scallion, Sesame Seeds,
                                                            Mandarin Oranges, Toasted Peanuts, Wanton Strips, Honey Soy
                                                            Dressing</p>
                                                        <p class="menu-item__details menu-item__details--price">
                                                            <strong><span
                                                                    class="menu-item__currency">$</span>18</strong>
                                                        </p>
                                                    </li>
                                                @endforeach


                                            </ul>
                                        </section>
                                        <section class="menu-section">
                                            <div class="menu-section__header">
                                                <h2>Sandwiches</h2>
                                                All served with french fries, breakfast potatoes or side salad. Onion
                                                Rings (+2)
                                            </div>
                                            <ul>
                                                @foreach ($sandwiches as $sandwich)
                                                    <li class="menu-item">
                                                        <p class="menu-item__heading">{{ $sandwich->name }}</p>
                                                        <p>{{ $sandwich->description }}</p>
                                                        <p class="menu-item__details menu-item__details--price">
                                                            <strong><span
                                                                    class="menu-item__currency">$</span>{{ $sandwich->special_price }}</strong>
                                                        </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </section>
                                    </div>
                                    <div class="col-md-6">
                                        <section class="menu-section">
                                            <div class="menu-section__header">
                                                <h2>Over Easy Like Sunday Morning</h2>
                                            </div>
                                            <ul>
                                                @foreach ($breakfasts as $breakfast)
                                                    <li class="menu-item">
                                                        <p class="menu-item__heading">{{ $breakfast->name }}</p>
                                                        <p>{{ $breakfast->description }}</p>
                                                        <p class="menu-item__details menu-item__details--price">
                                                            <strong><span
                                                                    class="menu-item__currency">$</span>{{ $breakfast->price }}</strong>
                                                        </p>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </section>
                                        <section class="menu-section">
                                            <div class="menu-section__header">
                                                <h2>Sides</h2>
                                            </div>
                                            <ul>
                                                @foreach ($sides as $side)
                                                    <li class="menu-item">
                                                        <p class="menu-item__heading">{{ $side->name }}</p>
                                                        <p class="menu-item__details menu-item__details--price">
                                                            <strong><span
                                                                    class="menu-item__currency">$</span>{{ $side->price }}</strong>
                                                        </p>
                                                    </li>
                                                @endforeach


                                            </ul>
                                        </section>
                                        {{-- <section class="menu-section menu-section--text">
                                            <p>*Consuming raw or undercooked meats, poultry, seafood, shellfish or eggs
                                                may increase your risk of foodborne illness, especially if you have
                                                certain medical conditions.&nbsp;</p>
                                        </section> --}}
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="drinks" class="tabs-panel" role="tabpanel" aria-labelledby="tab-drinks"
                            aria-selected="false">
                            <div class="menu-description container-sm">
                                <p>It&#39;s not Drinking - It&#39;s Brunch!</p>
                                <p><button class="btn btn-brand" data-scrollto="#draft-beers" type="button">Draft
                                        Beers</button></p>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <section class="menu-section">
                                            <div class="menu-section__header">
                                                <h2>Boozy Cocktails</h2>
                                            </div>
                                            <ul>
                                                @foreach ($cocktails as $cocktail)
                                                    <li class="menu-item">
                                                        <p class="menu-item__heading">{{ $cocktail->name }}</p>
                                                        <p>{{ $cocktail->description }}</p>
                                                        <p class="menu-item__details menu-item__details--price">
                                                            <strong><span
                                                                    class="menu-item__currency">$</span>{{ $cocktail->special_price }}</strong>
                                                        </p>
                                                    </li>
                                                @endforeach


                                            </ul>
                                        </section>
                                        <section class="menu-section">
                                            <div class="menu-section__header">
                                                <h2>Non Boozy</h2>
                                            </div>
                                            <ul>
                                                @foreach ($nonboozys as $nonboozy)
                                                    <li class="menu-item">
                                                        <p class="menu-item__heading">Mockarita</p>
                                                        <p>Lime, Lemon, Agave, Club Soda</p>
                                                        <p class="menu-item__details menu-item__details--price">
                                                            <strong><span
                                                                    class="menu-item__currency">$</span>8</strong>
                                                        </p>
                                                    </li>
                                                @endforeach


                                            </ul>
                                        </section>
                                        <section class="menu-section">
                                            <div class="menu-section__header">
                                                <h2>Boozy Shakes</h2>
                                            </div>
                                            <ul>
                                                @foreach ($boozyshakes as $boozyshake)
                                                    <li class="menu-item">
                                                        <p class="menu-item__heading" role="heading" aria-level="3">
                                                            {{ $boozyshake->name }}</p>
                                                        <p>{{ $boozyshake->description }}</p>
                                                        <p class="menu-item__details menu-item__details--price">
                                                            <strong><span
                                                                    class="menu-item__currency">$</span>{{ $boozyshake->special_price }}</strong>
                                                        </p>

                                                    </li>
                                                @endforeach
                                                <li class="menu-item">
                                                    <div class="image-thumbnail"
                                                        style="background-image: url('../../images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/72783OG_MILKSHAKE_07_1c15e.gif?w=1200&amp;fit=max&amp;auto=compress,format');background-position:none;">
                                                        <img class="sr-only" alt="">
                                                    </div>
                                                    <p class="menu-item__details menu-item__details--price">
                                                    </p>
                                                </li>

                                            </ul>
                                        </section>
                                        <section class="menu-section">
                                            <div class="menu-section__header">
                                                <h2>
                                                    <div id="draft-beers">Draft Beers</div>
                                                </h2>
                                            </div>
                                            <ul>
                                                @foreach ($beers as $beer)
                                                    <li class="menu-item">
                                                        <p class="menu-item__heading">AC Golden Brewing - "Mile HiJinx"
                                                        </p>
                                                        <p>Amber Lager (5.5% ABV)</p>
                                                        <p class="menu-item__details menu-item__details--price">
                                                            <strong><span
                                                                    class="menu-item__currency">$</span>7</strong>
                                                        </p>
                                                    </li>
                                                @endforeach


                                            </ul>
                                        </section>
                                    </div>
                                    <div class="col-md-6">
                                        <section class="menu-section">
                                            <div class="menu-section__header">
                                                <h2>Wine</h2>
                                                The OG is proud to have a wine list that is 100% female owned and/or
                                                made.
                                            </div>
                                            <ul>
                                                @foreach ($wines as $wine)
                                                    <li class="menu-item">
                                                        <p class="menu-item__heading">{{ $wine->name }}</p>
                                                        <p class="menu-item__details menu-item__details--price">
                                                            {{ $wine->price }}
                                                        </p>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </section>
                                        <section class="menu-section">
                                            <div class="menu-section__header">
                                                <h2>Cans & Bottles</h2>
                                            </div>
                                            <ul>
                                                @foreach ($cans as $can)
                                                    <li class="menu-item">
                                                        <p class="menu-item__heading">Coors Banquet</p>
                                                        <p>Lager 5%</p>
                                                        <p class="menu-item__details menu-item__details--price">
                                                            <strong><span
                                                                    class="menu-item__currency">$</span>6</strong>
                                                        </p>
                                                    </li>
                                                @endforeach


                                            </ul>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </main>
        {{-- <aside class="hospitality revealable">
            <ul class="hospitality__list">
                <li class="hospitality__item">
                    <a href="https://www.sagehospitality.com/restaurant-concepts/" target="_blank" rel="noopener">
                        <img src="../../images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/22322Hosp_logoea15.png?w=1200&amp;fit=max&amp;auto=compress,format|resize(786)"
                            class="False" loading="lazy" alt="logo" style="object-position:
  none
;">
                    </a>
                </li>
            </ul>
        </aside>
        <aside class="mobi-footer mobi-footer--sticky">
            <ul class="mobi-footer__list">
                <li class="mobi-footer__item">
                    <button type="button" class="btn btn-brand btn-block" data-popup="inline"
                        data-popup-src="#popup-reservations-form" tabindex="0" data-bb-track="button"
                        data-bb-track-on="click" data-bb-track-category="Reservations Trigger Button"
                        data-bb-track-action="Click" data-bb-track-label="Callout, Footer">Reservations</button>
                </li>
            </ul>
        </aside> --}}
    </div>
    <script type="text/javascript"
        src="{{ asset('theme-assets.getbento.com/sensei/e013a28.sensei/assets/js/foot.libs.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('theme-assets.getbento.com/sensei/e013a28.sensei/assets/js/bentobox.min.js') }}"></script>
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNH76ZF" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> --}}
    <script id="alerts-component-script" type="text/javascript"
        src="{{ asset('app-assets.getbento.com/alerts-component/54a47dd/main.js') }}"></script>
    <script type="text/javascript" src="https://app-assets.getbento.com/alerts-component/54a47dd/main.js.map"></script>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const has_diner_signup_ff = "false" === 'true'
            window.bentobox.overlayAlertComponent.init(
                'div', {
                    has_diner_signup_ff
                }
            );
            window.bentobox.bannerAlertComponent.init();
        });
    </script>
    <script type="text/javascript" src="{{ asset('app-assets.getbento.com/analytics/e87720c/bento-analytics.min.js') }}"
        data-bentoanalytics='{"account": "theogdenver-v2-copy", "theme": "sensei", "template": "menus.html", "preset": "dashi-preset", "cartType": "", "indicativeApiKey": "62e150f7-1993-460b-90ab-1bb1bd494ad7", "snowplowAppId": "customer-websites", "devMode": false, "templateNameFromMapping": "Menus"}'>
    </script> --}}
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
    <script>
        // Js to handle tab switching
        const tabBrunch = document.getElementById('tab-brunch');
        const tabDrinks = document.getElementById('tab-drinks');
        const sectionBrunch = document.getElementById('brunch');
        const sectionDrinks = document.getElementById('drinks');

        tabBrunch.addEventListener('click', function() {
            sectionBrunch.classList.add('tabs-panel--active', 'tabs-panel--show');
            sectionDrinks.classList.remove('tabs-panel--active', 'tabs-panel--show');
            tabBrunch.setAttribute('aria-selected', 'true');
            tabDrinks.setAttribute('aria-selected', 'false');
            tabDrinks.classList.remove('active');
            tabBrunch.classList.add('active');
        });

        tabDrinks.addEventListener('click', function() {
            sectionDrinks.classList.add('tabs-panel--active', 'tabs-panel--show');
            sectionBrunch.classList.remove('tabs-panel--active', 'tabs-panel--show');
            tabDrinks.setAttribute('aria-selected', 'true');
            tabBrunch.setAttribute('aria-selected', 'false');
            tabBrunch.classList.remove('active');
            tabDrinks.classList.add('active');
        });
    </script>

</x-app-layout>
