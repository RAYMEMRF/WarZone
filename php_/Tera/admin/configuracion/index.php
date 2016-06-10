<?
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].'/'.$root[1]);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.$root[1]);
include(SITE_ROOT.'/resources/includes/header.php');  ?>
        <div class="page-header">
            <h1><a href="index.php"><img style="width: 64px; height: 64px;" src="<?=HTTP_ROOT?>/resources/img/1376856941_smserver.png" class="img-rounded" title="Configuracion General" /></a>Configuracion&nbsp;<small>Ver</small></h1>
        </div>
        <form class="form-horizontal" action='editar.php' method="POST" novalidate>
<?
        if (!empty($_POST))
        {
            $table = 'configuracion';
            $update = "bienvenida='".$_POST['bienvenida']."',soporte_tlf='".$_POST['soporte_tlf']."',debug='".isset($_POST['debug'])."',nosotros='".isset($_POST['nosotros'])."',servicios='".isset($_POST['servicios'])."',productos='".isset($_POST['productos'])."',clientes='".isset($_POST['clientes'])."',soporte='".isset($_POST['soporte'])."',pagos='".isset($_POST['pagos'])."',blog='".isset($_POST['blog'])."',contacto='".isset($_POST['contacto'])."',soporte_movil='".$_POST['soporte_movil']."',soporte_correo='".$_POST['soporte_correo']."',horario='".$_POST['horario']."',direccion='".$_POST['direccion']."',google_map='".htmlentities($_POST['google_map'])."',ciudad='".$_POST['ciudad']."',estado='".$_POST['estado']."'";
            $sql = "UPDATE ".$table." SET ".$update;
                
            if(query($sql))
            {   
                echo mensaje("El registro fue actualizado existosamente!","success");
            }
            else
            {
                echo mensaje("Disculpe, ha ocurrido un error!");
            }
        }
?>          <div class="form-group" >
            <label for="debug" class="col-lg-2 control-label">Modo Depuraci&oacute;n</label>
            <div class="col-lg-4">
                <input type="checkbox" name="debug" disabled="disabled" <?=(get_setting('debug')? 'checked' : '')?>/>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="form-group" >
            <label for="nosotros" class="col-lg-2 control-label">Men&uacute;s Visibles</label>
            <div class="col-lg-6">
                <label class="checkbox-inline">
                  <input type="checkbox" name="nosotros" title="Nosotros" disabled="disabled" <?=(get_setting('nosotros')? 'checked' : '')?>/> nosotros
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="servicios" title="Servicios" disabled="disabled" <?=(get_setting('servicios')? 'checked' : '')?>/> servicios
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="clientes" title="Clientes" disabled="disabled" <?=(get_setting('clientes')? 'checked' : '')?>/> clientes
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="soporte" title="Soporte" disabled="disabled" <?=(get_setting('soporte')? 'checked' : '')?>/> soporte
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="pagos" title="Pagos" disabled="disabled" <?=(get_setting('pagos')? 'checked' : '')?>/> pagos
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="blog" title="Blog" disabled="disabled" <?=(get_setting('blog')? 'checked' : '')?>/> blog
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="contacto" title="Contacto" disabled="disabled" <?=(get_setting('contacto')? 'checked' : '')?>/> contacto
                </label>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Bienvenida -->
                <label for="bienvenida" class="col-lg-2 control-label">Mensaje de Bienvenida</label>
                <div class="col-lg-4">
                    <input type="text" id="bienvenida" name="bienvenida" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_setting('bienvenida'); ?>" />
                </div>
                <div class="clearfix"></div>
          </div>          
          <div class="form-group">
            <!-- Telefono -->
                <label for="soporte_tlf" class="col-lg-2 control-label">Tel&eacute;fono</label>
                <div class="col-lg-4">
                    <input type="text" id="soporte_tlf" name="soporte_tlf" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_setting('soporte_tlf'); ?>"/>
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Movil -->
                <label for="soporte_movil" class="col-lg-2 control-label">M&oacute;vil</label>
                <div class="col-lg-4">
                    <input type="text" id="soporte_movil" name="soporte_movil" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_setting('soporte_movil'); ?>"/>
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Email -->
                <label for="soporte_correo" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-4">
                    <input type="email" id="soporte_correo" name="soporte_correo" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_setting('soporte_correo'); ?>"/>
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Horario -->
                <label for="horario" class="col-lg-2 control-label">Horario</label>
                <div class="col-lg-4">
                    <input type="text" id="horario" name="horario" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_setting('horario'); ?>"/>
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Direccion -->
                <label for="direccion" class="col-lg-2 control-label">Direcci&oacute;n</label>
                <div class="col-lg-4">
                    <textarea class="form-control textarea" rows="2" name="direccion" placeholder="" disabled="disabled"><?=get_setting('direccion'); ?></textarea>
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Google Map -->
                <label for="direccion" class="col-lg-2 control-label">Google Map</label>
                <div class="col-lg-4">
                    <textarea class="form-control textarea" rows="3" name="direccion" disabled="disabled"><?=get_setting('google_map'); ?></textarea>
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Ciudad -->
                <label for="estado" class="col-lg-2 control-label">Ciudad</label>
                <div class="col-lg-4">
                    <input type="text" id="ciudad" name="ciudad" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_setting('ciudad'); ?>"/>
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <!-- Estado -->
                <label for="pais" class="col-lg-2 control-label">Estado</label>
                <div class="col-lg-4">
                    <input type="text" id="estado" name="estado" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_setting('estado'); ?>"/>
                </div>
                <div class="clearfix"></div>
          </div>
          <div class="form-actions">
                <div class="col-lg-offset-2">
                  <button class="btn btn-primary">&nbsp;Editar&nbsp;</button>
                  <input class="btn btn-default" type="button" onclick="location.href='<?=HTTP_ROOT?>'" value="Cancelar" />
                </div>
            </div>
        </form>
<? include(SITE_ROOT.'/resources/includes/footer.php'); ?>
