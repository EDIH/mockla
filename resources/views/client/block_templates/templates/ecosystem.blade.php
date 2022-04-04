<section class="ecosystem main-container">
    <div class="ecosystem__container main-container">
        <h2 class="ecosystem__title section-title">
            Yolllo Ecosystem
        </h2>
        <div class="ecosystem__list">
            @foreach($block->iterations as $item)
                @php
                    $properties = $item->mappedByKey();
                @endphp
                <div class="ecosystem__item">
                    <div class="ecosystem__icon">
                        <img src="{{ url('/') }}/img/templates/ecosystem/icon1.svg">
                    </div>
                    <h3 class="ecosystem__name">
                        {{ $properties['item-title']['value'] }}
                    </h3>
                    <p class="ecosystem__desc">
                        {{ $properties['item-content']['value'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>