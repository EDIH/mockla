<?php
$contents = $block->mappedByKey();
//'select-item-top'
$ids = $block->repeaters->keyBy('key');
$iterations = $block->localeIterations();
dd($block->localeIterations()->where('block_template_repeater_id', $ids['select-item-bottom']->id)->get());

?>
<section class="steps main-container">
    <div class="steps__container padding-right padding-left">
        <div class="steps__image" data-aos="fade-right" data-aos-delay="100">
            <picture>
                <source srcset="{{  url('/') . '/uploads/contents/' . $contents['image-desktop']['value'] }}" media="(min-width: 1024px)">
                <source srcset="{{  url('/') . '/uploads/contents/' . $contents['image-tablet']['value'] }}" media="(min-width: 768px)">
                <img src="{{  url('/') . '/uploads/contents/' . $contents['image-mobile']['value'] }}" alt="">
            </picture>
        </div>
        <div class="steps__form">
            <form action="" method="post">
                <h2 class="steps__title section-title">
                    {{ $contents['title']['value'] }}
                </h2>
                <label for="" class="steps__label">
                    <p class="steps__subtitle section-subtitle">{{ $contents['first-label']['value'] }}</p>
                    <select class="steps__select elem-select">
                        <option value="1000">1000$</option>
                        <option value="2000">2000$</option>
                    </select>
                </label>
                <label for="" class="steps__label" data-aos="fade-right" data-aos-delay="300">
                    <p class="steps__subtitle section-subtitle">{{ $contents['second-label']['value'] }}</p>
                    <select class="steps__select elem-select">
                        <option value="1 hour">1 hour</option>
                        <option value="2 hour">2 hour</option>
                    </select>
                </label>
                <a href="№" download class="steps__submit orange-button">{{ $contents['button-text']['value'] }}</a>
            </form>
        </div>
    </div>
</section>