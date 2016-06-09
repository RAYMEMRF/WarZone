<?php error_reporting(E_STRICT); ?>
<?
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST']);
include ('header.php'); 
?>
			<!-- main -->
			<div class="main">
				<h1>Cont&aacute;ctenos</h1>
				<section class="cols">
					<div class="col double">
<?
    if (isset($_POST['enviar']))
    {
        include ('admin/resources/libs/PHPMailer/class.phpmailer.php');
    
        $mail = new PHPMailer();
         
        $mail->IsSMTP(); 
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPDebug  = 2;     // enables SMTP debug information (for testing)
                                   // 1 = errors and messages
                                   // 2 = messages only
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";
        $mail->Host       = "smtp.gmail.com"; // sets the SMTP server
        $mail->Port = "465";                    // set the SMTP port for the GMAIL server
        
        $mail->Username = "suniagajose@gmail.com";
        $mail->Password = "jm16827771";
         
        $mail->From     = "dilcia@grupo-tera.com";
        $mail->FromName = "Webmaster";
         
        $mail->Subject  = "Prueba desde Gmail";
        $mail->WordWrap = 50;
         
        $mail->AddAddress("suniagajose@gmail.com");                 // Correo destino
        $mail->IsHTML(TRUE);
         
        $mail->Body = "Mensaje de prueba";
         
        if(!$mail->Send()) {
            echo $mail->ErrorInfo;
            echo '<div class="alert isa_error"><a href="#" class="close" title="Close This">X</a>Su mensaje no pudo ser enviado!.</div>';
        } else {
            echo '<div class="alert isa_success"><a href="#" class="close" title="Close This">X</a>Mensaje enviado exitosamente!.</div>';
        }
    }
?>
						<p>
						Si desea información adicional sobre nuestros servicios y productos por favor complete el siguiente formulario que muy pronto le resolveremos cualquier inquietud.
						</p>
						<p>
							<form name="contact_form" id="contact_form" action="" method="POST">
								<div>Nombre:<strong class="red">*</strong></div>
								<input name="nombre" id="nombre" class="inp-field"  type="text">
                                <span class="validationMessage"></span>
								<br>
								<div>Email:<strong class="red">*</strong></div>
								<input name="email" id="email" class="inp-field" type="text">
                                <span class="validationMessage"></span>
								<br>
								<div>Descripción detallada del problema:<strong class="red">*</strong></div>
								<textarea name="mensaje" id="mensaje" rows="10" class="inp-text"></textarea>
                                <span class="validationMessage"></span>
								<div><strong class="red">(*) Datos requeridos</strong></div>
                                <div>
								  <input name="enviar" id="enviar" class="blue-btn" value="Enviar" type="submit">
								</div>
							</form>
						</p>
					</div>
					<div class="col last">
						<h3><strong>Oficina</strong></h3>
						<p>
							<strong>Dirección.</strong> <? $direccion = split(" ",get_setting('direccion')); 
							$suma = 0;
							$salida = '';
							foreach($direccion as $d)
							{
								if($suma < 27) 
								{
									$suma += strlen($d).'<br>';
									$salida .= $d.' ';
								}
								else
								{	$salida .= '<br>'.$d.' ';
									$suma = 0;
								}
							}
							echo $salida;
							?><br>
							<strong>Tel.</strong> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<?=get_setting('soporte_tlf'); ?><br>
							<strong>Móvil.</strong> &nbsp;&nbsp; &nbsp;<?=get_setting('soporte_movil'); ?><br>
							<strong>E-mail.</strong>&nbsp;&nbsp; &nbsp;<a href="mailto:<?=get_setting('soporte_correo'); ?>"><?=get_setting('soporte_correo'); ?></a> <br>
							<?=get_setting('ciudad'); ?>, <?=get_setting('estado'); ?> - Venezuela
						</p>
						<br>
						<h3><strong>Mapa</strong></h3>
						<?=html_entity_decode(get_setting('google_map')); ?>
					</div>
				</section>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
<script type="text/javascript">
// Form validation code will come here.

function activarError(element,mensaje)
{
    $(element).removeClass('has-success');
    $(element).addClass('has-error');
    $(element).next().text( mensaje );
    $(element).next().removeClass( "green" );
    $(element).next().addClass( "red" );
}
function removerError(element)
{
    if($(element).hasClass('has-error'))
    {   
        $(element).removeClass('has-error');
        $(element).addClass('has-success');
        $(element).next().text( "" );
        $(element).next().removeClass( "red" );
        $(element).next().addClass( "green" );
    }
}
function validarRequerido(element)
{
    if($(element).val()=="")
    { activarError(element,"este campo es requerido"); return false; }
    else
    {  removerError(element); return true; }
}
function validarEmail(element) 
{   
    var re  = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/; 
    if (!re.test($(element).val())) 
    {  activarError(element,"formato de email inválido"); return false; }
    else
    {  removerError(element); return true; }
}

$(document).ready(function() {
 
    $('.alert a.close').click(function() {
        $('.alert').hide();
    });
    
    var nombre = $('#nombre');
    var email = $('#email');
    var mensaje = $('#mensaje');

    nombre.blur(function() {
        validarRequerido(this);
    });

    email.blur(function() {
        validarRequerido(this);
        validarEmail(this);
    });

    mensaje.blur(function() {
        validarRequerido(this);
    });
 
   $('#contact_form').submit(function() {

        if ( validarRequerido(nombre) &&
             validarRequerido(email) &&
             validarEmail(email) &&
             validarRequerido(mensaje) )
        { return true; }
        return false;
   });

});
//-->
</script>
<? include ('footer.php'); ?>
