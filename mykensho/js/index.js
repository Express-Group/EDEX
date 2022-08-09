function showPopup() {
    var id = '#dialog';

    //Get the screen height and width
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();

    //Set heigth and width to mask to fill up the whole screen
    $('#mask').css({ 'width': maskWidth, 'height': maskHeight });

    //transition effect		
    $('#mask').fadeIn(500);
    $('#mask').fadeTo("slow", 0.9);

    //Get the window height and width
    var winH = $(window).height();
    var winW = $(window).width();

    //Set the popup window to center
    $(id).css('top', winH / 2 - $(id).height() / 2);
    $(id).css('left', winW / 2 - $(id).width() / 2);

    //transition effect
    $(id).fadeIn(2000);

    //if close button is clicked
    $('.window .close').click(function(e) {
        //Cancel the link behavior
        e.preventDefault();

        $('#mask').hide();
        $('.window').hide();
    });

    //if mask is clicked
    $('#mask').click(function() {
        $(this).hide();
        $('.window').hide();
    });
}

$('#get_started').click(function() {
    showPopup();
})

$('#pop-submit').click(function() {
    var user_email = $('#pop-email').val();
    if (user_email == "") {
        alert("Please enter valid email");
    } else {
        var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (reg.test(user_email)) {
            var cookies = document.cookie.split(";");
            for (var i = 0; i < cookies.length; i++) {
                deleteCookie(cookies[i].split("=")[0]);
            }
            setCookie("trial_user_email", user_email);
            var urlData = "studentEmailId=" + user_email;
            urlData = btoa(urlData);
            window.open('http://mykensho.com/user-details.html?' + urlData, '_blank');
        } else {
            alert("Please enter valid email");
            return;
        }
    }
})