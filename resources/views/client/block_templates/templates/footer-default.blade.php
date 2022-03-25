    </article>
</main>
<footer class="footer">
    <div class="footer__container main-container">
        <div class="footer__brand">
            <div class="footer__logo">
                <a href="{{ url('/') }}">
                    <img src="{{ url('/') }}/img/footer/logo.svg" alt="Logo">
                </a>
            </div>
            <div class="footer__about">
                <p>Yolllo Corp is a private virtual network that has unique features and has high security.</p>
            </div>
            <div class="footer__emblema">
                <img src="{{ url('/') }}/img/footer/emblema.svg" alt="Logo">
            </div>
            <div class="footer__date">
                @php
                    echo date('Y') . " Yolllo Corp";
                @endphp
            </div>
        </div>
        <div class="footer__navigate">
            <div class="footer__products">
                <div class="footer__menu-name">
                    Products
                </div>
                <nav class="footer__navigate-nav">
                    <ul class="footer__navigate-list">
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Market</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">NFT Packaging</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Social Platform</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Social Platform</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Yolllo Social Club</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Yolllo DCP</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Yolllo CRM</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Vividly</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Social Perfomance</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Yolllo Ads</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Yolllo Rating Mark</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Yolllo Token</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Worldwide payment system</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Yolllo Membership Packages</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Streams of Revenue</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Loyalty and Referral programs</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__Info">
                <div class="footer__menu-name">
                    Info
                </div>
                <nav class="footer__navigate-nav">
                    <ul class="footer__navigate-list">
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Why Yolllo</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Privacy Policy</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Terms of Service</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Refund and Return Policy</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Contact us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__engage">
                <div class="footer__menu-name">
                    Engage
                </div>
                <nav class="footer__navigate-nav">
                    <ul class="footer__navigate-list">
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Become a country leader</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">Become a member of ecosystem</a></li>
                        <li class="footer__navigate-item"><a class="footer__navigate-link" href="#">FAQ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>
