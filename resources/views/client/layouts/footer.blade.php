<footer class="footer">
    <a href="#main" class="to-top" style="display: none;">
        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="1" y="1" width="43" height="43" stroke="#191919" stroke-width="2"/>
            <path d="M17 17.4653L17.8921 18.3574L21.8619 14.3876V32H23.1236V14.3876L27.0934 18.3574L27.9855 17.4653L22.4927 11.9725L17 17.4653Z"
                  fill="#191919"/>
        </svg>
    </a>
    <div class="footer__container main-container">
        <div class="footer__company" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ url('/') }}" class="footer__logo">
                <img src="{{ url('/img/admin/footer-logo.svg') }}" alt="footer-logo">
            </a>
            <div class="footer__about-site">
                Kiberus — курсы для специалистов с опытом, чтобы развиваться в профессии и открывать новые возможности в карьере.
            </div>
            <div class="footer__socials">
                <a href="#">
                    <img src="{{ url('/img/admin/facebook-icon.svg') }}" alt="footer-logo">
                </a>
                <a href="#">
                    <img src="{{ url('/img/admin/instagram-icon.svg') }}" alt="footer-logo">
                </a>
                <a href="#">
                    <img src="{{ url('/img/admin/telegram-icon.svg') }}" alt="footer-logo">
                </a>
                <a href="#">
                    <img src="{{ url('/img/admin/vk-icon.svg') }}" alt="footer-logo">
                </a>
                <a href="#">
                    <img src="{{ url('/img/admin/youtube-icon.svg') }}" alt="footer-logo">
                </a>
            </div>
            <div class="footer__contacts">
                <a class="mail" href="mailto:suppotr@kiberus.com">suppotr@kiberus.com</a>
                <a class="phone" href="tel:8 800 700-68-41">8 800 700-68-41</a>
            </div>
            <div class="footer__license">
                Лицензия на образовательную деятельность № 040485 от 03 декабря 2019 года.<br>
                © Kiberus, {{ date('Y') }}
            </div>
            <div class="footer__links">
                <a href="#">Политика конфиденциальности</a>
                <a href="#">Оферта</a>
            </div>
        </div>
        <nav class="footer__menu">
            <ul class="footer__inform" data-aos="fade-up" data-aos-delay="300">
                <div class="footer__menu-label">
                    Информация
                </div>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">О компании</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Партнерам</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Экспертам</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Вакансии Нетологии</a></li>
                @php
                    $item = \App\Models\Module::where('name', 'documents')->first()->items()->first();
                    $properties = $item->props->mapWithKeys(function ($prop) {
                        return [$prop->type->key => $prop->value];
                    });
                @endphp
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="{{ route('client.documents.item', ['alias' => $item->seo->alias]) }}">Правовая информация</a></li>
                @php
                    $item = \App\Models\Module::where('name', 'intelligences')->first()->items()->first();
                    $properties = $item->props->mapWithKeys(function ($prop) {
                        return [$prop->type->key => $prop->value];
                    });
                @endphp
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="{{ route('client.intelligences.item', ['alias' => $item->seo->alias]) }}">Сведения об образовательной организации</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="{{ url('/mb_biblioteka') }}">Справочная литература по защите информации</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Контакты</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Логотипы Kiberus</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Отзывы</a></li>
            </ul>
            <ul class="footer__study" data-aos="fade-up" data-aos-delay="500">
                <li class="footer__menu-label">
                    Обучение
                </li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Cybersecurity</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">IT</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Cloud</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Data Science</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">DevSecOps</a></li>
            </ul>
            <ul class="footer__baza" data-aos="fade-up" data-aos-delay="800">
                <li class="footer__menu-label">
                    База знаний
                </li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Форум</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Блог</a></li>
                <li class="footer__menu-label footer__menu-dop">
                    Карьера
                </li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Путь в ИБ</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Карьерные пути</a></li>
                <li class="footer__menu-item"><a class="footer__menu-lnk" href="#">Вакансии</a></li>
            </ul>
        </nav>
        <div class="footer__footer" data-aos="fade-right" data-aos-delay="1000">
            <div class="footer__cards">
                <img src="{{ url('/img/admin/visa.svg') }}" alt="visa">
                <img src="{{ url('/img/admin/mastercard.svg') }}" alt="visa">
                <img src="{{ url('/img/admin/tinkof.svg') }}" alt="visa">
                <img src="{{ url('/img/admin/mir.svg') }}" alt="visa">
            </div>
            <div class="footer__underline">
                ООО «ГикБреинс», Москва, Ленинградский проспект 39, строение 80, ИНН 7726381870
            </div>
        </div>

    </div>
</footer>
