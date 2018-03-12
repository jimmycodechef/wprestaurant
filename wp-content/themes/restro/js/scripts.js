//Code below Line 3rd is correct but in WordPress, we can make jQuery work by assigning
// jQuery.noConflict Mode to $
$ = jQuery.noConflict();

$(document).ready(function(){
    $('.mobile-menu a').on('click', function(){
        $('nav.site-nav').toggle('slow');
    });

    var breakpoint = 768;
    $(window).resize(function(){
        //console.log("You're resizing the window");
        if($(document).width() >= breakpoint){
            $('nav.site-nav').show();
        }
        else{
            $('nav.site-nav').hide();
        }
    });

});