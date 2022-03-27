<?php
$contents = $block->mappedByKey();
//dd($contents);
?>
<section class="banner">
    <div class="banner__container padding-left">
        <div class="banner__left">
            <h2 class="banner__title">
                {{ $contents['title']['value'] }}
            </h2>
            <h3 class="banner__subtitle">
{{--                {{ $contents['subtitle']['value'] }}--}}
                Upgrade your being with
                Yolllo Business
            </h3>
            <a href="#" class="pink-button">
{{--                {{ $contents['button-name']['value'] }}--}}
                Learn more
                <svg width="33" height="17" viewBox="0 0 33 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.5H30" stroke="white" stroke-width="2.5"/>
                    <path d="M24 1.5L31 8.5L24 15.5" stroke="white" stroke-width="2.5"/>
                </svg>
            </a>
        </div>
        <div class="banner__right">
            <img src="{{url('/'). '/img/templates/banner/img.jpg'}}" alt="sdfsdf">
        </div>
    </div>
</section>