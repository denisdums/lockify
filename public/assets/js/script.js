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

    $('#register_third_next').click(function () {
        $('.part_three').css('display','none');
        $('.part_four').css('display','block');
    });

    $('#register_fourth_next').click(function () {
        $('.part_four').css('display','none');
        $('.part_five').css('display','block');
    });

    $('#register_third_previous').click(function () {
        $('.part_three').css('display','block');
        $('.part_four').css('display','none');
    });

    $('#register_five_next').click(function () {
        $('.part_five').css('display','none');
        $('.part_six').css('display','block');
    });

    $('#register_fourth_previous').click(function () {
        $('.part_four').css('display','block');
        $('.part_five').css('display','none');
    });

    $('#register_six_next').click(function () {
        $('.part_six').css('display','none');
        $('.part_seven').css('display','block');
    });

    $('#register_five_previous').click(function () {
        $('.part_five').css('display','block');
        $('.part_six').css('display','none');
    });

    $('#register_seven_next').click(function () {
        $('.part_seven').css('display','none');
        $('.part_eight').css('display','block');
    });

    $('#register_six_previous').click(function () {
        $('.part_six').css('display','block');
        $('.part_seven').css('display','none');
    });

    $('#register_eight_next').click(function () {
        $('.part_eight').css('display','none');
        $('.part_nine').css('display','block');
    });

    $('#register_seven_previous').click(function () {
        $('.part_seven').css('display','block');
        $('.part_eight').css('display','none');
    });

    $('#register_nine_next').click(function () {
        $('.part_nine').css('display','none');
        $('.part_ten').css('display','block');
    });

    $('#register_eight_previous').click(function () {
        $('.part_eight').css('display','block');
        $('.part_nine').css('display','none');
    });

    $('#register_nine_previous').click(function () {
        $('.part_nine').css('display','block');
        $('.part_ten').css('display','none');
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
