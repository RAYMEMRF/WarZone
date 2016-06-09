<? 
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST']);
ini_set('post_max_size', '64M');
ini_set('upload_max_filesize', '64M');

include ('header.php'); 

$sql = "SELECT * FROM servicios";
$query = query($sql);

?>
			
			<!-- main -->
			<div class="main">
				<h1>Nuestros Servicios</h1>
				<section class="cols">
					<? for($count=0; $services = fetch_array($query); $count++) 
					{ 
					if($count%2==0 && $count>0) 
					{ ?>
					<div class="cl">&nbsp;</div>
					<br>
					<? } ?> 
					<div class="col half<?=$count%2==0? '':' last'?>">
						<h3><?=$services['encabezado']?></h3>
						<? $imagen = $services['imagen'];
						   $url = SITE_ROOT.'/admin/resources/upload/servicios/'.$imagen;
						   if(!empty($imagen) && file_exists($url)) { ?>
						<img src="admin/resources/upload/servicios/<?=$imagen?>" alt="" class="left" height="84" width="97"/>
						<? } ?> 
						<h5><?=$services['titulo']?></h5>
						<div class="cl">&nbsp;</div>
						<p><?=$services['parrafo']?></p>
					</div>
					<? } ?>
					<div class="cl">&nbsp;</div>
				</section>
			
<? include ('footer.php'); ?>
