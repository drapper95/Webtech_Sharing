/*-------------Einbinden von #myModal--------------*/
$(document).ready(function(){
        $("#modal").click(function(){
            $('#myModal').modal({
                keyboard:true, //ESC-Taste schließt Modal
                backdrop:true, //beim Klick außerhalb des Modals, wird dieses geschlossen
                show: true //Modal wird nach dem Initialisieren angezeigt
            });

        });
});


/*----------------csdofcnsdoc----------------------*/




/*-------------Begrenzung der Zeichen--------------*/
$(document).ready(function(){

    $('#characterLeft').text('140 Zeichen übrig');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('Maximale Anzahl an Zeichen erreicht.');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');
        }
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' Zeichen übrig');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');
        }
    });
});

/*-------------eigentliches Senden der Daten-----------*/

/*function _(id) {
    return document.getElementById(id);
}

function submitForm(){
    _("btnSubmit").disabled = true;
    _("status").innerHTML = 'please wait ...';
    var formdata = new Formdata();
    formdata.append("firstname", _("name").value);
    formdata.append("lastname", _("lastname").value);
    formdata.append("email", _("email").value);
    formdata.append("mobile", _("mobile").value);
    formdata.append("subject", _("subject").value);
    formdata.append("message", _("message").value);
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "C:\\Users\\simon\\Sharing\\public\\php\\kontakt_parser.php");
    alert("test");
    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4 && ajax.status == 200){
            if(ajax.responseText == "success"){
                _("my_form").innerHTML = '<h2>Thanks '+_("firstname").value+' '+_("lastname").value+', your message has been sent.</h2>';
            } else {
                _("status").innerHTML = ajax.responseText;
                _("btnSubmit").disabled = false;
            }
        }
    }
    ajax.send(formdata);
}*/