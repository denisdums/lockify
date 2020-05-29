$(document).ready(function(){




    //animation du loading de l'app et de la page welcome
    setTimeout(()=>{
        $('.loading').addClass("loaded");
        $('.welcome').addClass('visible')
    },2000);


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
        $('.part_three_ent').css('display','flex');
        $('.part_three').css('display','block');
        $('.timeline_client').css('width','100%');
        $('.timeline_entrepreneur').css('width','30%');
    });

    $('#register_second_previous').click(function () {
        $('.part_two').css('display','block');
        $('.part_three').css('display','none');
        $('.part_three_ent').css('display','none');
        $('.timeline_client').css('width','66%');
        $('.timeline_entrepreneur').css('width','20%');
    });

    $('#register_third_next').click(function () {
        $('.part_three').css('display','none');
        $('.part_three_ent').css('display','none');
        $('.part_four').css('display','flex');
        $('.timeline_entrepreneur').css('width','40%');
    });

    $('#register_fourth_next').click(function () {
        $('.part_four').css('display','none');
        $('.part_five').css('display','flex');
        $('.timeline_entrepreneur').css('width','50%');
    });

    $('#register_third_previous').click(function () {
        $('.part_three_ent').css('display','flex');
        $('.part_three').css('display','block');
        $('.part_four').css('display','none');
        $('.timeline_entrepreneur').css('width','40%');
    });

    $('#register_five_next').click(function () {
        $('.part_five').css('display','none');
        $('.part_six').css('display','flex');
        $('.timeline_entrepreneur').css('width','60%');
    });

    $('#register_fourth_previous').click(function () {
        $('.part_four').css('display','flex');
        $('.part_five').css('display','none');
        $('.timeline_entrepreneur').css('width','50%');
    });

    $('#register_six_next').click(function () {
        $('.part_six').css('display','none');
        $('.part_seven').css('display','flex');
        $('.timeline_entrepreneur').css('width','70%');
    });

    $('#register_five_previous').click(function () {
        $('.part_five').css('display','flex');
        $('.part_six').css('display','none');
        $('.timeline_entrepreneur').css('width','60%');
    });

    $('#register_seven_next').click(function () {
        $('.part_seven').css('display','none');
        $('.part_eight').css('display','flex');
        $('.timeline_entrepreneur').css('width','80%');
    });

    $('#register_six_previous').click(function () {
        $('.part_six').css('display','flex');
        $('.part_seven').css('display','none');
        $('.timeline_entrepreneur').css('width','70%');
    });

    $('#register_eight_next').click(function () {
        $('.part_eight').css('display','none');
        $('.part_nine').css('display','flex');
        $('.timeline_entrepreneur').css('width','90%');
    });

    $('#register_seven_previous').click(function () {
        $('.part_seven').css('display','flex');
        $('.part_eight').css('display','none');
        $('.timeline_entrepreneur').css('width','80%');
    });

    $('#register_nine_next').click(function () {
        $('.part_nine').css('display','none');
        $('.part_ten').css('display','flex');
        $('.timeline_entrepreneur').css('width','100%');
    });

    $('#register_eight_previous').click(function () {
        $('.part_eight').css('display','flex');
        $('.part_nine').css('display','none');
        $('.timeline_entrepreneur').css('width','80%');
    });

    $('#register_nine_previous').click(function () {
        $('.part_nine').css('display','flex');
        $('.part_ten').css('display','none');
        $('.timeline_entrepreneur').css('width','90%');
    });

    $("#monday_button").on("change", ()=>{
        if($("#monday_button").prop("checked")){
            console.log('pas checked');
            $('.horaire_monday').prop("checked", true);
            $('.horaire_monday').prop("disabled", true);
        }
        else{
            console.log('checked sqdds');
            $('.horaire_monday').prop("checked", false);
            $('.horaire_monday').prop("disabled", false);
        }

    });
    $('#monday_morn').on('change',()=>{
        if($('#monday_morn').prop("checked")){
            console.log('pas checked');

            $('.horaire_monday.morn').prop("disabled", true);
        }
        else{
            console.log('checked')
            $('.horaire_monday.morn').prop("disabled", false);
        }
    });
    $('#monday_after').on('change',()=>{
        if($('#monday_after').prop("checked")){
            console.log('pas checked');

            $('.horaire_monday.after').prop("disabled", true);
        }
        else{
            console.log('checked')
            $('.horaire_monday.after').prop("disabled", false);
        }
    });

    $("#tuesday_button").on("change", ()=>{
        if($("#tuesday_button").prop("checked")){
            console.log('pas checked');
            $('.horaire_tuesday').prop("checked", true);
            $('.horaire_tuesday').prop("disabled", true);
        }
        else{
            console.log('checked sqdds');
            $('.horaire_tuesday').prop("checked", false);
            $('.horaire_tuesday').prop("disabled", false);
        }

    });
    $('#tuesday_morn').on('change',()=>{
        if($('#tuesday_morn').prop("checked")){
            console.log('pas checked');

            $('.horaire_tuesday.morn').prop("disabled", true);
        }
        else{
            console.log('checked')
            $('.horaire_tuesday.morn').prop("disabled", false);
        }
    });
    $('#tuesday_after').on('change',()=>{
        if($('#tuesday_after').prop("checked")){
            console.log('pas checked');

            $('.horaire_tuesday.after').prop("disabled", true);
        }
        else{
            console.log('checked')
            $('.horaire_tuesday.after').prop("disabled", false);
        }
    });

    $("#wednesday_button").on("change", ()=>{
        if($("#wednesday_button").prop("checked")){
            console.log('pas checked');
            $('.horaire_wednesday').prop("checked", true);
            $('.horaire_wednesday').prop("disabled", true);
        }
        else{
            console.log('checked sqdds');
            $('.horaire_wednesday').prop("checked", false);
            $('.horaire_wednesday').prop("disabled", false);
        }

    });
    $('#wednesday_morn').on('change',()=>{
        if($('#wednesday_morn').prop("checked")){
            console.log('pas checked');

            $('.horaire_wednesday.morn').prop("disabled", true);
        }
        else{
            console.log('checked')
            $('.horaire_wednesday.morn').prop("disabled", false);
        }
    });
    $('#wednesday_after').on('change',()=>{
        if($('#wednesday_after').prop("checked")){
            console.log('pas checked');

            $('.horaire_wednesday.after').prop("disabled", true);
        }
        else{
            console.log('checked')
            $('.horaire_wednesday.after').prop("disabled", false);
        }
    });



    $("#thursday_button").on("change", ()=>{
        if($("#thursday_button").prop("checked")){
            console.log('pas checked');
            $('.horaire_thursday').prop("checked", true);
            $('.horaire_thursday').prop("disabled", true);
        }
        else{
            console.log('checked sqdds');
            $('.horaire_thursday').prop("checked", false);
            $('.horaire_thursday').prop("disabled", false);
        }

    });
    $('#thursday_morn').on('change',()=>{
        if($('#thursday_morn').prop("checked")){
            console.log('pas checked');

            $('.horaire_thursday.morn').prop("disabled", true);
        }
        else{
            console.log('checked')
            $('.horaire_thursday.morn').prop("disabled", false);
        }
    });
    $('#thursday_after').on('change',()=>{
        if($('#thursday_after').prop("checked")){
            console.log('pas checked');

            $('.horaire_thursday.after').prop("disabled", true);
        }
        else{
            console.log('checked')
            $('.horaire_thursday.after').prop("disabled", false);
        }
    });

    $("#friday_button").on("change", ()=>{
        if($("#friday_button").prop("checked")){
            console.log('pas checked');
            $('.horaire_friday').prop("checked", true);
            $('.horaire_friday').prop("disabled", true);
        }
        else{
            console.log('checked sqdds');
            $('.horaire_friday').prop("checked", false);
            $('.horaire_friday').prop("disabled", false);
        }

    });
    $('#friday_morn').on('change',()=>{
        if($('#friday_morn').prop("checked")){
            console.log('pas checked');

            $('.horaire_friday.morn').prop("disabled", true);
        }
        else{
            console.log('checked')
            $('.horaire_friday.morn').prop("disabled", false);
        }
    });
    $('#friday_after').on('change',()=>{
        if($('#friday_after').prop("checked")){
            console.log('pas checked');

            $('.horaire_friday.after').prop("disabled", true);
        }
        else{
            console.log('checked')
            $('.horaire_friday.after').prop("disabled", false);
        }
    });




    $("form.register").submit(function () {

        var this_master = $(this);

        this_master.find('input[type="checkbox"]').each( function () {
            var checkbox_this = $(this);


            if( checkbox_this.is(":checked") == true ) {
                checkbox_this.attr('value','0');
            } else {
                checkbox_this.prop('checked',true);
                //DONT' ITS JUST CHECK THE CHECKBOX TO SUBMIT FORM DATA
                checkbox_this.attr('value','1');
            }
        })
    })



