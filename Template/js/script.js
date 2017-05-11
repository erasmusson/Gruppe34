/*jslint browser: true*/
/*global $, jQuery, alert*/

$(document).ready(function () {
    
    
    "use strict";
    
    var $body   = $(document.body),
        navHeight = $('.navbar').outerHeight(true) + 10;
    
    $('#sidebar').affix({
        offset: {
            top: 245,
            bottom: navHeight
        }
    });
    
    /* affix the navbar after scroll below header */
    $('.navbar').affix({
        offset: {
            top: $('header').height()
        }
    });
    
    var array = ['Home', 'Hjem'],
        array1 = ['Kart', 'Map'],
        array2 = ['Events', 'Eventer'],
        array3 = ['Campus', 'Campus'],
        array4 = ['Contact', 'Kontakt'];
    
    
    $(array).each(function () {
        $("#home a:contains(" + this + ")").parent().addClass('active');
    });
    
    $(array1).each(function () {
        $("#kart a:contains(" + this + ")").parent().addClass('active');
    });
    
    $(array2).each(function () {
        $("#events a:contains(" + this + ")").parent().addClass('active');
    });
    
    $(array3).each(function () {
        $("#campus a:contains(" + this + ")").parent().addClass('active');
    });
    
    $(array4).each(function () {
        $("#contact a:contains(" + this + ")").parent().addClass('active');
    });
});