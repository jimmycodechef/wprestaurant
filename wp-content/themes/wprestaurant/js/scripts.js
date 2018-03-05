/*
    The $(document).ready(); code is perfectly right but it won't work in WordPress as it is.
    In order to make it work we need to add following code at top of th script:
    $ = jQuery.noConflict();
*/

$ = jQuery.noConflict();    //Helps in working with JavaScript properly
$(document).ready(function(){
    $('.mobile-menu a').on('click', function(){
        $('nav.site-nav').toggle('slow');
    });

    /* With above code, once you minimize the window, the full width Menu will not be displayed after
    *  maximising the window. So, we need to write the following code to solve the problem.
    */

    var breakpoint = 768;   //Setting Window size breakpoint to 768px
    $(window).resize(function(){
        if($(document).width() >= breakpoint){
            $('nav.site-nav').show();
        }
        else{
            $('nav.site-nav').hide();
        }
    });
});