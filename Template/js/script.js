/*jslint browser: true*/
/*global $, jQuery, alert*/

$(document).ready(function () {
    
    
    "use strict";
    
   //var oddeven;
    
    var $body   = $(document.body),
        navHeight = $('.navbar').outerHeight(true) + 10,
        array = ['Home', 'Hjem'],
        array1 = ['Kart', 'Map'],
        array2 = ['Events', 'Eventer'],
        array3 = ['Campus', 'Campus'],
        array4 = ['Contact', 'Kontakt'];
    
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


var current;
    var textId;
    var oddeven;

var thiswillneverwork;
            
   
    function hideClassShowId(divId) {
        if (current == divId) {
            if(oddeven == 2){
                oddeven = 1;
            }
            else if(oddeven == 1){
                oddeven = 2;
            }
            $(".box").toggle();
            $("#" + divId).toggle();
            $("#" + textId).toggle();
            $("#clickReturn").toggle();
        }
        else {
            oddeven = 2;
            $("#" + textId).hide();
            $(".box").hide();
            $("#" + divId).toggle();
            textId = divId + "txt";
            $("#" + textId).toggle();
            $("#clickReturn").toggle();
            current = divId;
        }
    }


            function hoverthingy(whichDiv){
                if(oddeven != 2){
                if(thiswillneverwork != whichDiv){
                    $("#" + thiswillneverwork).hide();
                }
                thiswillneverwork = whichDiv;
                
                   $("#" + thiswillneverwork).show();
                }
            }
            
            function hoverend(){
                if(oddeven != 2){
                $("#" + thiswillneverwork).hide();
                }
            }