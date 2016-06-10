<?
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].'/'.$root[1]);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.$root[1]);
include(SITE_ROOT.'/resources/includes/header.php');  

?>

        <div class="page-header">
            <h1><a href="index.php"><img style="width: 64px; height: 64px;" src="<?=HTTP_ROOT?>/resources/img/1377591763_clients.png" class="img-rounded" title="Clientes" /></a>Clientes&nbsp;<small>Agregar</small></h1>
        </div>
        <form enctype="multipart/form-data" class="form-horizontal" action="index.php" method="POST" novalidate>
            <div class="form-group">
            <!-- Encabezado -->
                <label for="encabezado" class="col-lg-2 control-label">Nombre</label>
                <div class="col-lg-4">
                    <input type="text" id="nombre" name="nombre" placeholder="" class="form-control input-sm" required>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Introduce el nombre de la empresa/cliente</p>
            </div>
                     
            <div class="form-group">
            <!-- Imagen-->
                <input id="imgfile" name="imgfile" type="file" style="display:none">
                <label for="imagen" class="col-lg-2 control-label">Imagen</label>
                <div class="input-group col-lg-6">
                    <input type="text" id="imagen" name="imagen" placeholder="" class="form-control input-sm">
                    <span class="input-group-btn">
                        <button class="btn btn-default btn-sm" type="button" onclick="$('input[id=imgfile]').click();">Examinar...</button>
                    </span>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Seleccione una imagen cuya dimension sea proporcional a 240x117 p&iacute;xeles</p>
            </div>
         
            <div class="form-group">
            <!-- Descripcion -->
                <label for="descripcion" class="col-lg-2 control-label">Descripcion</label>
                <div class="col-lg-4">
                    <textarea class="form-control" rows="3" name="descripcion"></textarea>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Introduce una breve descripcion de la empresa/cliente</p> 
            </div>
                        
            <div class="form-group">
            <!-- Titulo -->
                <label for="link" class="col-lg-2 control-label">Enlace web</label>
                <div class="col-lg-4">
                    <input type="text" id="link" name="link" placeholder="" class="form-control input-sm" required>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Indique si el sitio web de la empresa/cliente</p>
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
    <script type="text/javascript">
    $('input[id=imgfile]').change(function() {
        $('#imagen').val($(this).val());
    });
    </script>
<? include(SITE_ROOT.'/resources/includes/footer.php'); ?>
