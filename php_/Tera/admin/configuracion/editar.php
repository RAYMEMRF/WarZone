<?
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].'/'.$root[1]);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.$root[1]);
include(SITE_ROOT.'/resources/includes/header.php');  ?>

        <div class="page-header">
            <h1><a href="index.php"><img style="width: 64px; height: 64px;" src="<?=HTTP_ROOT?>/resources/img/1376856941_smserver.png" class="img-rounded" title="Configuracion General" /></a>Configuracion&nbsp;<small>Ver</small></h1>
        </div>
        <form class="form-horizontal" action='index.php' method="POST" novalidate>
          <div class="form-group" >
            <label for="debug" class="col-lg-2 control-label">Modo Depuraci&oacute;n</label>
            <div class="col-lg-4">
                <input type="checkbox" name="debug" <?=(get_setting('debug')? 'checked' : '')?>/>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="form-group" >
            <label for="nosotros" class="col-lg-2 control-label">Men&uacute;s Visibles</label>
            <div class="col-lg-6">
                <label class="checkbox-inline">
                  <input type="checkbox" name="nosotros" title="Nosotros" <?=(get_setting('nosotros')? 'checked' : '')?>/> nosotros
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="servicios" title="Servicios" <?=(get_setting('servicios')? 'checked' : '')?>/> servicios
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="clientes" title="Clientes" <?=(get_setting('clientes')? 'checked' : '')?>/> clientes
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="soporte" title="Soporte" <?=(get_setting('soporte')? 'checked' : '')?>/> soporte
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="pagos" title="Pagos" <?=(get_setting('pagos')? 'checked' : '')?>/> pagos
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="blog" title="Blog" <?=(get_setting('blog')? 'checked' : '')?>/> blog
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="contacto" title="Contacto" <?=(get_setting('contacto')? 'checked' : '')?>/> contacto
                </label>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Bienvenida -->
                <label for="bienvenida" class="col-lg-2 control-label">Mensaje de Bienvenida</label>
                <div class="col-lg-4">
                    <input type="text" id="bienvenida" name="bienvenida" placeholder="Bienvenido a Infosystem, C.A. Aqui dispondra de un sin fin de oportunidades" class="form-control input-sm" value="<?=get_setting('bienvenida'); ?>" />
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Telefono -->
                <label for="soporte_tlf" class="col-lg-2 control-label">Tel&eacute;fono</label>
                <div class="col-lg-4">
                    <input type="text" id="soporte_tlf" name="soporte_tlf" placeholder="+58 2811111111" class="form-control input-sm" value="<?=get_setting('soporte_tlf'); ?>" />
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Movil -->
                <label for="soporte_movil" class="col-lg-2 control-label">M&oacute;vil</label>
                <div class="col-lg-4">
                    <input type="text" id="soporte_movil" name="soporte_movil" placeholder="+58 4261111111" class="form-control input-sm" value="<?=get_setting('soporte_movil'); ?>" />
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Email -->
                <label for="soporte_correo" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-4">
                    <input type="email" id="soporte_correo" name="soporte_correo" placeholder="midireccion@dominio.com" class="form-control input-sm" value="<?=get_setting('soporte_correo'); ?>" />
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Horario -->
                <label for="horario" class="col-lg-2 control-label">Horario</label>
                <div class="col-lg-4">
                    <input type="text" id="horario" name="horario" placeholder="Lunes a Viernes de 8:00 am a 5:00 pm " class="form-control input-sm" value="<?=get_setting('horario'); ?>" />
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Direccion -->
                <label for="direccion" class="col-lg-2 control-label">Direcci&oacute;n</label>
                <div class="col-lg-4">
                    <textarea class="form-control textarea" rows="2" name="direccion" placeholder="Calle 5 Norte. No 18A - 122 Bambusa Plaza"><?=get_setting('direccion'); ?> </textarea>
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Google Map -->
                <label for="google_map" class="col-lg-2 control-label">Google Map</label>
                <div class="col-lg-4">
                    <textarea class="form-control textarea" rows="3" name="google_map"> <?=get_setting('google_map'); ?></textarea>
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Ciudad -->
                <label for="estado" class="col-lg-2 control-label">Ciudad</label>
                <div class="col-lg-4">
                    <input type="text" id="ciudad" name="ciudad" placeholder="Barcelona" class="form-control input-sm" value="<?=get_setting('ciudad'); ?>" />
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Estado -->
                <label for="pais" class="col-lg-2 control-label">Estado</label>
                <div class="col-lg-4">
                    <input type="text" id="estado" name="estado" placeholder="Anzo&aacute;tegui" class="form-control input-sm" value="<?=get_setting('estado'); ?>" />
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-actions">
                <div class="col-lg-offset-2">
                  <button class="btn btn-primary">&nbsp;Enviar&nbsp;</button>
                  <input class="btn btn-default" type="button" onclick="location.href='<?=HTTP_ROOT?>'" value="Cancelar" />
                </div>
            </div>
        </form>
<? include(SITE_ROOT.'/resources/includes/footer.php'); ?>
