<? 
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST']);
include ('header.php'); ?>
			<!-- main -->
			<div class="main">
				<h1>Contacto de Soporte T&eacute;cnico</h1>
				<section class="cols">
					<div class="col double">
						<p>Escoger una de las siguientes opciones para una rápida solución a su problema:<br></p>
						<p>
							- Llamar al fijo <?=get_setting('soporte_tlf')?> al móvil <?=get_setting('soporte_movil')?> en horario comprendido: <?=get_setting('horario')?> <br>
							- Ver el status de mi reparaci&oacute;n en vivo ( <a href="#"><span id="verchat">Consultar RMA</span></a> ).<br>
							- Enviar un correo a la direcci&oacute;n <a href="mailto:<?=get_setting('soporte_correo')?>"><?=get_setting('soporte_correo')?></a>.<br>
							- Enviar un ticket desde el siguiente formulario:<br>
						</p>
						<br>
						<p>
							<form action="" method="POST">
								<div>Nombre:<strong class="red">*</strong></div>
								<input name="nombre" id="nombre" class="inp-field" type="text">
								<br>
								<div>Email:<strong class="red">*</strong></div>
								<input name="email" id="email" class="inp-field" type="text">
								<br>
								<div>Telefono:<strong class="red">*</strong></div>
								<input name="telefono" id="telefono" class="inp-field" type="text">
								<br>
								<div>Empresa:<strong class="red">*</strong></div>
								<input name="telefono" id="telefono" class="inp-field" type="text">
								<br>
								<div>Prioridad:</div>
								<input name="prioridad" id="prioridad" class="inp-field" value="Alta" type="radio">Alta <input name="ciudad" id="radio" value="Media" checked="checked" type="radio">Media <input name="ciudad" id="radio" value="Baja" type="radio">Baja<br>
								<br>
								<div><strong class="red">* Datos requeridos</strong></div>
								<div>Descripción detallada del problema:<strong class="red">*</strong></div>
								<textarea name="mensaje" id="mensaje" rows="10" class="inp-text"></textarea>
								<div>
								  <input name="enviar" id="enviar" class="blue-btn" value="Enviar" type="submit">
								</div>
							</form>
						</p>
					</div>
					<div class="col last">
					<?=get_docs('twitter');?>
					</div>
					<div class="cl">&nbsp;</div>
				</section>

<? include ('footer.php'); ?>
