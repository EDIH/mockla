$(document ).ready(function() {
    if($('.elem-select').length){
        $(function() {
            $('.elem-select').selectric();
        });
    }

    if($('.header__language').length){
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

});