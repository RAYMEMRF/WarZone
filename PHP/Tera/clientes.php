<? 
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST']);
include ('header.php'); 

$sql = "SELECT * FROM clientes";
$query = query($sql);
$total_imagenes = num_rows($query);
?>
			<!-- main -->
			<div class="main">
				<h1>Portafolio de Clientes</h1>
				<section class="cols">
					<?php
					$directory = 'admin/resources/upload/clientes/';
					{
						$count=0;
						while ($cliente = fetch_array($query))
						{	
							$archivo = $cliente['imagen'];
							
							if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo))
							{
								$count++;
								
								if($count%3==0)
								{ 
						echo '
					<div class="col last">
						<h5>'.$cliente['nombre'].'</h5>
						<a href="http://'.$cliente['link'].'"><img src="'.$directory.$archivo.'" alt="" /></a>
						<p>'.$cliente['descripcion'].'</p>
					</div>';
									if($count<$total_imagenes)
									{
						echo '
					<div class="cl">&nbsp;</div>
					<br>';
									}
								}
								else
								{
						echo '
					<div class="col">
						<h5>'.$cliente['nombre'].'</h5>
						<a href="http://'.$cliente['link'].'"><img src="'.$directory.$archivo.'" alt="" /></a>
						<p>'.$cliente['descripcion'].'</p>
					</div>';
								}
							}
						}
					}
					?>
					
					<div class="cl">&nbsp;</div>
				</section>
			
<? include ('footer.php'); ?>
