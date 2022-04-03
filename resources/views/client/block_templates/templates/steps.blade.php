<?php
$contents = $block->mappedByKey();
?>
<section class="steps main-container">
    <div class="steps__container padding-right padding-left">
        <div class="steps__image">
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
                    <p class="steps__subtitle section-subtitle">How much do you want to earn per month?</p>
                    <select class="steps__select elem-select">
                        <option value="1000">1000$</option>
                        <option value="2000">2000$</option>
                    </select>
                </label>
                <label for="" class="steps__label">
                    <p class="steps__subtitle section-subtitle">How much time per day are you willing to allocate?</p>
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