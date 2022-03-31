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