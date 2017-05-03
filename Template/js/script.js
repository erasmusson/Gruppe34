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
    
        $("#campus a:contains('Campus')").parent().addClass('active');
});