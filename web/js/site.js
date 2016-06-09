/**
 * Created by Pavel on 8.9.2015.
 */
// jQuery functions
( function($) {
    $(document).ready(function() {

        var body = $('body');
        body.addClass('loaded');
        body.removeClass('empty');

        $(".dropdown-button").dropdown();
        
        $(".button-collapse").sideNav();

    });
} )( jQuery );