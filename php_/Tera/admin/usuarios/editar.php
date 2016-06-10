<?
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].'/'.$root[1]);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.$root[1]);
include(SITE_ROOT.'/resources/includes/header.php'); 
$consulta = "SELECT * FROM usuarios WHERE id = ".$_GET['ref'];
$query = query($consulta);
$resultado = fetch_array($query);
?>

        <div class="page-header">
            <h1><a href="index.php"><img style="width: 64px; height: 64px;" src="<?=HTTP_ROOT?>/resources/img/1376856270_preferences-contact-list.png" class="img-rounded" title="Usuarios" /></a>Usuarios&nbsp;<small>Editar</small></h1>
        </div>
        <form class="form-horizontal" action="index.php" method="POST" novalidate>
            <input type="hidden" id="id" name="id" value="<?=$resultado['id']?>" />
            <div class="form-group">
            <!-- Nombre -->
                <label for="name" class="col-lg-2 control-label">Nombre</label>
                <div class="col-lg-4">
                    <input type="text" id="name" name="name" placeholder="" class="form-control input-sm" value="<?=$resultado['nombre']?>" required>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Introduce el nombre de pila del usuario</p>
            </div>
            
           <div class="form-group">
            <!-- Username -->
                <label for="username" class="col-lg-2 control-label">Usuario</label>
                <div class="col-lg-4">
                    <input type="text" id="username" name="username" placeholder="" class="form-control input-sm" value="<?=$resultado['usuario']?>" required>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">El nombre de usuario puede contener letras o n&uacute;meros, sin espacios</p>
            </div>
         
            <div class="form-group">
            <!-- E-mail -->
                <label for="email" class="col-lg-2 control-label">E-mail</label>
                <div class="col-lg-4">
                    <input type="text" id="email" name="email" placeholder="" class="form-control input-sm" value="<?=$resultado['correo']?>">
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Introduce una direcci&oacute;n de correo electr&oacute;nico</p>
            </div>
         
            <div class="form-group">
            <!-- Password-->
                <label for="password" class="col-lg-2 control-label">Contrase&ntilde;a</label>
                <div class="col-lg-4">
                    <input type="password" id="password" name="password" placeholder="" class="form-control input-sm" value="<?=$resultado['clave']?>" required>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">La constrase&ntilde;a debe contener al menos 4 car&aacute;cteres</p>
            </div>
         
            <div class="form-group">
                <!-- Password -->
                <label for="password_confirm" class="col-lg-2 control-label">Contrase&ntilde;a (Confirmar)</label>
                <div class="col-lg-4">
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="form-control input-sm" value="<?=$resultado['clave']?>" 
                    data-validation-matches-match="password"
                    data-validation-matches-message="Las contrase&ntilde;as deben coincidir"  >
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Por favor confirma la contrase&ntilde;a</p>
            </div>
            <div class="form-actions">
                <div class="col-lg-offset-2">
                  <button class="btn btn-primary">&nbsp;Enviar&nbsp;</button>
                  <input class="btn btn-default" type="button" onclick="location.href='index.php'" value="Cancelar" />
                </div>
            </div>
        </form>
    <script>    
    $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
    </script>
<? include(SITE_ROOT.'/resources/includes/footer.php'); ?>
