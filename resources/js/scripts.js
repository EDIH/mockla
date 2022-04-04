$(document ).ready(function() {
    if($('.elem-select').length){
        $(function() {
            $('.elem-select').selectric();
        });
    }

    if($('.header__language').length){
        const ps = new PerfectScrollbar('.header__language-else', {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 84
        });
        $(".header__language .header__language-current").click(function() {
            $('.header__language-else').fadeToggle(300);
        });
        $(document).mouseup(function (e){ // событие клика по веб-документу
            var div = $(".header__language"); // тут указываем ID элемента
            if (!div.is(e.target) // если клик был не по нашему блоку
                && div.has(e.target).length === 0) { // и не по его дочерним элементам
                $('.header__language-else').fadeOut(300); // скрываем его
            }
        });
    }

    if($('.header__burger').length){
        $(".header__burger").click(function() {
            $('body').toggleClass('lock');
            $(this).toggleClass('active');
            $('.header__mobile').toggleClass('shoved');
        });
    }

    if($('.has-child').length){
        $(".has-child").click(function() {
            $(this).find('.child-menu-list-child').fadeToggle(300);
        });
        $(document).mouseup(function (e){ // событие клика по веб-документу
            var div = $(".has-child"); // тут указываем ID элемента
            if (!div.is(e.target) // если клик был не по нашему блоку
                && div.has(e.target).length === 0) { // и не по его дочерним элементам
                $('.child-menu-list-child').fadeOut(300); // скрываем его
            }
        });
    }

    if($('.footer').length && $(window).width() <= '768'){
        $(".footer__menu-name").click(function() {
            $(this).next('.footer__navigate-nav').find('.footer__navigate-list').fadeToggle(300);
            $(this).toggleClass('active');
        });
    }

    if($('.offer__select-current').length){
        $(".offer__select-current").click(function() {
            $(this).toggleClass('active');
            $('.offer__select-else').fadeToggle(0);
            $(".offer__select-else .select-nav-item").click(function() {
                let Elem = $(this);
                $(".tabs-elements .tabs-nav-item").removeClass("active").eq($(this).index()).addClass("active");
                $(".tabs-elements .tabs-content-item").hide().eq($(this).index()) .css("display", "flex")
                    .hide()
                    .fadeIn();
                $('.offer__select-current').empty();
                Elem.clone(true).appendTo('.offer__select-current');
                $('.offer__select-current').removeClass('active');
                $('.offer__select-else').fadeOut(0);
            }).eq(0).addClass("active");
            $(".tabs-elements .tabs-content-item").eq(0).addClass("active");
        });
    }

    if($('.tabs-elements').length){
        $(".tabs-elements .tabs-nav-item").click(function() {
            $(".tabs-elements .tabs-nav-item").removeClass("active").eq($(this).index()).addClass("active");
            $(".tabs-elements .tabs-content-item").hide().eq($(this).index()) .css("display", "flex")
                .hide()
                .fadeIn();
        }).eq(0).addClass("active");
        $(".tabs-elements .tabs-content-item").eq(0).addClass("active");
    }


    $(".faq__item-header").click( function(e) {
        $(this).closest('.faq__item').toggleClass('active');
        $(this).closest('.faq__item').find('.faq__item-content').fadeToggle(300);
    });

    AOS.init({
        // Global settings:
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });

});