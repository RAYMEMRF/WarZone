<?
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].'/'.$root[1]);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.$root[1]);
include(SITE_ROOT.'/resources/includes/header.php');  

?>
        <div class="page-header">
            <h1><a href="index.php"><img style="width: 64px; height: 64px;" src="<?=HTTP_ROOT?>/resources/img/1377071569_blog.png" class="img-rounded" title="Blog" /></a>Blog&nbsp;<small>Entrada</small></h1>
        </div>
        <form class="form-horizontal" action="index.php" method="POST" novalidate>
           <div class="form-group">
            <!-- Titulo -->
                <label for="titulo" class="col-lg-2 control-label">Titulo</label>
                <div class="col-lg-10">
                    <input type="text" id="titulo" name="titulo" placeholder="" class="form-control input-sm" required>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Introduce un titulo correspondiente a su entrada</p>
            </div>
            
           <div class="form-group">
            <!-- Autor -->
                <label for="autor" class="col-lg-2 control-label">Publicado por</label>
                <div class="col-lg-10">
                    <input type="text" id="autor" name="autor" placeholder="" class="form-control input-sm" required>
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Indica la referencia o el autor del articulo</p>
            </div>
            
           <div class="form-group">
            <!-- Titulo -->
                <label for="link" class="col-lg-2 control-label">Enlace web</label>
                <div class="col-lg-10">
                    <input type="text" id="link" name="link" placeholder="" class="form-control input-sm" >
                </div>
                <div class="clearfix"></div>
                <p class="help-block col-lg-offset-2 col-lg-10">Coloque el enlace si pertenece a un articulo en la web</p>
            </div>
         
            <div class="form-group">
            <!-- Parrafo -->
                <label for="parrafo" class="col-lg-2 control-label">Entrada</label>
                <div class="col-lg-10">
                    <textarea class="form-control textarea" rows="12" name="entrada"></textarea>
                </div>
            </div>
            
            <div class="form-actions">
                <div class="col-lg-offset-2">
                  <button class="btn btn-primary">&nbsp;Enviar&nbsp;</button>
                  <input class="btn btn-default" type="button" onclick="location.href='index.php'" value="Cancelar" />
                </div>
            </div>
        </form>
    <script src="<?=HTTP_ROOT?>/resources/js/wysihtml5-0.3.0.js"></script>
    <script src="<?=HTTP_ROOT?>/resources/js/bootstrap-wysihtml5.js"></script>
    <script>
        $('.textarea').wysihtml5();
    </script>
    <script>    
    $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
    </script>

<? include(SITE_ROOT.'/resources/includes/footer.php'); ?>
