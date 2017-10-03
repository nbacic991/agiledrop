(function($) {

    $(document).ready(function(){
        $('.mobile-menu').click(function(){
            $('#block-onboarding-agile-main-menu, #block-onboarding-agile-account-menu, body').toggleClass('open');
        });
    });

    $(document).ready(function(){
        $('.mobile-menu').click(function(){
            $(this).toggleClass('open');
        });
    });




})(jQuery);