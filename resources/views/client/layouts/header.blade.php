{{--<header class="header default">--}}
{{--    <div class="header__container big-container">--}}
{{--        <div class="header__logo">--}}
{{--            <a href="{{ url('/') }}">--}}
{{--                <img src="{{ url('/') }}/img/header/logo.svg" alt="Logo">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="header__nav">--}}
{{--            <div class="header__catalog header__nav-item border-button">--}}
{{--                <div class="catalog-all">--}}
{{--                    <span></span>--}}
{{--                    <span></span>--}}
{{--                    <span></span>--}}
{{--                </div>--}}
{{--                <ul class="header__courses" style="display: none">--}}
{{--                    @php--}}
{{--                        $course_categories = \App\Models\Taxonomy::where('key', 'course-category')--}}
{{--                            ->first()--}}
{{--                            ->items;--}}
{{--                    @endphp--}}
{{--                    @foreach($course_categories as $category)--}}
{{--                        <li>--}}
{{--                            <a href="{{ route('client.courses.item', ['alias' => $category->key]) }}">--}}
{{--                                {{ $category->name }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
                    {{--                    <li><a href="#">Курс 2</a></li>--}}
                    {{--                    <li><a href="#">Курс 3</a></li>--}}
                    {{--                    <li><a href="#">Курс 4</a></li>--}}
                    {{--                    <li><a href="#">Курс 5</a></li>--}}
                    {{--                    <li><a href="#">Курс 6</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            @foreach(\App\Models\Menu::orderBy('order', 'ASC')->get() as $item)--}}
{{--                @if(class_basename($item->item) == 'Page')--}}
{{--                    <div class="header__nav-item">--}}
{{--                        <a href="{{ url('/') }}/{{ $item->item->alias }}">{{ $item->item->title }}</a>--}}
{{--                    </div>--}}
{{--                @else--}}
{{--                    <div class="header__nav-item">--}}
{{--                        <a href="{{ $item->item->alias }}">{{ $item->item->link_text }}</a>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <div class="header__buttons">--}}
{{--            <div class="header__search header__buttons-item">--}}
{{--                <form action="{{ route('client.search') }}" method="get" style="display: none">--}}
{{--                    <input type="text" placeholder="Поиск" name="query" value="{{ $query ?? '' }}" required>--}}
{{--                    <button>--}}
{{--                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"--}}
{{--                             xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path--}}
{{--                                    d="M20.71 19.29L17.31 15.9C18.407 14.5025 19.0022 12.7767 19 11C19 9.41775 18.5308 7.87103 17.6518 6.55544C16.7727 5.23985 15.5233 4.21447 14.0615 3.60897C12.5997 3.00347 10.9911 2.84504 9.43928 3.15372C7.88743 3.4624 6.46197 4.22433 5.34315 5.34315C4.22433 6.46197 3.4624 7.88743 3.15372 9.43928C2.84504 10.9911 3.00347 12.5997 3.60897 14.0615C4.21447 15.5233 5.23985 16.7727 6.55544 17.6518C7.87103 18.5308 9.41775 19 11 19C12.7767 19.0022 14.5025 18.407 15.9 17.31L19.29 20.71C19.383 20.8037 19.4936 20.8781 19.6154 20.9289C19.7373 20.9797 19.868 21.0058 20 21.0058C20.132 21.0058 20.2627 20.9797 20.3846 20.9289C20.5064 20.8781 20.617 20.8037 20.71 20.71C20.8037 20.617 20.8781 20.5064 20.9289 20.3846C20.9797 20.2627 21.0058 20.132 21.0058 20C21.0058 19.868 20.9797 19.7373 20.9289 19.6154C20.8781 19.4936 20.8037 19.383 20.71 19.29ZM5 11C5 9.81332 5.3519 8.65328 6.01119 7.66658C6.67047 6.67989 7.60755 5.91085 8.7039 5.45673C9.80026 5.0026 11.0067 4.88378 12.1705 5.11529C13.3344 5.3468 14.4035 5.91825 15.2426 6.75736C16.0818 7.59648 16.6532 8.66558 16.8847 9.82946C17.1162 10.9933 16.9974 12.1997 16.5433 13.2961C16.0892 14.3925 15.3201 15.3295 14.3334 15.9888C13.3467 16.6481 12.1867 17 11 17C9.4087 17 7.88258 16.3679 6.75736 15.2426C5.63214 14.1174 5 12.5913 5 11Z"--}}
{{--                                    fill="#BECBDF"/>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--                <img class="button-search" src="{{ url('/') }}/img/header/search.svg" alt="search">--}}
{{--            </div>--}}
{{--            <div class="header__phone header__buttons-item">--}}
{{--                <a href="tel:88007006841">8 800 700-68-41</a>--}}
{{--            </div>--}}
{{--            <div class="header__language header__buttons-item">--}}
{{--                <a href="#">Ru</a>--}}
{{--            </div>--}}
{{--            @guest--}}
{{--                <div class="header__register header__buttons-item">--}}
{{--                    <a href="{{ url('/') }}/user-register">Регистрация</a>--}}
{{--                </div>--}}
{{--                <a href="{{ url('/') }}/user-login" class="header__login header__buttons-item border-button">--}}
{{--                    Войти--}}
{{--                </a>--}}
{{--            @endguest--}}
{{--            @auth--}}
{{--                <div class="header__register header__buttons-item">--}}
{{--                <a href="{{ url('/') . '/cabinet' }}" class="header__login">В кабинет</a>--}}
{{--                </div>--}}
{{--                <a href="{{ route('logout') }}" class="header__login header__buttons-item border-button">--}}
{{--                    Выйти--}}
{{--                </a>--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    </div>--}}
{{----}}
{{--</header>--}}
<header id="header" class="header">
    <div class="header__container main-container">
        <div class="header__logo">
            <a href="{{ url('/') }}">
                <img src="{{ url('/') }}/img/header/logo-desktop.svg" alt="Logo">
            </a>
        </div>
        <nav class="header__nav">
            <ul class="header__nav-list">
                <li class="header__nav-item has-child">
                    <a href="#" class="header__nav-lnk">Yolllo Products</a>
                    <ul class="child-menu-list-child">
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-lnk">Yolllo Products</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-lnk">Yolllo Products</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-lnk">Yolllo Products</a>
                        </li>
                    </ul>
                </li>
                <li class="header__nav-item">
                    <a href="#" class="header__nav-lnk">Premium</a>
                </li>
                <li class="header__nav-item">
                    <a href="#" class="header__nav-lnk">Why Yolllo</a>
                </li>
            </ul>
        </nav>
        <div class="header__language">
            @foreach(\App\Models\Language::where('enabled', true)->get() as $language)
                <a href="{{ url('/'.$language->iso) }}">{{ $language->iso }}</a>
            @endforeach
        </div>
        <div class="header__login">
            <a class="orange-button" href="{{ url('/') . '/login' }}">Sign in</a>
        </div>
    </div>
</header>
