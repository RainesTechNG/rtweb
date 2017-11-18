function fn_form_error (error, fields, form){
    $.each( fields,
        function (index, value) {
            if(error.errors.hasOwnProperty(value)){
                if (value == "password"){
                    $(form).find("#" + value + "1").after('<p class="val-error">'+ error.errors[value] +'</p>');
                }
                else{
                    $(form).find("#" + value).after('<p class="val-error">'+ error.errors[value] +'</p>')
                }

            }
        }
    )
}

function fn_form_fields(form) {
    var fieldN = [];
    $(form).find(":input").each(
        function(index){
            var input = $(this);
            return fieldN.push( input.attr('name') )
        }
    );

    return fieldN;
}

function fn_redirect(uri) {
    var addr = $(location).attr('protocol') + '//' + $(location).attr('host') + '/' + uri;
    return $(location).attr('href', addr);
}

function ajax_form(form, fields, fn_, args, modal) {
    $(form).ajaxForm({
        beforeSubmit: function(){
            if ($(form).parsley().isValid()){
                $('#processing').show();
            }
            else {
                //console.log('rwerwe');
                return false;
            }
        },
        error: function(data){
            var errors = data.responseJSON;
            $('#processing').hide();
            fn_form_error(errors, fields, form)
            // Render the errors with js ...
        },
        success: function(data, textStatus, jqXHR){
            if(jqXHR.status === 200 ) {
                $('#processing').hide();
                if (args === 'data') {
                    window[fn_](data, modal);
                }
                else {
                    window[fn_](args, modal);
                }
            }
        },
    });
}

function fn_modalresp(data, modal)
{
    if (modal.length > 0)
        $(modal).modal('hide');

    $('#response').find('#title').html(data.title);
    $('#response').find('#body').html(data.body);
    $('#response').modal('show');
}

function fn_populate(data)
{
    $.each(JSON.parse(data),function(key, value)
    {
        $('#' + key).html(value);
    });
}

function readURL(e) {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        $(reader).on('load', function(e) { $('#imgAvatar').attr('src', e.target.result); });
        reader.readAsDataURL(this.files[0]);
        $('#avatar-text').hide();
        $('#imgAvatar').show();
    }
}

function fn_setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function fn_getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function fn_checkCookie(cname) {
    var username = getCookie(cname);
    if (username != "") {
        return true;
    } else {
        return false;
    }
}