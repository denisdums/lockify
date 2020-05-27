$(document).ready(function(){
    //animation du loading de l'app et de la page welcome
    setTimeout(()=>{
        $('.loading').addClass("loaded");
        $('.welcome').addClass('visible')
    },2000)


    //register
    setTimeout(()=>{
        $('.timeline_client').css('width','33%');
    },500);

    setTimeout(()=>{
        $('.timeline_entrepreneur').css('width','10%');
    },500);

    $('#register_first_next').click(function () {
        $('.part_one').css('display','none');
        $('.part_two').css('display','block');
        $('.timeline_client').css('width','66%');
        $('.timeline_entrepreneur').css('width','20%');
    });

    $('#register_first_previous').click(function () {
        $('.part_one').css('display','block');
        $('.part_two').css('display','none');
        $('.timeline_client').css('width','33%');
        $('.timeline_entrepreneur').css('width','10%');
    });

    $('#register_second_next').click(function () {
        $('.part_two').css('display','none');
        $('.part_three').css('display','block');
        $('.timeline_client').css('width','100%');
        $('.timeline_entrepreneur').css('width','30%');
    });

    $('#register_second_previous').click(function () {
        $('.part_two').css('display','block');
        $('.part_three').css('display','none');
        $('.timeline_client').css('width','66%');
        $('.timeline_entrepreneur').css('width','20%');
    });

    $('#register_third_next').click(function () {
        $('.part_three').css('display','none');
        $('.part_four').css('display','block');
        $('.timeline_entrepreneur').css('width','40%');
    });

    $('#register_fourth_next').click(function () {
        $('.part_four').css('display','none');
        $('.part_five').css('display','block');
        $('.timeline_entrepreneur').css('width','50%');
    });

    $('#register_third_previous').click(function () {
        $('.part_three').css('display','block');
        $('.part_four').css('display','none');
        $('.timeline_entrepreneur').css('width','40%');
    });

    $('#register_five_next').click(function () {
        $('.part_five').css('display','none');
        $('.part_six').css('display','block');
        $('.timeline_entrepreneur').css('width','60%');
    });

    $('#register_fourth_previous').click(function () {
        $('.part_four').css('display','block');
        $('.part_five').css('display','none');
        $('.timeline_entrepreneur').css('width','50%');
    });

    $('#register_six_next').click(function () {
        $('.part_six').css('display','none');
        $('.part_seven').css('display','block');
        $('.timeline_entrepreneur').css('width','70%');
    });

    $('#register_five_previous').click(function () {
        $('.part_five').css('display','block');
        $('.part_six').css('display','none');
        $('.timeline_entrepreneur').css('width','60%');
    });

    $('#register_seven_next').click(function () {
        $('.part_seven').css('display','none');
        $('.part_eight').css('display','block');
        $('.timeline_entrepreneur').css('width','80%');
    });

    $('#register_six_previous').click(function () {
        $('.part_six').css('display','block');
        $('.part_seven').css('display','none')
        $('.timeline_entrepreneur').css('width','70%');
    });

    $('#register_eight_next').click(function () {
        $('.part_eight').css('display','none');
        $('.part_nine').css('display','block');
        $('.timeline_entrepreneur').css('width','90%');
    });

    $('#register_seven_previous').click(function () {
        $('.part_seven').css('display','block');
        $('.part_eight').css('display','none');
        $('.timeline_entrepreneur').css('width','80%');
    });

    $('#register_nine_next').click(function () {
        $('.part_nine').css('display','none');
        $('.part_ten').css('display','block');
        $('.timeline_entrepreneur').css('width','100%');
    });

    $('#register_eight_previous').click(function () {
        $('.part_eight').css('display','block');
        $('.part_nine').css('display','none');
        $('.timeline_entrepreneur').css('width','80%');
    });

    $('#register_nine_previous').click(function () {
        $('.part_nine').css('display','block');
        $('.part_ten').css('display','none');
        $('.timeline_entrepreneur').css('width','90%');
    });

});



//affichage de la photo
var myInput = document.getElementById('myFileInput');

function sendPic() {
    var file = myInput.files[0];

    // Send file here either by adding it to a `FormData` object
    // and sending that via XHR, or by simply passing the file into
    // the `send` method of an XHR instance.
}

myInput.addEventListener('change', sendPic, false);


//acces files appli