$("#saturday_button").on("change", ()=>{
    if($("#saturday_button").prop("checked")){
        console.log('pas checked');
        $('.horaire_saturday').prop("checked", true);
        $('.horaire_saturday').prop("disabled", true);
    }
    else{
        console.log('checked sqdds');
        $('.horaire_saturday').prop("checked", false);
        $('.horaire_saturday').prop("disabled", false);
    }

});
$('#saturday_morn').on('change',()=>{
    if($('#saturday_morn').prop("checked")){
        console.log('pas checked');

        $('.horaire_saturday.morn').prop("disabled", true);
    }
    else{
        console.log('checked')
        $('.horaire_saturday.morn').prop("disabled", false);
    }
});
$('#saturday_after').on('change',()=>{
    if($('#saturday_after').prop("checked")){
        console.log('pas checked');

        $('.horaire_saturday.after').prop("disabled", true);
    }
    else{
        console.log('checked')
        $('.horaire_saturday.after').prop("disabled", false);
    }
});

$("#sunday_button").on("change", ()=>{
    if($("#sunday_button").prop("checked")){
        console.log('pas checked');
        $('.horaire_sunday').prop("checked", true);
        $('.horaire_sunday').prop("disabled", true);
    }
    else{
        console.log('checked sqdds');
        $('.horaire_sunday').prop("checked", false);
        $('.horaire_sunday').prop("disabled", false);
    }

});
$('#sunday_morn').on('change',()=>{
    if($('#sunday_morn').prop("checked")){
        console.log('pas checked');

        $('.horaire_sunday.morn').prop("disabled", true);
    }
    else{
        console.log('checked')
        $('.horaire_sunday.morn').prop("disabled", false);
    }
});
$('#sunday_after').on('change',()=>{
    if($('#sunday_after').prop("checked")){
        console.log('pas checked');

        $('.horaire_sunday.after').prop("disabled", true);
    }
    else{
        console.log('checked')
        $('.horaire_sunday.after').prop("disabled", false);
    }

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






});