<?php
/**
 * @var $block \App\Models\Block
 */
$contents = $block->mappedByKey();
$counter = 100;
?>
<section class="offer main-container">
    <div class="offer__cotainer main-container">
        <div class="offer__header">
            <h2 class="offer__title section-title" data-aos="fade-right" data-aos-delay="100">
                {{ $contents['title']['value'] }}
            </h2>
            <img src="{{ url('/img/templates/offer/emblema.svg') }}">
        </div>
        <div class="offer__content tabs-elements">
            <div class="offer__select">
                <div class="offer__select-current">
                    @foreach($block->iterations as $offer)
                        @php
                            /**
         * @var $offer \App\Models\BlockTemplateRepeaterIteration
         */
                                $properties = $offer->mappedByKey();
                        @endphp
                        @if ($loop->first)
                            <div class="offer__select-item">
                                <div class="offer__nav-name">
                                    {{ $properties['tab-name']['value'] ?? '' }}
                                </div>
                                <div class="offer__nav-price">
                                    {{ $properties['tab-cost']['value'] ?? '' }}
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="offer__select-else">
                    @foreach($block->iterations as $offer)
                        @php
                            /**
         * @var $offer \App\Models\BlockTemplateRepeaterIteration
         */
                                $properties = $offer->mappedByKey();
                        @endphp
                        {{--                    @dd($properties)--}}
                        <div class="offer__select-item select-nav-item">
                            <div class="offer__nav-name">
                                {{ $properties['tab-name']['value'] ?? '' }}
                            </div>
                            <div class="offer__nav-price">
                                {{ $properties['tab-cost']['value'] ?? '' }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="offer__nav tabs-nav">
                @foreach($block->iterations as $offer)
                    @dd($offer->id)
                    @php
                        /**
     * @var $offer \App\Models\BlockTemplateRepeaterIteration
     */
                            $properties = $offer->mappedByKey();
                    @endphp
                    {{--                    @dd($properties)--}}
                    <div class="offer__nav-item tabs-nav-item" data-aos="fade-right" data-aos-delay="{{ $counter }}">
                        <div class="offer__nav-name">
                            {{ $properties['tab-name']['value'] ?? '' }}
                        </div>
                        <div class="offer__nav-price">
                            {{ $properties['tab-cost']['value'] ?? '' }}
                        </div>
                    </div>
                    @php
                        $counter = $counter + 200;
                    @endphp
                @endforeach
            </div>
            <div class="offer__offer tabs-content" data-aos="fade-up" data-aos-delay="500">
                @foreach($block->iterations as $offer)
                    <div class="offer__offer-item tabs-content-item">
                        @php
                            $innerproperties = $offer->mappedByKey();
                        @endphp
                        @foreach($offer->iterations as $content)
                            @php

                                /**
         * @var $content \App\Models\BlockTemplateRepeaterIteration
         */
                                    $inner_properties = $content->mappedByKey();

                                    $class_name = $inner_properties['type-row']
                                    ->content
                                    ->attr
                                    ->setting
                                    ->decodedProperties['options_list'][$inner_properties['type-row']['value']]['value'];
                            @endphp
                            <div class="offer__offer-row {{ $class_name }}">
                                <div class="offer__offer-title">
                                    {!!  $inner_properties['content-name']['value'] ?? '' !!}
                                </div>
                                <div class="offer__offer-value">
                                    @if($class_name == "checkbox")
                                        <svg width="40" height="22" viewBox="0 0 40 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="22" rx="11" fill="#ED6A32"/>
                                            <path d="M14.1775 10.4518L18.627 14.8804L26.2822 6.88037" stroke="white"
                                                  stroke-width="3"/>
                                        </svg>
                                    @elseif($class_name == "icon")
                                        {!!  $inner_properties['content-value']['value'] ?? ''  !!}
                                        <img src="{{ url('/') }}/img/templates/offer/icon.svg" alt="">
                                    @else
                                        {{ $inner_properties['content-value']['value'] ?? '' }}
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        <div class="offer__buttons">
                            <a href="{{ $innerproperties['item-lnk-by']['value'] ?? '' }}" class="offer__button pink-button js-buy-offer">
                                Buy now for {!! $innerproperties['item-price']['value'] ?? '' !!}
                            </a>
                            <div class="offer__button offer__discount js-buy-discount">
                                Discount {!! $innerproperties['item-discount']['value'] ?? '' !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>