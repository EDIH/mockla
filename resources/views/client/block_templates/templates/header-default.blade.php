<?php
$contents = $block->mappedByKey();
?>
<header id="header" class="header">
    <div class="header__container main-container">
        <div class="header__logo">
            <div href="{{ url('/') }}">
                <img src="{{ url('/') }}/img/header/logo-desktop.svg" alt="Logo">
            </div>
        </div>
        <nav class="header__nav">
            <ul class="header__nav-list">
                @if($block->localeIterations->count() > 0)
                    <li class="header__nav-item has-child">
                        <div class="header__nav-lnk">{{ $var['yolllo-products'] }}</div>
                        <ul class="child-menu-list-child">
                            @foreach($block->localeIterations as $offer)
                                @php
                                    /**
                 * @var $offer \App\Models\BlockTemplateRepeaterIteration
                 */
                                        $properties = $offer->mappedByKey();
                                @endphp
{{--                                <li class="header__nav-item">--}}
{{--                                    <a href="{{ $properties['lnk-item']['value'] ?? '' }}"--}}
{{--                                       class="header__nav-lnk">{{ $properties['nav-item']['value'] ?? '' }}</a>--}}
{{--                                </li>--}}
                            @endforeach
                        </ul>
                    </li>
                @endif
                @if($contents['premium-lnk']['value'])
                    <li class="header__nav-item">
                        <a href="{{ $contents['premium-lnk']['value'] }}"
                           class="header__nav-lnk">{{ $var['premium-name'] }}</a>
                    </li>
                @endif

                @if($contents['why-yolllo-lnk']['value'])
                    <li class="header__nav-item">
                        <a href="{{ $contents['why-yolllo-lnk']['value'] }}"
                           class="header__nav-lnk">{{ $var['whu-yollio'] }}</a>
                    </li>
                @endif

            </ul>
        </nav>
        @if($contents['lang-visible']['value'] == 1)
            @widget('localeLinks', ['page' => $page])
        @endif

        <div class="header__login">
            <a class="orange-button"
               href="{{ $contents['button-lnk']['value'] }}">{{ $contents['button-title']['value'] }}</a>
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
                        <div class="header__nav-lnk">{{ $var['yolllo-products'] }}</div>
                        <ul class="child-menu-list-child">
                            @foreach($block->localeIterations as $offer)
                                @php
                                    /**
                 * @var $offer \App\Models\BlockTemplateRepeaterIteration
                 */
                                        $properties = $offer->mappedByKey();
                                @endphp
{{--                                <li class="header__nav-item">--}}
{{--                                    <a href="{{ $properties['lnk-item']['value'] ?? '' }}"--}}
{{--                                       class="header__nav-lnk">{{ $properties['nav-item']['value'] ?? '' }}</a>--}}
{{--                                </li>--}}
                            @endforeach
                        </ul>
                    </li>
                    @if($contents['premium-lnk']['value'])
                        <li class="header__nav-item">
                            <a href="{{ $contents['premium-lnk']['value'] }}"
                               class="header__nav-lnk">{{ $var['premium-name'] }}</a>
                        </li>
                    @endif

                    @if($contents['why-yolllo-lnk']['value'])
                        <li class="header__nav-item">
                            <a href="{{ $contents['why-yolllo-lnk']['value'] }}"
                               class="header__nav-lnk">{{ $var['whu-yollio'] }}</a>
                        </li>
                    @endif
                </ul>
            </nav>
            @if($contents['lang-visible']['value'] == 1)
                @widget('localeLinks', ['page' => $page])
            @endif
            <div class="header__login">
                <a class="orange-button"
                   href="{{ $contents['button-lnk']['value'] }}">{{ $contents['button-title']['value'] }}</a>
            </div>
        </div>
    </div>
</header>
{{-- TODO relocate--}}
<main class="main" id="main" role="main">
    <article>