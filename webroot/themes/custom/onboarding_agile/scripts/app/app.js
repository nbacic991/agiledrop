(function($) {

    // $('.mobile-menu').click(function () {
    //     $('nav').toggleClass('open');
    // });
    $(document).ready(function(){
        $('.mobile-menu').click(function(){
            $('nav').toggleClass('open');
        });
    });

    $(document).ready(function(){
        $('.mobile-menu').click(function(){
            $(this).toggleClass('open');
        });
    });

})(jQuery);