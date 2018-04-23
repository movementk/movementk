$(function(){
    // slick slider
    $(document).ready(function(){
        $('.slick-slider').slick({
            dots: false,
            arrows: false,
            fade: true,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 5000,
            pauseOnHover: false,
            pauseOnFocus: false
        });
        // progress bar
        $(".progressbar").animate({"width":"100%"}, 5000, function(){ });
    });

    // progress bar swipe
    $('.slick-slider').on('beforeChange swipe', function(event, slick, currentSlide, nextSlide){
        $(".progressbar").stop().css({"width":"0px"});
    });
    $('.slick-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $(".progressbar").animate({"width":"100%"}, 5000, function(){ });
    });

    // portfolio 관련
    $(window).on('scroll', function() {
        $('.item a').each(function(index, elem) {
            if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
                $(elem).addClass('on');
            }
        });
    });

    // slick slider intro 관련 이벤트
    setInterval(function(){
        $(".jumbo-intro .details").addClass("action");
    }, 1000);
});