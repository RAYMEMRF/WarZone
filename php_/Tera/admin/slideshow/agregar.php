<?
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].'/'.$root[1]);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.$root[1]);
include(SITE_ROOT.'/resources/includes/header.php'); 
?>
        
        <div class="page-header">
            <h1><a href="index.php"><img style="width: 64px; height: 64px;" src="<?=HTTP_ROOT?>/resources/img/1376880330_HP-Projector2.png" class="img-rounded" title="Usuarios" /></a>Slideshow&nbsp;<small>Agregar</small></h1>
        </div>
        <form enctype="multipart/form-data" class="form-horizontal" action="index.php" method="POST" novalidate>
            <div class="form-group">
            <!-- Encabezado -->
                <label for="encabezado" class="col-lg-2 control-label">Encabezado</label>
                <div class="col-lg-4">
                    <input type="text" id="encabezado" name="encabezado" placeholder="" class="form-control input-sm" required>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Introduce un encabezado no mayor a 40 car&aacute;cteres</p>
            </div>
            
           <div class="form-group">
            <!-- Titulo -->
                <label for="titulo" class="col-lg-2 control-label">Titulo</label>
                <div class="col-lg-4">
                    <input type="text" id="titulo" name="titulo" placeholder="" class="form-control input-sm" required>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">El titulo debe ser corto y preciso no mayor a 20 car&aacute;cteres</p>
            </div>
         
            <div class="form-group">
            <!-- Parrafo -->
                <label for="parrafo" class="col-lg-2 control-label">Parrafo</label>
                <div class="col-lg-4">
                    <textarea class="form-control" rows="3" name="parrafo"></textarea>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Introduce una breve descripcion de la presentaci&oacute;n</p> 
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
                <p class="help-block col-lg-offset-2 col-lg-10">Seleccione una imagen cuya dimension sea proporcional a 398x365 p&iacute;xeles</p>
            </div>
         
            <div class="form-group">
                <!-- Miniatura -->
                <input id="minfile" name="minfile" type="file" style="display:none">
                <label for="miniatura" class="col-lg-2 control-label">Miniatura</label>
                <div class="input-group col-lg-6">
                    <input type="text" id="miniatura" name="miniatura" placeholder="" class="form-control input-sm">
                    <span class="input-group-btn">
                        <button class="btn btn-default btn-sm" type="button" onclick="$('input[id=minfile]').click();">Examinar...</button>
                    </span>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Seleccione una imagen cuya dimension sea proporcional a 94x69 p&iacute;xeles</p>
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
        var filePath     = $(this).val();
        if(filePath.match(/fakepath/)) 
        {
            // update the file-path text using case-insensitive regex
            filePath = filePath.replace(/C:\\fakepath\\/i, '');
        }
        $('#imagen').val(filePath);
    });
    $('input[id=minfile]').change(function() {
        var filePath     = $(this).val();
        if(filePath.match(/fakepath/)) 
        {
            // update the file-path text using case-insensitive regex
            filePath = filePath.replace(/C:\\fakepath\\/i, '');
        }
        $('#miniatura').val(filePath);
    });
    </script>
<? include(SITE_ROOT.'/resources/includes/footer.php'); ?>
