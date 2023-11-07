<x-app-layout>
    <div class="site-content">
        <main class="site-content__main page-id--27523">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img
                        src="/images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/598490243-From-the-Hip-Photo388a.jpg">
                </div>
                <div class="mySlides fade">
                    <img
                        src="/images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/94911Website_Header_Images388a.jpg">
                </div>
                <div class="mySlides fade">
                    <img
                        src="/images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/895690096-From-the-Hip-Photo388a.jpg">
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
            <section id="intro" class="content c-intro container-sm revealable">
                <h1>Hours & Location</h1>
                <p>
                    <a href="https://maps.google.com/?cid=17981716346260106472" target="_blank" rel="noopener"
                        data-bb-track="button" data-bb-track-on="click" data-bb-track-category="Address"
                        data-bb-track-action="Click" data-bb-track-label="Location">
                        1600 20th St,<br> Denver, CO 80202
                    </a>
                    <br>
                    <a href="tel:720.769.1414" data-bb-track="button" data-bb-track-on="click"
                        data-bb-track-category="Phone Number" data-bb-track-action="Click"
                        data-bb-track-label="Location">720.769.1414</a>
                </p>
                <p><strong>OPEN EVERY DAY OF WEEK!</strong><br>7 AM - 3 PM</p>
                <p>*(Hours may vary based on Rockies home games / other events)*</p>
                <p>Nestled amidst the bustling streets of Denver, The Original is located in the center of McGregor
                    Square. Standing as a timeless ode to all things brunch. As the locals affectionately call us
                    &quot;The OG&quot;, we take immense pride in being the trailblazers of delectable breakfast and
                    lunch combinations that leave taste buds yearning for more.&nbsp;</p>
                <p>Valet parking is also available at The Rally Hotel for $15 on Wazee Street between 19th and 20th.</p>
            </section>
            {{-- <section class="gmaps__container revealable">
                <a href="https://maps.google.com/?cid=17981716346260106472" class="btn btn-brand gmaps__directions-btn"
                    target="_blank" rel="noopener" data-bb-track="button" data-bb-track-on="click"
                    data-bb-track-category="Address" data-bb-track-action="Click" data-bb-track-label="Map">Get
                    Directions</a>
                <div class="gmaps"
                    data-gmaps-static-url-mobile="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyCxtTPdJqQMOwjsbKBO3adqPGzBR1MgC5g&maptype=roadmap&format=png&scale=2&size=570x570&sensor=false&language=en&center=39.7548480000%2C-104.9958580000&zoom=17&markers=%7C39.7548480000%2C-104.9958580000&signature=cNCgZR37M2OVSGzHDZghah1flgk="
					data-gmaps-address="1600
                    20th St, Denver, CO 80202" data-gmaps-href="https://maps.google.com/?cid=17981716346260106472"
                    data-gmaps-place-id="ChIJ7WDnQ3h5bIcR6Cyr5r7ji_k" data-gmaps-lat="39.7548480000"
                    data-gmaps-lng="-104.9958580000" role="region" aria-label="Google Map"></div>
            </section> --}}
            <section class="gmaps__container revealable">
                <a href="https://maps.google.com/?cid=17981716346260106472" class="btn btn-brand gmaps__directions-btn"
                    target="_blank" rel="noopener" data-bb-track="button" data-bb-track-on="click"
                    data-bb-track-category="Address" data-bb-track-action="Click" data-bb-track-label="Map">Get
                    Directions</a>
                {{-- <img src="https://maps.googleapis.com/maps/api/staticmap?key=YOUR_API_KEY&maptype=roadmap&format=png&scale=2&size=570x570&sensor=false&language=en&center=39.7548480000%2C-104.9958580000&zoom=17&markers=%7C39.7548480000%2C-104.9958580000&signature=cNCgZR37M2OVSGzHDZghah1flgk="
                    alt="Google
                    Map" aria-label="Google Map"> --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.302536125433!2d-104.99630130000001!3d39.7553153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c797843e760ed%3A0xf98be3bee6ab2ce8!2sThe%20Original!5e0!3m2!1svi!2s!4v1697134058809!5m2!1svi!2s"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    alt="Google
                    Map" aria-label="Google Map" style="width: 100%; height: 600px;"
                    class="slideshow-container"></iframe>
            </section>
        </main>
        {{-- <aside class="hospitality revealable">
            <ul class="hospitality__list">
                <li class="hospitality__item">
                    <a href="https://www.sagehospitality.com/restaurant-concepts/" target="_blank" rel="noopener">
                        <img src="/images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/22322Hosp_logoea15.png"
                            class="False" loading="lazy" alt="logo" style="object-position: none;">
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
</x-app-layout>
