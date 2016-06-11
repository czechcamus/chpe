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

        $('.slider').slider({full_width:true});

        var options = [
            {selector: '.about', offset: 200, callback: function() {
                $('.chpe-logo').addClass('animated bounceIn');
            } },
            {selector: '.about .container', offset: 300, callback: function() {
                //noinspection JSJQueryEfficiency
                $('.who').addClass('animated bounceInLeft');
                //noinspection JSJQueryEfficiency
                $('.who').css('opacity','1');
                //noinspection JSJQueryEfficiency
                $('.why').addClass('animated bounceInLeft');
                //noinspection JSJQueryEfficiency
                $('.why').css('opacity','1');
                //noinspection JSJQueryEfficiency
                $('.what').addClass('animated bounceInLeft');
                //noinspection JSJQueryEfficiency
                $('.what').css('opacity','1');
            } },
            {selector: '.contacts', offset: 300, callback: function() {
                //noinspection JSJQueryEfficiency
                $('.form').addClass('animated bounceInRight');
                //noinspection JSJQueryEfficiency
                $('.form').css('opacity','1');
                //noinspection JSJQueryEfficiency
                $('.address').addClass('animated bounceInLeft');
                //noinspection JSJQueryEfficiency
                $('.address').css('opacity','1');
            } }
        ];
        Materialize.scrollFire(options);
        
    });
} )( jQuery );