$(document ).ready(function() {
    if($('.elem-select').length){
        $(function() {
            $('.elem-select').selectric();
        });
    }


    $(".faq__item-header").click( function(e) {
        $(this).closest('.faq__item').toggleClass('active');
        $(this).closest('.faq__item').find('.faq__item-content').fadeToggle(300);
    });

});