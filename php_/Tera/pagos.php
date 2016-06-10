<? 
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST']);
include ('header.php'); 
?>
			<!-- main -->
			<div class="main">
				<h1>Registrar Pago</h1>
				<section class="cols">
					<div class="col double">
<?  
    if (isset($_POST['enviar']))
    {
        include ("admin/resources/libs/PHPMailer/class.phpmailer.php");

        $mail = new PHPMailer();
         
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = "ssl"; 
        $mail->Host = "smtp.gmail.com"; 
        $mail->Port = 465; 
         
        $mail->Username = "suniagajose@gmail.com";
        $mail->Password = "jm16827771";
         
        $mail->From     = "suniagajose@gmail.com";
        $mail->FromName = "Webmaster";
         
        $mail->Subject  = "Prueba desde Gmail";
        $mail->WordWrap = 50;
         
        $mail->AddAddress("suniagajose@gmail.com");                 // Correo destino
        $mail->IsHTML(TRUE);
         
        $mail->Body = "Mensaje de prueba";
         
        if(!$mail->Send()) {
            echo '<div class="alert isa_error"><a href="#" class="close" title="Close This">X</a>Su mensaje no pudo ser enviado!.</div>';
        } else {
            echo '<div class="alert isa_success"><a href="#" class="close">X</a>Mensaje enviado exitosamente!.</div>';
        }
    }
?>
						<p>
						Si ya realizó su pago, por favor registre los datos que se piden en la siguiente planilla para que procedamos a verificarlo.
						</p>
                        <br>
						<p>
							<form name="payment_form" id="payment_form" action="" method="POST">
								<div>Nombre / Razon Social:<strong class="red">*</strong></div>
								<input name="nombre" id="nombre" class="inp-field"  type="text">
                                <span class="validationMessage"></span>
								<br>
                                <div>Cedula de identidad / RIF:<strong class="red">*</strong></div>
                                <input name="cedula" id="cedula" class="inp-field" type="text">
                                <span class="validationMessage"></span>
                                <br>
                                <div>Email:<strong class="red">*</strong></div>
                                <input name="email" id="email" class="inp-field" type="text">
                                <span class="validationMessage"></span>
                                <br>
                                <div>Tipo de Transacci&oacute;n:</div>
                                <select name="tipo" id="tipo" class="inp-field" >
                                    <option>-- seleccione tipo --</option>
                                    <option>Transferencia</option>
                                    <option>Depósito</option>
                                </select>
                                <br>
                                <div>Fecha de Transacci&oacute;n:</div>
                                <input name="fecha" id="fecha" class="inp-field" type="text">
                                <span class="validationMessage"></span>
                                <br>
                                <div>Número de depósito(voucher) o tranferencia:<strong class="red">*</strong></div>
                                <input name="referencia" id="referencia" class="inp-field" type="text">
                                <span class="validationMessage"></span>
                                <br>
                                <div>Número de orden o concepto de pago:<strong class="red">*</strong></div>
                                <input name="concepto" id="concepto" class="inp-field" type="text">
                                <span class="validationMessage"></span>
                                <br>
								<div><strong class="red">(*) Datos requeridos</strong></div>
                                <div>
								  <input name="enviar" id="enviar" class="blue-btn" value="Enviar" type="submit">
								</div>
							</form>
						</p>
					</div>
					<div class="col last">
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
    var cedula = $('#cedula');
    var referencia = $('#referencia');
    var concepto = $('#concepto');
    var fecha = $('#fecha');

    nombre.blur(function() {
        validarRequerido(this);
    });

    email.blur(function() {
        validarRequerido(this);
        validarEmail(this);
    });

    cedula.blur(function() {
        validarRequerido(this);
    });
    
    referencia.blur(function() {
        validarRequerido(this);
    });
 
    concepto.blur(function() {
        validarRequerido(this);
    });
 
   $('#payment_form').submit(function() {

        if ( validarRequerido(nombre) &&
             validarRequerido(cedula) &&
             validarRequerido(email) &&
             validarEmail(email) &&
             validarRequerido(referencia) &&
             validarRequerido(concepto) )
        { return true; }
        return false;
   });

});
//-->
</script>
<? include ('footer.php'); ?>
