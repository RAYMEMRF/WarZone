function mensaje(type,texto)
{
        var icon = '';
        switch(type)
        {
            case "danger":
            icon = '<span class="glyphicon glyphicon-remove"></span>';
            break;
            case "success":
            icon = '<span class="glyphicon glyphicon-ok"></span>';
            break;
            case "warning":
            icon = '<span class="glyphicon glyphicon-warning-sign"></span>';
            break;
            case "info":
            icon = '<span class="glyphicon glyphicon-info-sign"></span>';
            break;
        }
        return '<div class="alert alert-'+type+' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+icon+'&nbsp;&nbsp;'+texto+'</div>';
}

$('#login-form').submit(function(){ 
    var frm = $(this);
    $.ajax({ 
        type: frm.attr('method'),
        url:'resources/ajax/login_validar.php',
        data:frm.serialize(),
        dataType:'json',
        success: function (html) 
                 {  
                    switch(html.check) 
                    {
                        case 0:
                            $("#mensaje").html( mensaje('warning','Este usuario se encuentra inactivo') );
                            break;
                        case 1:
                            $( "#mensaje" ).html( mensaje('success','Bienvenido, espere unos segundos...') );
                            setTimeout(function(){document.location='index.php'},4000);
                            break;
                        case 2:
                            //~ div_clase.addClass("error");
                            //~ $('#usuario').addClass('input-validation-error');
                            //~ $('#clave').addClass('input-validation-error');
                            //~ div_mensaje.html('Combinaci&oacute;n usuario / contrase&ntilde;a inv&aacute;lida!')
                            //~ $("#mensaje").html(mensaje('success','Bienvenido'));
                            $( "#mensaje" ).html( mensaje('danger','Usuario y/o contraseña invalida!') );
                            break;
                        default:
                            $("#mensaje").html( mensaje('warning','Contacte a su administrador!') );
                            break;
                    }     
                }
    });
    return false;
});
