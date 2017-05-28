/*jslint browser: true*/
/*global $, jQuery, alert*/

$(document).ready(function () {
    
    
    "use strict";
    
    //variabler som blir brukt i javascripten.
    var currentZoom = 1.0,
        forrige = '',
        $body   = $(document.body),
        navHeight = $('.navbar').outerHeight(true) + 10,
        array = ['Home', 'Hjem'],
        array1 = ['Kart', 'Map'],
        array2 = ['Events', 'Eventer'],
        array3 = ['Campus', 'Campus'],
        array4 = ['Contact', 'Kontakt'],
        current,
        textId,
        oddeven,
        nothover;

    // Zooms in on map
    function zoomIn() {
        $('#map').animate({
            'zoom': currentZoom + '.5'
        });
    }

    // Reset zoom 
    function zoomReset() {
        var currentZoom = 1.0;
        $('#map').animate({
            'zoom': currentZoom
        });
    }

    // Shows or hides div when click on link where implemented.  
    function switchToggle(divId) {
        $("#" + forrige).toggle();
        $("#" + divId).toggle();
        $("#infoBar").show();
        forrige = divId;
    }

    // Shows infobar when press on meny
    function toggleInfoBar() {
        $("#infoBar").toggle();
    }
    
    // Scrolls right when click on button.
    function scrollRight() {
        $('#mapContent').scrollLeft('600');
    }
    
    /* affix the navbar after scroll below header */
    $('.navbar').affix({
        offset: {
            top: $('header').height()
        }
    });
    
    
    
    //Navigasjonsbaren blir highlighted når en er på den spesifike siden.
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
    
    // Shows and hides pins from category       
    function valueChanged() {
        var i = 0;
        oddeven = 1;
        $("#" + textId).hide();
        $(".box").hide();
        textId = "";
        current = "";
                
        for (i = 0; i < 7; i += 1) {
            if ($('#chk' + (i + 1)).is(":checked")) {
                $('.category' + (i + 1)).show();
            } else {
                $('.category' + (i + 1)).hide();
            }
        }
                
    }
    
    function hideClassShowId(divId) {
        if (current === divId) {
            if (oddeven === 2) {
                $("#clickReturn").hide();
                valueChanged();
            } else if (oddeven === 1) {
                oddeven = 2;
                $("#clickReturn").show();
                
                $(".box").toggle();
                $("#" + divId).toggle();
                $("#" + textId).toggle();
            }
            
            
            
            
        } else {
            oddeven = 2;
            $("#" + textId).hide();
            $(".box").hide();
            $("#" + divId).toggle();
            textId = divId + "txt";
            $("#" + textId).toggle();
            $("#clickReturn").show();
            current = divId;
        }
    }


    function hoverIcon(whichDiv) {
        if (oddeven !== 2) {
            if (nothover !== whichDiv) {
                $("#" + nothover).hide();
            }
            nothover = whichDiv;
                
            $("#" + nothover).show();
        }
    }
            
    function hoverend() {
        if (oddeven !== 2) {
            $("#" + nothover).hide();
        }
    }


            
});


            
   
