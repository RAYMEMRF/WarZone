<?php
$sql = "SELECT * FROM blog  ORDER BY fecha DESC LIMIT 0,2";
$query = query($sql);
?>

<section class="entries">
	<div class="entry">
		<h3>&Uacute;ltimas entradas en el blog</h3>
		<? while($blog = fetch_array($query)) { ?>
		<div class="entry-inner">
			<div class="date">
				<strong><?=substr($blog['fecha'],8,2)?></strong>
				<span><?=substr($blog['fecha'],0,4)?></span>
				<em><?$fecha=split(" ",fechaAletras($blog['fecha'])); echo substr($fecha[2],0,3)?></em>
			</div>
			<div class="cnt">
				<?php $titulo = split(" ",$blog['titulo']);
				$suma = 0;
				$salida = '';
				foreach($titulo as $d)
				{
					if($suma < 26)
					{
						$suma += strlen($d).'<br>';
						$salida .= $d.' ';
					}
					else
						{	$salida .= '<br>'.$d.' ';
					$suma = 0;
				}
			}
			?>
			<p><a href="#"><?=$salida?></a></p>
			<p class="meta"><a href="#"><?=$blog['autor']?></a></p>
		</div>
	</div>
	<? }?>
</div>
<div class="entry">
	<h3>Redes sociales</h3>
	<div class="partners">
		<img src="css/images/socials-img.png" alt="" usemap="#socials"/>
		<map name="socials">
			<area shape="rect" coords="2,10,60,60" href="http://www.facebook.com/<?=get_docs('facebook')?>" alt="Facebook" target="_blank">
			<area shape="rect" coords="68,10,128,60" href="http://twitter.com/<?=get_docs('twitter')?>" alt="Twitter" target="_blank">
			<area shape="rect" coords="136,10,192,60" href="http://www.youtube.com/user/<?=get_docs('youtube')?>" alt="YouTube" target="_blank">
			<area shape="rect" coords="206,10,260,60" href="http://www.linkedin.com/profile/view?id=<?=get_docs('linkedin')?>" alt="LinkedIn" target="_blank">
		</map>
<!--							<table style="width: 100%">
							<tr>
							<td style="width: 50%"><img src="css/images/socials-fb.png" alt=""/><a href="www.facebook.com/TeraSoluciones">TeraSoluciones</a></td>
							<td style="width: 50%"><img src="css/images/socials-tw.png" alt=""/><a href="www.twitter.com/TeraSoluciones">@TeraSoluciones</a></td>
							</tr>
							<tr>
							<td style="width: 50%"><img src="css/images/socials-yt.png" alt=""/><a href="www.youtube.com/TeraSoluciones">TeraSoluciones</a></td>
							<td style="width: 50%"><img src="css/images/socials-in.png" alt=""/><a href="www.linkein.com/TeraSoluciones">TeraSoluciones</a></td>
							</tr>
							</table>


							<img src="css/images/partners-img.png" alt="" usemap="#socials"/>
							<map name="socials">
							  <area shape="circle" coords="20,10,70,60" href="http://www.facebook.com" alt="Facebook">
							  <area shape="circle" coords="90,58,3" href="mercur.htm" alt="Mercury">
							  <area shape="circle" coords="124,58,8" href="venus.htm" alt="Venus">
							</map>
						-->
					</div>
					<a href="http://perfil.mercadolibre.com.ve/<?=get_docs('mercadolibre')?>" target="_blank"><img src="css/images/mercadolibre.png" alt=""/></a>
				</div>
				<div class="entry">
					<h3>Ubiquenos</h3>

					<div class="testimonials">
						<p>
							<b>Dirección.</b> <? $direccion = split(" ",get_setting('direccion'));
							$suma = 0;
							$salida = '';
							foreach($direccion as $d)
							{
								if($suma < 27)
								{
									$suma += strlen($d).'<br>';
									$salida .= $d.' ';
								}
								else
									{	$salida .= '<br>'.$d.' ';
								$suma = 0;
							}
						}
						echo $salida;
						?><br>
						<b>Tel.</b> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<?=get_setting('soporte_tlf'); ?><br>
						<b>Móvil.</b> &nbsp;&nbsp; &nbsp;<?=get_setting('soporte_movil'); ?><br>
						<b>E-mail.</b>&nbsp;&nbsp; &nbsp;<a href="mailto:<?=get_setting('soporte_correo'); ?>"><?=get_setting('soporte_correo'); ?></a> <br>
						<?=get_setting('ciudad'); ?>, <?=get_setting('estado'); ?> - Venezuela
					</p>
				</div>
			</div>
			<div class="cl">&nbsp;</div>
		</section>
	</div>
	<!-- end of main -->
	<div class="cl">&nbsp;</div>

	<!-- footer -->
	<div id="footer">
		<div class="footer-nav">
			<ul>
				<li><a href="#">Inicio</a></li>
				<? if (get_setting('nosotros')) { ?>
				<li><a href="#">Nosotros</a></li>
				<? } ?>
				<? if (get_setting('servicios')) { ?>
				<li><a href="#">Servicios</a></li>
				<? } ?>
				<? if (get_setting('productos')) { ?>
				<li><a href="#">Productos</a></li>
				<? } ?>
				<? if (get_setting('clientes')) { ?>
				<li><a href="#">Clientes</a></li>
				<? } ?>
				<? if (get_setting('soporte')) { ?>
				<li><a href="#">Soporte</a></li>
				<? } ?>
				<? if (get_setting('pagos')) { ?>
				<li><a href="#">Pagos</a></li>
				<? } ?>
				<? if (get_setting('blog')) { ?>
				<li><a href="#">Blog</a></li>
				<? } ?>
				<? if (get_setting('contacto')) { ?>
				<li><a href="#">Contacto</a></li>
				<? } ?>
			</ul>
			<div class="cl">&nbsp;</div>
		</div>
		<p class="copy">Este sitio web fue desarrollado por <a target="_blank" href="http://www.cesca-software.com/web/" target="_blank">cesca-software.com</a> &copy; 2013 | <a href="admin/" title="Panel administrador"><img src="css/images/1381399534_computer_key.png" height="12" width="12"></a></p>
		<div class="cl">&nbsp;</div>
	</div>
	<!-- end of footer -->
</div>
<!-- end of container -->
</div>
<!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>
