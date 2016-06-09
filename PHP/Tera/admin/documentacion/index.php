<?
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].'/'.$root[1]);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.$root[1]);
include(SITE_ROOT.'/resources/includes/header.php');  ?>

        <div class="page-header">
            <h1><a href="index.php"><img style="width: 64px; height: 64px;" src="<?=HTTP_ROOT?>/resources/img/1376880862_HTML.png" class="img-rounded" title="Documentacion" /></a>Documentaci&oacute;n&nbsp;<small>Ver</small></h1>
        </div>
        
        <form enctype="multipart/form-data" class="form-horizontal" action='editar.php' method="POST" novalidate>
            
<?
        if (!empty($_POST))
        {
            $table = 'documentacion';
            $update = "inicio1_encabezado='".$_POST['encabezado1']."'";
            $update .= ",inicio1_titulo='".$_POST['titulo1']."'";
            $update .= ",inicio1_parrafo='".$_POST['parrafo1']."'";
            $update .= ",inicio1_imagen='".$_POST['imagen1']."'";
            $update .= ",inicio2_encabezado='".$_POST['encabezado2']."'";
            $update .= ",inicio2_titulo='".$_POST['titulo2']."'";
            $update .= ",inicio2_parrafo='".$_POST['parrafo2']."'";
            $update .= ",inicio2_imagen='".$_POST['imagen2']."'";
            $update .= ",vision_encabezado='".$_POST['visionencabezado2']."'";
            $update .= ",vision_titulo='".$_POST['visiontitulo2']."'";
            $update .= ",vision_parrafo='".$_POST['visionparrafo2']."'";
            $update .= ",vision_imagen='".$_POST['visionimagen']."'";
            $update .= ",mision_encabezado='".$_POST['misionencabezado2']."'";
            $update .= ",mision_titulo='".$_POST['misiontitulo2']."'";
            $update .= ",mision_parrafo='".$_POST['misionparrafo2']."'";
            $update .= ",mision_imagen='".$_POST['misionimagen']."'";
            $update .= ",organizacion_encabezado='".$_POST['orgencabezado2']."'";
            $update .= ",organizacion_titulo='".$_POST['orgtitulo2']."'";
            $update .= ",organizacion_parrafo='".$_POST['orgparrafo2']."'";
            $update .= ",organizacion_imagen='".$_POST['orgimagen']."'";
            $update .= ",descripcion='".$_POST['descripcion']."'";
            $update .= ",twitter_widget='".htmlentities($_POST['twwidget'])."'";
            $update .= ",twitter='".htmlentities($_POST['twitter'])."'";
            $update .= ",facebook='".htmlentities($_POST['facebook'])."'";
            $update .= ",mercadolibre='".htmlentities($_POST['mercadolibre'])."'";
            $update .= ",linkedin='".htmlentities($_POST['linkedin'])."'";
            $update .= ",skype='".htmlentities($_POST['skype'])."'";
            $update .= ",youtube='".htmlentities($_POST['youtube'])."'";
            
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
        
        if (!empty($_FILES))
        {   
            foreach($_FILES as $key => $values)
            {
               $target = SITE_ROOT."/resources/upload/documentacion/".$values['name'];
               move_uploaded_file($values['tmp_name'], $target);
            } 
        }
?>
            
            <div class="tabbable">
                
                <ul class="nav nav-pills nav-justified">
                  <li class="active"><a href="#inicio1" data-toggle="tab">Inicio - Columna 1</a></li>
                  <li><a href="#inicio2" data-toggle="tab">Inicio - Columna 2</a></li>
                  <li><a href="#socials" data-toggle="tab">Inicio - Red Social</a></li>
                  <li><a href="#nosotros" data-toggle="tab">Nosotros - Descripci&oacute;n</a></li>
                  <li><a href="#mision" data-toggle="tab">Nosotros - Misi&oacute;n</a></li>
                  <li><a href="#vision" data-toggle="tab">Nosotros - Visi&oacute;n</a></li>
                  <li><a href="#organizacion" data-toggle="tab">Nosotros - Organizaci&oacute;n</a></li>
                </ul>
            
                <div class="tab-content">
                    <br><br>
                    <div id="inicio1" class="tab-pane active">
                        <div class="form-group">
                        <!-- Encabezado -->
                            <label for="encabezado1" class="col-lg-2 control-label">Encabezado</label>
                            <div class="col-lg-4">
                                <input type="text" id="encabezado1" name="encabezado1" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('inicio1_encabezado'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Introduce un encabezado no mayor a 20 car&aacute;cteres</p>
                        </div>
                        
                       <div class="form-group">
                        <!-- Titulo -->
                            <label for="titulo1" class="col-lg-2 control-label">Titulo</label>
                            <div class="col-lg-4">
                                <input type="text" id="titulo1" name="titulo1" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('inicio1_titulo'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">El titulo debe ser corto y preciso no mayor a 40 car&aacute;cteres</p>
                        </div>

                        <div class="form-group">
                        <!-- Parrafo -->
                            <label for="parrafo1" class="col-lg-2 control-label">Parrafo</label>
                            <div class="col-lg-4">
                                <textarea class="form-control" rows="3" name="parrafo1" disabled="disabled"><?=get_docs('inicio1_parrafo'); ?></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Introduce una breve descripcion de la presentaci&oacute;n</p> 
                        </div>
                        
                        <div class="form-group">
                        <!-- Imagen-->
                            <input id="img1file" type="file" style="display:none">
                            <label for="imagen1" class="col-lg-2 control-label">Imagen</label>
                            <div class="input-group col-lg-6">
                                <input type="text" id="imagen1" name="imagen1" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('inicio1_imagen'); ?>" />
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-sm" type="button" onclick="$('input[id=img1file]').click();">Examinar...</button>
                                </span>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Seleccione una imagen cuya dimension sea proporcional a 97x84 p&iacute;xeles</p>
                        </div>
                        
                    </div><!-- fin tab-pane inicio1 -->
                    
                    <div id="inicio2" class="tab-pane">
                        <div class="form-group">
                        <!-- Encabezado -->
                            <label for="encabezado2" class="col-lg-2 control-label">Encabezado</label>
                            <div class="col-lg-4">
                                <input type="text" id="encabezado2" name="encabezado2" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('inicio2_encabezado'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Introduce un encabezado no mayor a 20 car&aacute;cteres</p>
                        </div>
                        
                       <div class="form-group">
                        <!-- Titulo -->
                            <label for="titulo2" class="col-lg-2 control-label">Titulo</label>
                            <div class="col-lg-4">
                                <input type="text" id="titulo2" name="titulo2" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('inicio2_titulo'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">El titulo debe ser corto y preciso no mayor a 40 car&aacute;cteres</p>
                        </div>
                        
                        <div class="form-group">
                        <!-- Parrafo -->
                            <label for="parrafo2" class="col-lg-2 control-label">Parrafo</label>
                            <div class="col-lg-4">
                                <textarea class="form-control" rows="3" name="parrafo2" disabled="disabled"><?=get_docs('inicio2_parrafo'); ?></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Introduce una breve descripcion de la presentaci&oacute;n</p> 
                        </div>
                        <div class="form-group">
                        <!-- Imagen-->
                            <input id="img2file" type="file" style="display:none">
                            <label for="imagen2" class="col-lg-2 control-label">Imagen</label>
                            <div class="input-group col-lg-6">
                                <input type="text" id="imagen2" name="imagen2" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('inicio2_imagen'); ?>" />
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-sm" type="button" onclick="$('input[id=img2file]').click();">Examinar...</button>
                                </span>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Seleccione una imagen cuya dimension sea proporcional a 97x84 p&iacute;xeles</p>
                        </div>
                    </div><!-- fin tab-pane inicio2 -->
                    
                    <div id="nosotros" class="tab-pane">
                
                        <div class="form-group">
                        <!-- Parrafo -->
                            <label for="descripcion" class="col-lg-2 control-label">Quienes somos</label>
                            <div class="col-lg-4">
                                <textarea class="form-control" rows="3" name="descripcion" disabled="disabled"><?=get_docs('descripcion'); ?></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Introduce una breve descripcion de la presentaci&oacute;n</p> 
                        </div>
                        
                    </div><!-- fin tab-pane nosotros -->
                    
                    <div id="socials" class="tab-pane">
                        <div class="form-group">
                        <!-- Facebook -->
                            <label for="facebook" class="col-lg-2 control-label">Facebook</label>
                            <div class="col-lg-4">
                                <input type="text" id="facebook" name="facebook" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('facebook'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                        <!-- Twitter -->
                            <label for="twitter" class="col-lg-2 control-label">Twitter</label>
                            <div class="col-lg-4">
                                <input type="text" id="twitter" name="twitter" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('twitter'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                        <!-- YouTube -->
                            <label for="youtube" class="col-lg-2 control-label">YouTube</label>
                            <div class="col-lg-4">
                                <input type="text" id="youtube" name="youtube" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('youtube'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                        <!-- Skype -->
                            <label for="skype" class="col-lg-2 control-label">Skype</label>
                            <div class="col-lg-4">
                                <input type="text" id="skype" name="skype" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('skype'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                        <!-- LinkedIn -->
                            <label for="linkedin" class="col-lg-2 control-label">LinkedIn</label>
                            <div class="col-lg-4">
                                <input type="text" id="linkedin" name="linkedin" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('linkedin'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                        <!-- MercadoLibre -->
                            <label for="mercadolibre" class="col-lg-2 control-label">MercadoLibre</label>
                            <div class="col-lg-4">
                                <input type="text" id="mercadolibre" name="mercadolibre" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('mercadolibre'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                        <!-- Twitter Widget -->
                            <label for="twwidget" class="col-lg-2 control-label">Twitter Widget</label>
                            <div class="col-lg-4">
                                <textarea class="form-control" rows="3" name="twwidget" disabled="disabled"><?=get_docs('twitter_widget'); ?></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Introduce una breve descripcion de la presentaci&oacute;n</p> 
                        </div>
                        
                    </div><!-- fin tab-pane twitter -->
                    
                    <div id="vision" class="tab-pane">
                        <div class="form-group">
                        <!-- Encabezado -->
                            <label for="visionencabezado2" class="col-lg-2 control-label">Encabezado</label>
                            <div class="col-lg-4">
                                <input type="text" id="visionencabezado2" name="visionencabezado2" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('vision_encabezado'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Introduce un encabezado no mayor a 20 car&aacute;cteres</p>
                        </div>
                        
                       <div class="form-group">
                        <!-- Titulo -->
                            <label for="visiontitulo2" class="col-lg-2 control-label">Titulo</label>
                            <div class="col-lg-4">
                                <input type="text" id="visiontitulo2" name="visiontitulo2" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('vision_titulo'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">El titulo debe ser corto y preciso no mayor a 40 car&aacute;cteres</p>
                        </div>
                        
                        <div class="form-group">
                        <!-- Parrafo -->
                            <label for="visionparrafo2" class="col-lg-2 control-label">Parrafo</label>
                            <div class="col-lg-4">
                                <textarea class="form-control" rows="3" name="visionparrafo2" disabled="disabled"><?=get_docs('vision_parrafo'); ?></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Introduce una breve descripcion de la presentaci&oacute;n</p> 
                        </div>
                        <div class="form-group">
                        <!-- Imagen-->
                            <input id="visionimgfile" type="file" style="display:none">
                            <label for="visionimagen" class="col-lg-2 control-label">Imagen</label>
                            <div class="input-group col-lg-6">
                                <input type="text" id="visionimagen" name="visionimagen" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('vision_imagen'); ?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-sm" type="button" onclick="$('input[id=visionimgfile]').click();">Examinar...</button>
                                </span>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Seleccione una imagen cuya dimension sea proporcional a 97x84 p&iacute;xeles</p>
                        </div>
                    </div><!-- fin tab-pane vision -->
                    
                    <div id="organizacion" class="tab-pane">
                        <div class="form-group">
                        <!-- Encabezado -->
                            <label for="orgencabezado2" class="col-lg-2 control-label">Encabezado</label>
                            <div class="col-lg-4">
                                <input type="text" id="orgencabezado2" name="orgencabezado2" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('organizacion_encabezado'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Introduce un encabezado no mayor a 20 car&aacute;cteres</p>
                        </div>
                        
                       <div class="form-group">
                        <!-- Titulo -->
                            <label for="orgtitulo2" class="col-lg-2 control-label">Titulo</label>
                            <div class="col-lg-4">
                                <input type="text" id="orgtitulo2" name="orgtitulo2" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('organizacion_titulo'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">El titulo debe ser corto y preciso no mayor a 40 car&aacute;cteres</p>
                        </div>
                        
                        <div class="form-group">
                        <!-- Parrafo -->
                            <label for="orgparrafo2" class="col-lg-2 control-label">Parrafo</label>
                            <div class="col-lg-4">
                                <textarea class="form-control" rows="3" name="orgparrafo2" disabled="disabled"><?=get_docs('organizacion_parrafo'); ?></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Introduce una breve descripcion de la presentaci&oacute;n</p> 
                        </div>
                        <div class="form-group">
                        <!-- Imagen-->
                            <input id="orgimgfile" type="file" style="display:none">
                            <label for="orgimagen" class="col-lg-2 control-label">Imagen</label>
                            <div class="input-group col-lg-6">
                                <input type="text" id="orgimagen" name="orgimagen" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('organizacion_imagen'); ?>" />
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-sm" type="button" onclick="$('input[id=orgimgfile]').click();">Examinar...</button>
                                </span>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Seleccione una imagen cuya dimension sea proporcional a 97x84 p&iacute;xeles</p>
                        </div>
                    </div><!-- fin tab-pane org -->
                    
                    <div id="mision" class="tab-pane">
                        <div class="form-group">
                        <!-- Encabezado -->
                            <label for="misionencabezado2" class="col-lg-2 control-label">Encabezado</label>
                            <div class="col-lg-4">
                                <input type="text" id="misionencabezado2" name="misionencabezado2" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('mision_encabezado'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Introduce un encabezado no mayor a 20 car&aacute;cteres</p>
                        </div>
                        
                       <div class="form-group">
                        <!-- Titulo -->
                            <label for="misiontitulo2" class="col-lg-2 control-label">Titulo</label>
                            <div class="col-lg-4">
                                <input type="text" id="misiontitulo2" name="misiontitulo2" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('mision_titulo'); ?>" required>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">El titulo debe ser corto y preciso no mayor a 40 car&aacute;cteres</p>
                        </div>
                        
                        <div class="form-group">
                        <!-- Parrafo -->
                            <label for="misionparrafo2" class="col-lg-2 control-label">Parrafo</label>
                            <div class="col-lg-4">
                                <textarea class="form-control" rows="3" name="misionparrafo2" disabled="disabled"><?=get_docs('mision_parrafo'); ?></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Introduce una breve descripcion de la presentaci&oacute;n</p> 
                        </div>
                        <div class="form-group">
                        <!-- Imagen-->
                            <input id="misionimgfile" type="file" style="display:none">
                            <label for="misionimagen" class="col-lg-2 control-label">Imagen</label>
                            <div class="input-group col-lg-6">
                                <input type="text" id="misionimagen" name="misionimagen" placeholder="" class="form-control input-sm" disabled="disabled" value="<?=get_docs('mision_imagen'); ?>"/>
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-sm" type="button" onclick="$('input[id=misionimgfile]').click();">Examinar...</button>
                                </span>
                            </div>
                            <div class="clearfix"></div>
                            <p class="help-block col-lg-offset-2 col-lg-10">Seleccione una imagen cuya dimension sea proporcional a 97x84 p&iacute;xeles</p>
                        </div>
                    </div><!-- fin tab-pane mision -->
                    
                </div><!-- fin tab-content -->
            
            </div><!-- fin tabbable -->
            
            <div class="form-actions">
                <div class="col-lg-offset-2">
                  <button class="btn btn-primary">&nbsp;Editar&nbsp;</button>
                  <input class="btn btn-default" type="button" onclick="location.href='<?=HTTP_ROOT?>'" value="Cancelar" />
                </div>
            </div>
        </form>
        
    <script type="text/javascript">
    $('input[id=img1file]').change(function() {
        $('#imagen1').val($(this).val());
    });
    $('input[id=img2file]').change(function() {
        $('#imagen2').val($(this).val());
    });
    $('input[id=visionimgfile]').change(function() {
        $('#visionimagen').val($(this).val());
    });
    $('input[id=misionimgfile]').change(function() {
        $('#misionimagen').val($(this).val());
    });
    $('input[id=orgimgfile]').change(function() {
        $('#orgimagen').val($(this).val());
    });
    </script>
<? include(SITE_ROOT.'/resources/includes/footer.php'); ?>
