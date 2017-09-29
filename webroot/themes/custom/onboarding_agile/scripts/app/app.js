(function($) {

    // $('.mobile-menu').click(function () {
    //     $('nav').toggleClass('open');
    // });
    $(document).ready(function(){
        $('.mobile-menu').click(function(){
            $('#block-onboarding-agile-main-menu, #block-onboarding-agile-account-menu').toggleClass('open');
        });
    });

    $(document).ready(function(){
        $('.mobile-menu').click(function(){
            $(this).toggleClass('open');
        });
    });

})(jQuery);