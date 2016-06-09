<? 
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST']);
include ('header.php'); ?>
			<!-- main -->
			<div class="main">
				<h1>Descripcion de la Empresa</h1>
				<div>
					<div class="featured" style="width:600px;float:left;padding-right:20px;text-align:justify;">
						<h4>Quienes somos</h4>
						<p><?=get_docs('descripcion')?></p>
					</div>
					<div style="width:268px;float:left;padding-left:30px;">
						<center><img style="height:200px;width:218px;" src="css/images/about_us.png"/></center>
					</div>
				</div>
				<section class="cols">
					<div class="col">
						<h3><?=get_docs('mision_encabezado')?></h3>
						<? $imagen = get_docs('mision_imagen');
						   $url = SITE_ROOT.'/admin/resources/upload/documentacion/'.$imagen;
						   if(!empty($imagen) && file_exists($url)) { ?>
						<img src="admin/resources/upload/documentacion/<?=$imagen?>" alt="" class="left"/>
						<? } ?> 
						<h5><?=get_docs('mision_titulo')?></h5>
						<div class="cl">&nbsp;</div>
						<p><?=get_docs('mision_parrafo')?></p>
					</div>

					<div class="col">
						<h3><?=get_docs('vision_encabezado')?></h3>
						<? $imagen = get_docs('vision_imagen');
						   $url = SITE_ROOT.'/admin/resources/upload/documentacion/'.$imagen;
						   if(!empty($imagen) && file_exists($url)) { ?>
						<img src="admin/resources/upload/documentacion/<?=$imagen?>" alt="" class="left"/>
						<? } ?> 
						<h5><?=get_docs('vision_titulo')?></h5>
						<div class="cl">&nbsp;</div>
						<p><?=get_docs('vision_parrafo')?></p>
					</div>

					<div class="col">
						<h3><?=get_docs('organizacion_encabezado')?></h3>
						<? $imagen = get_docs('organizacion_imagen');
						   $url = SITE_ROOT.'/admin/resources/upload/documentacion/'.$imagen;
						   if(!empty($imagen) && file_exists($url)) { ?>
						<img src="admin/resources/upload/documentacion/<?=$imagen?>" alt="" class="left"/>
						<? } ?> 
						<h5><?=get_docs('organizacion_titulo')?></h5>
						<div class="cl">&nbsp;</div>
						<p><?=get_docs('organizacion_parrafo')?></p>
					</div>
					<div class="cl">&nbsp;</div>
				</section>

<? include ('footer.php'); ?>
