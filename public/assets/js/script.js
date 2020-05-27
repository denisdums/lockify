$(document).ready(function(){
    //animation du loading de l'app et de la page welcome
    setTimeout(()=>{
        $('.loading').addClass("loaded");
        $('.welcome').addClass('visible')
    },2000)


    //register client
    setTimeout(()=>{
        $('.timeline_client').css('width','33%');
    },500);

    $('#register_first_next').click(function () {
        $('.part_one').css('display','none');
        $('.part_two').css('display','block');
        $('.timeline_client').css('width','66%');
    });

    $('#register_first_previous').click(function () {
        $('.part_one').css('display','block');
        $('.part_two').css('display','none');
        $('.timeline_client').css('width','33%');
    });

    $('#register_second_next').click(function () {
        $('.part_two').css('display','none');
        $('.part_three').css('display','block');
        $('.timeline_client').css('width','100%');
    });

    $('#register_second_previous').click(function () {
        $('.part_two').css('display','block');
        $('.part_three').css('display','none');
        $('.timeline_client').css('width','66%');
    });

});

//affichage de la photo
var loadFileClient = function (event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('preview');
        output.src = reader.result;
        $('#preview').css('display','block')
    };
    reader.readAsDataURL(event.target.files[0]);
};
