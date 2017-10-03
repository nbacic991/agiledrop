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

    /* Mobile device detection
     * And changing header background
     */

    $(document).ready(function () {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
            // Take the user to a different screen here.
            $('.highlighted').toggleClass('phone');
        }
        else {
            $('.highlighted').toggleClass('no-phone');
        }
    });



})(jQuery);