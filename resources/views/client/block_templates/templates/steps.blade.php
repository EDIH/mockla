<section class="steps main-container">
    <div class="steps__container padding-right padding-left">
        <div class="steps__image">
            <picture>
                <source srcset="{{ url('/') }}/img/templates/steps/img-desktop.jpg" media="(min-width: 1024px)">
                <source srcset="{{ url('/') }}/img/templates/steps/img-tablet.jpg" media="(min-width: 768px)">
                <img src="{{ url('/') }}/img/templates/steps/img-mob.jpg" alt="">
            </picture>
        </div>
        <div class="steps__form">
            <form action="" method="post">
                <h2 class="steps__title section-title">
                    Lets make our first step together!
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
                <button class="steps__submit orange-button">Get instructions</button>
            </form>
        </div>
    </div>
</section>