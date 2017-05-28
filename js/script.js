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
var lastHovered;
            
   
function hideClassShowId(divId) {
    if (current == divId) {
        if(oddeven == 2){
            $("#clickReturn").hide();
            valueChanged();
        }
        else if(oddeven == 1){
            oddeven = 2;
            $("#clickReturn").show();

            $(".box").toggle();
            $("#" + divId).toggle();
            $("#" + textId).toggle();
        }
    }
    else {
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


function hoverstart(hoveredDiv){
    if(oddeven != 2){
        if(lastHovered != hoveredDiv){
            $("#" + lastHovered).hide();
        }
        lastHovered = hoveredDiv;
        $("#" + lastHovered).show();
    }
}

function hoverend(){
    if(oddeven != 2){
        $("#" + lastHovered).hide();
    }
}

// Shows and hides pins from category       
function valueChanged() {
    oddeven = 1;
    $("#" + textId).hide();
    $(".box").hide();
    textId = "";
    current = "";

    checkBoxes();
}

function checkBoxes() {
    for (var i = 0; i < 7; i++) {
        if ($('#chk' + (i + 1)).is(":checked")) $('.category' + (i + 1)).show();
        else $('.category' + (i + 1)).hide();
        }
}