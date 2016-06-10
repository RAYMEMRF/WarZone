<? 
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST']);
include ('header.php'); 

$entry = !empty($_GET['entry'])? $_GET['entry'] : '0';
$sql = "SELECT * FROM blog  ORDER BY fecha DESC LIMIT ".$entry.",1";
$query = query($sql);
$blog = fetch_array($query);

$next = (int) $entry + 1;
$next_sql = "SELECT * FROM blog  ORDER BY fecha DESC LIMIT ".$next.",1";
$next_query = query($next_sql);
$next_exists = num_rows($next_query);
?>
			<!-- main -->
			<div class="main">
				<h1>Art&iacute;culos de Interes</h1>
				<section class="cols">
					<div class="col double">
						<h3><?=$blog['titulo']?></h3>
						<h5><a href="#"><?=$blog['autor']?></a> | <?=fechaAletras($blog['fecha']);?></h5>
						<div class="cl">&nbsp;</div>
						<?=$blog['entrada']?>
						<? if((int) $entry > 0) { ?>
						<a href="<?=HTTP_ROOT?>/blog.php?entry=<?=((int)$entry-1)?>"> &laquo; Anterior </a>&nbsp;&nbsp;&nbsp;
						<? }
						   if($next_exists > 0) { ?>
						<a href="<?=HTTP_ROOT?>/blog.php?entry=<?=$next?>">Pr&oacute;ximo &raquo;</a>
						<? } ?>
					</div>
					<div class="col last">
						<h3><strong>Archivo de blog</strong></h3>
						<ul>
							<li><a href="#"> <em>septiembre 2013</em> </a></li>
							<li><a href="#"> <em>agosto 2013</em> </a></li>
							<li><a href="#"> <em>julio 2013</em> </a></li>
							<li><a href="#"> <em>junio 2013</em> </a></li>
							<li><a href="#"> <em>mayo 2013</em> </a></li>
							<li><a href="#"> <em>abril 2013</em> </a></li>
							<li><a href="#"> <em>marzo 2013</em> </a></li>
							<li><a href="#"> <em>febrero 2013</em> </a></li>
							<li><a href="#"> <em>enero 2013</em> </a></li>
						</ul>
						<div class="cl">&nbsp;</div>
					</div>
					<div class="cl">&nbsp;</div>
				</section>
			
<? include ('footer.php'); ?>
