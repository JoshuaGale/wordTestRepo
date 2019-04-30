/**
 * Created by LPAC006013 on 23/11/14.
 */

/*
 *  wiring Super fish to menu
 */

var sfvar = jQuery('div.menu');
var phoneSize = 768;
jQuery(document).ready(function ($) {

    jQuery(".menu-toggle").click(function () {
        jQuery(".nav-menu").toggle("slow", function () {
        });
    });
    jQuery(".menu-toggle").click(function () {
        jQuery(".main-navigation").toggle("slow", function () {
        });
    });

    var container_1 = $('.site-footer .widget-area');

    container_1.imagesLoaded(function () {
        container_1.masonry({});
    });
    //if screen size is bigger than phone's screen (Tablet,Desktop)
    if ($(document).width() >= phoneSize) {
        // enable superfish
        sfvar.superfish({
            delay: 500,
            speed: 'slow'
        });

        jQuery("#menu-main-menu").addClass('clear');
        var containerheight = jQuery("#menu-main-menu").height();
        jQuery("#menu-main-menu").children().css("height", containerheight);
    }

    $(window).resize(function () {
        if ($(document).width() >= phoneSize && !sfvar.hasClass('sf-js-enabled')) {
            sfvar.superfish({
                delay: 500,
                speed: 'slow'
            });
        }
        // phoneSize, disable superfish
        else if ($(document).width() < phoneSize) {
            jQuery(".main-navigation").hide();
            jQuery(".nav-menu").hide();
            sfvar.superfish('destroy');
        }
    });
});
