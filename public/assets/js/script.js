$(document).ready(function(){
    //animation du loading de l'app et de la page welcome
    setTimeout(()=>{
        $('.loading').addClass("loaded");
        $('.welcome').addClass('visible')
    },2000)

});
