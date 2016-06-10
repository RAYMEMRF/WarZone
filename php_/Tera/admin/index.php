<?php
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].'/'.$root[1]);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.$root[1]);
include (SITE_ROOT.'/admin/resources/includes/header.php');
?>

    <div class="page-header">
    <h1>Panel Administrador</h1>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="text-center">
           <a href="<?php echo HTTP_ROOT;?>/admin/configuracion/index.php"><img style="width: 128px; height: 128px;" src="<?php echo HTTP_ROOT?>/admin/resources/img/1376856941_smserver.png" class="img-rounded" title="Configuracion General"></a>
          <div class="caption">
            <h3><center>Configuracion</center></h3>
          </div>
        </div>
      </div><!-- fin Configuracion -->
      <div class="col-sm-6 col-md-3">
        <div class="text-center">
          <a href="<?php echo HTTP_ROOT?>/admin/usuarios/index.php"><img style="width: 128px; height: 128px;" src="<?php echo HTTP_ROOT?>/admin/resources/img/1376856270_preferences-contact-list.png" class="img-rounded" title="Usuarios" /></a>
          <div class="caption">
            <h3><center>Usuarios</center></h3>
          </div>
        </div>
      </div><!-- fin Usuarios -->
      <div class="col-sm-6 col-md-3">
        <div class="text-center">
          <a href="<?php echo HTTP_ROOT?>/admin/documentacion/index.php"><img style="width: 128px; height: 128px;" src="<?php echo HTTP_ROOT?>/admin/resources/img/1376880862_HTML.png" class="img-rounded" title="Documentacion" /></a>
          <div class="caption">
            <h3><center>Documentacion</center></h3>
          </div>
        </div>
      </div><!-- fin Documentacion -->
      <div class="col-sm-6 col-md-3">
        <div class="text-center">
          <a href="<?php echo HTTP_ROOT?>/admin/slideshow/index.php"><img style="width: 128px; height: 128px;" src="<?php echo HTTP_ROOT?>/admin/resources/img/1376880330_HP-Projector2.png" class="img-rounded" title="Slideshow" /></a>
          <div class="caption">
            <h3><center>Slideshow</center></h3>
          </div>
        </div>
      </div><!-- fin Slideshow -->
      <div class="col-sm-6 col-md-3">
        <div class="text-center">
          <a href="<?php echo HTTP_ROOT?>/admin/blog/index.php"><img style="width: 128px; height: 128px;" src="<?php echo HTTP_ROOT?>/admin/resources/img/1377071569_blog.png" class="img-rounded" title="Blog" /></a>
          <div class="caption">
            <h3><center>Blog</center></h3>
          </div>
        </div>
      </div><!-- fin Blog -->
      <div class="col-sm-6 col-md-3">
        <div class="text-center">
          <a href="<?php echo HTTP_ROOT?>/admin/servicios/index.php"><img style="width: 128px; height: 128px;" src="<?php echo HTTP_ROOT?>/admin/resources/img/1377591956_sharemanager.png" class="img-rounded" title="Servicios" /></a>
          <div class="caption">
            <h3><center>Servicios</center></h3>
          </div>
        </div>
      </div><!-- fin Servicios -->
      <div class="col-sm-6 col-md-3">
        <div class="text-center">
          <a href="<?php echo HTTP_ROOT?>/admin/clientes/index.php"><img style="width: 128px; height: 128px;" src="<?php echo HTTP_ROOT?>/admin/resources/img/1377591763_clients.png" class="img-rounded" title="Clientes" /></a>
          <div class="caption">
            <h3><center>Clientes</center></h3>
          </div>
        </div>
      </div><!-- fin Clientes -->
      <div class="col-sm-6 col-md-3">
        <div class="text-center">
          <a href="<?php echo HTTP_ROOT?>/admin/descargas/index.php"><img style="width: 128px; height: 128px;" src="<?php echo HTTP_ROOT?>/admin/resources/img/Cloud-icon.png" class="img-rounded" title="Descargas" /></a>
          <div class="caption">
            <h3><center>Descargas</center></h3>
          </div>
        </div>
      </div><!-- fin Descargas -->
      <div class="col-sm-6 col-md-3">
        <div class="text-center">
          <a href="<?php echo HTTP_ROOT?>/admin/productos/index.php"><img style="width: 128px; height: 128px;" src="<?php echo HTTP_ROOT?>/admin/resources/img/1381611111_benchmarking.png" class="img-rounded" title="Productos" /></a>
          <div class="caption">
            <h3><center>Productos</center></h3>
          </div>
        </div>
      </div><!-- fin Productos -->
      <div class="col-sm-6 col-md-3">
        <div class="text-center">
          <a href="<?php echo HTTP_ROOT?>/admin/categorias/index.php"><img style="width: 128px; height: 128px;" src="<?php echo HTTP_ROOT?>/admin/resources/img/Category.png" class="img-rounded" title="Categorias" /></a>
          <div class="caption">
            <h3><center>Categorias</center></h3>
          </div>
        </div>
      </div><!-- fin Categorias -->
    </div><!-- fin row -->


<?php include(SITE_ROOT.'/admin/resources/includes/footer.php'); ?>
