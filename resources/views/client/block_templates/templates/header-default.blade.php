<?php
$contents = $block->mappedByKey();
?>
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
        @widget('localeLinks', ['page' => $page])
        <div class="header__login">
            <a class="orange-button" href="{{ $contents['button-lnk']['value'] }}">{{ $contents['button-title']['value'] }}</a>
        </div>
        <div class="header__burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="header__mobile">
            <nav class="header__mobile-nav">
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
            @widget('localeLinks', ['page' => $page])
            <div class="header__login">
                <a class="orange-button" href="{{ $contents['button-lnk']['value'] }}">{{ $contents['button-title']['value'] }}</a>
            </div>
        </div>
    </div>
</header>
{{-- TODO relocate--}}
<main class="main" id="main" role="main">
    <article>