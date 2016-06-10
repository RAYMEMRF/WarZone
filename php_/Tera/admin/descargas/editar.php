<?
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].'/'.$root[1]);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.$root[1]);
include(SITE_ROOT.'/resources/includes/header.php'); 
$consulta = "SELECT * FROM descargas WHERE id = ".$_GET['ref'];
$query = query($consulta);
$resultado = fetch_array($query);
function display_filesize($filesize){
   
    if(is_numeric($filesize)){
    $decr = 1024; $step = 0;
    $prefix = array('Byte','KB','MB','GB','TB','PB');
       
    while(($filesize / $decr) > 0.9){
        $filesize = $filesize / $decr;
        $step++;
    }
    return round($filesize,2).' '.$prefix[$step];
    } else {

    return 'NaN';
    }
   
} 
function convert_size_to_num($size)  
{  
    //This function transforms the php.ini notation for numbers (like '2M') to an integer (2*1024*1024 in this case)  
    $l = substr($size, -1);  
    $ret = substr($size, 0, -1);  
    switch(strtoupper($l)){  
    case 'P':  
        $ret *= 1024;  
    case 'T':  
        $ret *= 1024;  
    case 'G':  
        $ret *= 1024;  
    case 'M':  
        $ret *= 1024;  
    case 'K':  
        $ret *= 1024;  
        break;  
    }  
    return $ret;  
}  
  
function get_max_fileupload_size()  
{  
    $max_upload_size = min(convert_size_to_num(ini_get('post_max_size')), convert_size_to_num(ini_get('upload_max_filesize')));  
  
    return display_filesize($max_upload_size);  
}  
?>
?>

        <div class="page-header">
            <h1><a href="index.php"><img style="width: 64px; height: 64px;" src="<?=HTTP_ROOT?>/resources/img/Cloud-icon.png" class="img-rounded" title="Servicios" /></a>Servicios&nbsp;<small>Editar</small></h1>
        </div>
        <form enctype="multipart/form-data" class="form-horizontal" action="index.php" method="POST" novalidate>
            <input type="hidden" id="id" name="id" value="<?=$resultado['id']?>" />
            <div class="form-group">
            <!-- Nombre -->
                <label for="titulo" class="col-lg-2 control-label">Nombre</label>
                <div class="col-lg-4">
                    <input type="text" id="nombre" name="nombre" placeholder="" class="form-control input-sm" value="<?=$resultado['nombre'];?>" required>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">El nombre debe ser corto y preciso no mayor a 20 car&aacute;cteres</p>
            </div>
         
            <div class="form-group">
            <!-- Descripcion -->
                <label for="descripcion" class="col-lg-2 control-label">Descripcion</label>
                <div class="col-lg-4">
                    <textarea class="form-control" rows="3" name="descripcion"><?=$resultado['titulo'];?></textarea>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Introduce una breve descripcion del servicio</p> 
            </div>
         
            <div class="form-group">
            <!-- Imagen-->
                <input id="linkfile" type="file" style="display:none">
                <label for="imagen" class="col-lg-2 control-label">Archivo</label>
                <div class="input-group col-lg-6">
                    <input type="text" id="link" name="link" placeholder="" class="form-control input-sm">
                    <span class="input-group-btn">
                        <button class="btn btn-default btn-sm" type="button" onclick="$('input[id=linkfile]').click();">Examinar...</button>
                    </span>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Seleccione una archivo no mayor a <?=get_max_fileupload_size()?></p>
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
    $('input[id=linkfile]').change(function() {
        $('#link').val($(this).val());
    });
    </script>
<? include(SITE_ROOT.'/resources/includes/footer.php'); ?>
