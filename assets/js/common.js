$(function(){
    // aside 관련 
    $(document).on('click','#header .btn-nav', function(){
        $('body').addClass('opened');
        $(this).addClass('btn-close');
    });
    $(document).on('click','#header .btn-close', function(){
        $('body').removeClass('opened');
        $(this).removeClass('btn-close');
    });
    
    // header scroll
    $(window).on('scroll', function() {
        // header scroll
        if ($(this).scrollTop() > 0) {
            $('#header').addClass('active');
        } else {
            $('#header').removeClass('active');
        }
    });
});

