$(document).ready(function(){
    
    var array = ['Home', 'Hjem']
    $(array).each(function (){
        $("#home a:contains(" + this + ")").parent().addClass('active');
    });
    
    var array1 = ['Kart', 'Map']
    $(array1).each(function (){
        $("#kart a:contains(" + this + ")").parent().addClass('active');
    });
    
    var array2 = ['Events', 'Eventer']
    $(array2).each(function (){
        $("#events a:contains(" + this + ")").parent().addClass('active');
    });
    
    var array3 = ['Campus', 'Campus']
    $(array3).each(function(){
        $("#campus a:contains(" + this + ")").parent().addClass('active');
    });

    var array4 = ['Contact', 'Kontakt']
    $(array4).each(function (){
        $("#contact a:contains(" + this + ")").parent().addClass('active');
    });

});